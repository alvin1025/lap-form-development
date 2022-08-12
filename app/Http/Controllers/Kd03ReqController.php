<?php

namespace App\Http\Controllers;

use App\Models\Kd03Req;
use App\Http\Requests\StoreKd03ReqRequest;
use App\Http\Requests\UpdateKd03ReqRequest;
use App\Models\Classes;
use App\Models\Kd03 as ModelsKd03;
use App\Models\KodeCountry;
use App\Models\Negara;
use App\Models\Tax;
use App\Models\Tittle;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\DB;
use Kd03;
// use DB;

class Kd03ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kd03 = ModelsKd03::all();
        $kd03R = Kd03Req::latest()->get();
        // $collect = collect($kd03R)->max();

        $kd03Req = $kd03R->unique('no_cust');
        // dd($kd03Req);
        return view('dashboard.salesFolder.Kd3Req.index', [
            'kd03req' => $kd03Req,
            'kd03' => $kd03,
            // 'db' => $db
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
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $tax = Tax::all();
        $kd03Req = Kd03Req::all();
        return view('dashboard.salesFolder.Kd3Req.create', [
            'kd03req' => $kd03Req,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'taxs' => $tax,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKd03ReqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'class' => 'nullable',
            'no_cust' => 'nullable',
            'title' => 'nullable',
            // 'kode_cust' => 'nullable',
            'kode_county' => 'nullable',
            'kota' => 'nullable',
            'email' => 'nullable',
            'telp' => 'nullable',
            'npwp' => 'nullable',
            'short_name' => 'nullable',
            'nama1' => 'nullable',
            'nama2' => 'nullable',
            'street' => 'nullable',
            'negara' => 'nullable',
            'addit' => 'nullable',
            'postal_code' => 'nullable',
            'po_box' => 'nullable',
            'tax' => 'nullable',
            'mobile' => 'nullable',
            'home' => 'nullable',
            'fax' => 'nullable',
            'status' => 'nullable',
            'created_by' => 'nullable',
            'submitted_by' => 'nullable',
            'aprv1_by' => 'nullable',
            'aprv2_by' => 'nullable',
            'inputted_by' => 'nullable',
            'finished_by' => 'nullable',
            'rejectted_by' => 'nullable',
            'reject_reason' => 'nullable',
            'status_form' => 'nullable',
            // new
            'class_old' => 'nullable',
            'title_old' => 'nullable',
            'negara_old' => 'nullable',
            'kode_county_old' => 'nullable',
            'kota_old' => 'nullable',
            'email_old' => 'nullable',
            'telp_old' => 'nullable',
            'npwp_old' => 'nullable',
            'short_name_old	' => 'nullable',
            'nama1_old' => 'nullable',
            'nama2_old' => 'nullable',
            'street_old' => 'nullable',
            'addit_old' => 'nullable',
            'postal_code_old' => 'nullable',
            'po_box_old' => 'nullable',
            'tax_old' => 'nullable',
            'mobile_old' => 'nullable',
            'home_old' => 'nullable',
            'fax_old' => 'nullable',
            'status_old' => 'nullable',
            'emailUser' => 'nullable',
            'ktp_image' => 'nullable|file|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'npwp_image' => 'nullable|file|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'ktp_image_old' => 'nullable',
            'npwp_image_old' => 'nullable',
        ]);
        $validated['emailUser'] = auth()->user()->email;

        if ($file = $request->file('ktp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($file->getClientOriginalName());
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-ktpReq/';
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
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-npwpReq/';
            $image_url = $upload_path . $image_full_name;
            $files->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['npwp_image'] = $image;
        }

        
        // dd($validated);
        Kd03Req::create($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd3')->with('success', 'Kd03 Request Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kd03Req  $kd03Req
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kd03Req = Kd03Req::findOrFail($id);
        return view('dashboard.salesFolder.Kd3Req.show', [
            'kd03' => $kd03Req
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kd03Req  $kd03Req
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = Tittle::all();
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $tax = Tax::all();
        $kd03Req = Kd03Req::findOrFail($id);
        return view('dashboard.salesFolder.Kd3Req.edit', [
            'kd03' => $kd03Req,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'taxs' => $tax,
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKd03ReqRequest  $request
     * @param  \App\Models\Kd03Req  $kd03Req
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $kd03request = Kd03Req::find($id);
        $validated = $request->validate([
            'class' => 'nullable',
            'no_cust' => 'nullable',
            'title' => 'nullable',
            // 'kode_cust' => 'nullable',
            'kode_county' => 'nullable',
            'kota' => 'nullable',
            'email' => 'nullable',
            'telp' => 'nullable',
            'npwp' => 'nullable',
            'short_name' => 'nullable',
            'nama1' => 'nullable',
            'nama2' => 'nullable',
            'street' => 'nullable',
            'negara' => 'nullable',
            'addit' => 'nullable',
            'postal_code' => 'nullable',
            'po_box' => 'nullable',
            'tax' => 'nullable',
            'mobile' => 'nullable',
            'home' => 'nullable',
            'fax' => 'nullable',
            'status' => 'nullable',
            // new
            'class_old' => 'nullable',
            'status_old' => 'nullable',
            'title_old' => 'nullable',
            'negara_old' => 'nullable',
            'kode_county_old' => 'nullable',
            'kota_old' => 'nullable',
            'email_old' => 'nullable',
            'telp_old' => 'nullable',
            'npwp_old' => 'nullable',
            'short_name_old	' => 'nullable',
            'nama1_old' => 'nullable',
            'nama2_old' => 'nullable',
            'street_old' => 'nullable',
            'addit_old' => 'nullable',
            'postal_code_old' => 'nullable',
            'po_box_old' => 'nullable',
            'tax_old' => 'nullable',
            'mobile_old' => 'nullable',
            'home_old' => 'nullable',
            'fax_old' => 'nullable',
            'ktp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'npwp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($file = $request->file('ktp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($file->getClientOriginalName());
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-ktpReq/';
            $image_url = $upload_path . $image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['ktp_image'] = $image;
        }else {
            $validated['ktp_image'] = $kd03request->ktp_image;
        }
        
        // dd($kd03request->ktp_image);
        if ($files = $request->file('npwp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($files->getClientOriginalName());
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-npwpReq/';
            $image_url = $upload_path . $image_full_name;
            $files->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['npwp_image'] = $image;
        }else {
            $validated['npwp_image'] = $kd03request->npwp_image;
        }



        Kd03Req::where('id', $kd03request->id)->update($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd3')->with('success', 'Kd03 Request Has Been Updated!');
    }

    public function update2(Request $request, Kd03 $kd03request)
    {

        $validated = $request->validate([
            'class' => 'nullable',
            'no_cust' => 'nullable',
            'title' => 'nullable',
            // 'kode_cust' => 'nullable',
            'kode_county' => 'nullable',
            'kota' => 'nullable',
            'email' => 'nullable',
            'telp' => 'nullable',
            'npwp' => 'nullable',
            'short_name' => 'nullable',
            'nama1' => 'nullable',
            'nama2' => 'nullable',
            'street' => 'nullable',
            'negara' => 'nullable',
            'addit' => 'nullable',
            'postal_code' => 'nullable',
            'po_box' => 'nullable',
            'tax' => 'nullable',
            'mobile' => 'nullable',
            'home' => 'nullable',
            'fax' => 'nullable',
            'status' => 'nullable',
            // new
            'class_old' => 'nullable',
            'status_old' => 'nullable',
            'title_old' => 'nullable',
            'negara_old' => 'nullable',
            'kode_county_old' => 'nullable',
            'kota_old' => 'nullable',
            'email_old' => 'nullable',
            'telp_old' => 'nullable',
            'npwp_old' => 'nullable',
            'short_name_old	' => 'nullable',
            'nama1_old' => 'nullable',
            'nama2_old' => 'nullable',
            'street_old' => 'nullable',
            'addit_old' => 'nullable',
            'postal_code_old' => 'nullable',
            'po_box_old' => 'nullable',
            'tax_old' => 'nullable',
            'mobile_old' => 'nullable',
            'home_old' => 'nullable',
            'fax_old' => 'nullable',
            'ktp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'npwp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($file = $request->file('ktp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($file->getClientOriginalName());
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-ktpReq/';
            $image_url = $upload_path . $image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['ktp_image'] = $image;
        }else {
            $validated['ktp_image'] = $kd03request->ktp_image;
        }
        
        // dd($kd03request->ktp_image);
        if ($files = $request->file('npwp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($files->getClientOriginalName());
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-npwpReq/';
            $image_url = $upload_path . $image_full_name;
            $files->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['npwp_image'] = $image;
        }else {
            $validated['npwp_image'] = $kd03request->npwp_image;
        }



        Kd03Req::where('id', $kd03request->id)->update($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd3')->with('success', 'Kd03 Request Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kd03Req  $kd03Req
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd03Req::destroy($id);
        return redirect('/dashboard/salesFolder/kd03request')->with('success', 'Kd03 Request Has Been Deleted!');
    }

    public function pdfReqKd03($id){
        $data['kd03'] = Kd03Req::all()->where('id', $id);
        // dd($data); funct

        $pdf = FacadePdf::loadView('pdfKd03Req', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfReqKd03Fin($id){
        $data['kd03'] = Kd03Req::all()->where('id', $id);
        // dd($data); funct

        $pdf = FacadePdf::loadView('pdfKd03ReqFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function inputted(){
        $kd03 = Kd03Req::all()->where('status_form', 'inputted');

        return view('dashboard.salesFolder.Kd3Req.inputted',[
            'kd03req' => $kd03
        ]);
    }

    public function finished(){
        $kd03 = Kd03Req::all()->where('status_form', 'finished');

        return view('dashboard.salesFolder.Kd3Req.finished',[
            'kd03req' => $kd03
        ]);
    }
    
    public function reject(){
        $kd03 = Kd03Req::all()->where('status_form', 'rejected')->where('emailUser', auth()->user()->email);

        return view('dashboard.salesFolder.Kd3Req.reject',[
            'kd03req' => $kd03
        ]);
    }

   
}
