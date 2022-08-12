<?php

namespace App\Http\Controllers;

use App\Models\Kd05Req;
use App\Http\Requests\StoreKd05ReqRequest;
use App\Http\Requests\UpdateKd05ReqRequest;
use App\Models\Kd05;
use App\Models\KodeCountry;
use App\Models\Negara;
use App\Models\Tax;
use App\Models\Tittle;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Kd05ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd05I = Kd05Req::latest()->get();
        $kd05 = Kd05::all();
        $kd05Req = $kd05I->unique('addresscode1');
        return view('dashboard.salesFolder.Kd5Req.index', [
            'kd05' => $kd05,
            'kd05req' => $kd05Req
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = Tittle::all();
        $tax = Tax::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $kd05Req = Kd05Req::all();
        return view('dashboard.salesFolder.Kd5Req.create', [
            'titles' => $title,
            'taxs' => $tax,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kd05' => $kd05Req,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKd05ReqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_cust1' => 'nullable',
            'addresscode1' => 'nullable',
            'title1' => 'nullable',
            'kd5negara1' => 'nullable',
            'kode_county1' => 'nullable',
            'kota1' => 'nullable',
            'email1' => 'nullable',
            'telp1' => 'nullable|max:15',
            'npwp1' => 'nullable',
            'nama11' => 'nullable',
            'nama21' => 'nullable',
            'street1' => 'nullable',
            'addit1' => 'nullable',
            'postal_code1' => 'nullable',
            'po_box1' => 'nullable',
            'tax1' => 'nullable',
            'mobile1' => 'nullable',
            'home1' => 'nullable',
            'fax1' => 'nullable',
            'status' => 'nullable',
            'status_old' => 'nullable',
            'short_name1' => 'nullable',
            // addnew
            'home1_old' => 'nullable',
            'title1_old' => 'nullable',
            'kd5negara1_old' => 'nullable',
            'kode_county1_old' => 'nullable',
            'kota1_old' => 'nullable',
            'email1_old' => 'nullable',
            'telp1_old' => 'nullable',
            'npwp1_old' => 'nullable',
            'nama11_old' => 'nullable',
            'nama21_old' => 'nullable',
            'street1_old' => 'nullable',
            'addit1_old' => 'nullable',
            'postal_code1_old' => 'nullable',
            'po_box1_old' => 'nullable',
            'tax1_old' => 'nullable',
            'mobile1_old' => 'nullable',
            'fax1_old' => 'nullable',
            'status_form' => 'nullable',
            'created_by' => 'nullable',
            'aprv1_by' => 'nullable',
            'aprv2_by' => 'nullable',
            'inputted_by' => 'nullable',
            'rejectted_by' => 'nullable',
            'reject_reason' => 'nullable',
            'emailUser' => 'nullable',
            'addresscode1_old' => 'nullable',
            'ktp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'npwp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'ktp_image_old' => 'nullable',
            'npwp_image_old' => 'nullable',
        ]);

        if ($file = $request->file('ktp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($file->getClientOriginalName());
            $image_full_name = 'Kd05' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd05-Reqktp/';
            $image_url = $upload_path . $image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['ktp_image'] = $image;
        }
        if ($files = $request->file('npwp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($files->getClientOriginalName());
            $image_full_name = 'Kd05' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd05-Reqnpwp/';
            $image_url = $upload_path . $image_full_name;
            $files->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['npwp_image'] = $image;
        }


        $validated['emailUser'] = auth()->user()->email;
        Kd05Req::create($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd5')->with('success', 'Kd05 Request Has Been Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kd05Req  $kd05Req
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kd05Req = Kd05Req::findOrFail($id);
        return view('dashboard.salesFolder.Kd5Req.show', [
            'kd05' => $kd05Req
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kd05Req  $kd05Req
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = Tittle::all();
        $tax = Tax::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $kd05Req = Kd05Req::findOrFail($id);
        return view('dashboard.salesFolder.Kd5Req.edit', [
            'titles' => $title,
            'taxs' => $tax,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kd05' => $kd05Req,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKd05ReqRequest  $request
     * @param  \App\Models\Kd05Req  $kd05Req
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kd5 = Kd05Req::find($id);
        $validated = $request->validate([
            'no_cust1' => 'nullable',
            'addresscode1' => 'nullable',
            'title1' => 'nullable',
            'kd5negara1' => 'nullable',
            'kode_county1' => 'nullable',
            'kota1' => 'nullable',
            'email1' => 'nullable',
            'telp1' => 'nullable|max:15',
            'npwp1' => 'nullable',
            'nama11' => 'nullable',
            'nama21' => 'nullable',
            'street1' => 'nullable',
            'addit1' => 'nullable',
            'postal_code1' => 'nullable',
            'po_box1' => 'nullable',
            'tax1' => 'nullable',
            'mobile1' => 'nullable',
            'home1' => 'nullable',
            'fax1' => 'nullable',
            'status' => 'nullable',
            'status_old' => 'nullable',
            'addresscode1_old' => 'nullable',
            'ktp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'npwp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($file = $request->file('ktp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($file->getClientOriginalName());
            $image_full_name = 'Kd05' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd05-Reqktp/';
            $image_url = $upload_path . $image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['ktp_image'] = $image;
        }else {
            $validated['ktp_image'] = $kd5->ktp_image;
        }
        
        
        if ($files = $request->file('npwp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($files->getClientOriginalName());
            $image_full_name = 'Kd05' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd05-Reqnpwp/';
            $image_url = $upload_path . $image_full_name;
            $files->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['npwp_image'] = $image;
        }else {
            $validated['npwp_image'] = $kd5->npwp_image;
        }
        Kd05Req::where('id', $kd5->id)->update($validated);

        return redirect('/dashboard/salesFolder/change/request/submit/indexkd5')->with('success', 'Kd05 Request Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kd05Req  $kd05Req
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd05Req::destroy($id);
        return redirect('/dashboard/salesFolder/kd05request')->with('success', 'Kd05 Request Has Been Deleted!');
    }

    public function pdfKd5Request($id){
        $data['kd05'] = Kd05Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd05Pdf', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd5RequestFin($id){
        $data['kd05'] = Kd05Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd05PdfFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd5RequestAdd($id){
        $data['kd05'] = Kd05Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd05AddPdf', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd5RequestAddFin($id){
        $data['kd05'] = Kd05Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd05AddPdfFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function inputted(){
        $kd05 = Kd05Req::all()->where('status_form', 'inputted');

        return view('dashboard.salesFolder.Kd5Req.inputted',[
            'kd05req' => $kd05
        ]);

    }

    public function finished(){
        $kd05 = Kd05Req::all()->where('status_form', 'finished');

        return view('dashboard.salesFolder.Kd5Req.finished',[
            'kd05req' => $kd05
        ]);

    }

    public function reject(){
        $kd05 = Kd05Req::all()->where('status_form', 'rejected')->where('emailUser', auth()->user()->email);

        return view('dashboard.salesFolder.Kd5Req.reject',[
            'kd05req' => $kd05
        ]);

    }
}
