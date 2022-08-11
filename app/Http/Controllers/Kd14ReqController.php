<?php

namespace App\Http\Controllers;

use App\Models\Kd14Req;
use App\Http\Requests\StoreKd14ReqRequest;
use App\Http\Requests\UpdateKd14ReqRequest;
use App\Models\Kd05;
use App\Models\Kd05Req;
use App\Models\Kd06;
use App\Models\Kd06Req;
use App\Models\Kd14;
use App\Models\Sd;
use App\Models\Sg;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kd14ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd14 = Kd14::all();
        $kd14I = Kd14Req::latest()->get();
        $kd14req = $kd14I->unique('cp1');
        return view('dashboard.salesFolder.Kd14Req.index', [
            'kd14' => $kd14,
            'kd14req' => $kd14req
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($kd14request)
    {
        $kd14req = Kd14Req::all();
        $s = Kd05::where('no_cust1', $kd14request->kd14no_cust);
        $kd6 = Kd06::where('kd6no_cust', $kd14request->kd14no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $kd05 = $s->distinct('addresscode1')->get('addresscode1');
        return view('dashboard.salesFolder.Kd14Req.create', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14req,
            'kd05' => $kd05
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKd14ReqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kd14no_cust' => 'nullable',
            'cp1' => 'nullable',
            'nama_cp1' => 'nullable',
            'mobile_cp1' => 'nullable',
            'phone_cp1' => 'nullable',
            'function_cp1' => 'nullable',
            'role_cp1' => 'nullable',
            'sinc_cp1' => 'nullable',
            'email_cp1' => 'nullable',
            'sd_cp1' => 'nullable',
            'sg_cp1' => 'nullable',
            'add_addr_cp1' => 'nullable',
            'status' => 'nullable',
            'status_old' => 'nullable',
            'nama_cp1_old' => 'nullable',
            'phone_cp1_old' => 'nullable',
            'email_cp1_old' => 'nullable',
            'sd_cp1_old' => 'nullable',
            'sg_cp1_old' => 'nullable',
            'function_cp1_old' => 'nullable',
            'sinc_cp1_old' => 'nullable',
            'add_addr_cp1_old' => 'nullable',
            'mobile_cp1_old' => 'nullable',
            'cp1_old' => 'nullable',
            // aproval
            'status_form' => 'nullable',
            'created_by' => 'nullable',
            'aprv1_by' => 'nullable',
            'aprv2_by' => 'nullable',
            'inputted_by' => 'nullable',
            'rejectted_by' => 'nullable',
            'reject_reason' => 'nullable',
            'emailUser' => 'nullable',

        ]);
        $validated['emailUser'] = auth()->user()->email;
        Kd14Req::create($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd14')->with('success', 'Kd14 Request Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kd14Req  $kd14Req
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kd14req = Kd14Req::findOrFail($id);
        $sd = Sd::all();
        $sg = Sg::all();
        $kd05 = DB::table('kd05')->distinct('addit1')->get('addit1');
        return view('dashboard.salesFolder.Kd14Req.show', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14req,
            'kd05' => $kd05
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kd14Req  $kd14Req
     * @return \Illuminate\Http\Response
     */
    public function edit($kd14request)
    {
        // dd($kd14request);
        $kd14req = Kd14Req::findOrFail($kd14request);
        $s = Kd05::where('no_cust1', $kd14req->kd14no_cust);
        $kd6 = Kd06::where('kd6no_cust', $kd14req->kd14no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $kd05 = $s->distinct('addresscode1')->get('addresscode1');
        return view('dashboard.salesFolder.Kd14Req.edit', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14req,
            'kd05' => $kd05
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKd14ReqRequest  $request
     * @param  \App\Models\Kd14Req  $kd14Req
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kd14no_cust' => 'nullable',
            'cp1' => 'nullable',
            'nama_cp1' => 'nullable',
            'mobile_cp1' => 'nullable',
            'phone_cp1' => 'nullable',
            'function_cp1' => 'nullable',
            'role_cp1' => 'nullable',
            'sinc_cp1' => 'nullable',
            'email_cp1' => 'nullable',
            'sd_cp1' => 'nullable',
            'sg_cp1' => 'nullable',
            'add_addr_cp1' => 'nullable',
            'status' => 'nullable',
            'status_old' => 'nullable',

            'nama_cp1_old' => 'nullable',
            'phone_cp1_old' => 'nullable',
            'email_cp1_old' => 'nullable',
            'sd_cp1_old' => 'nullable',
            'sg_cp1_old' => 'nullable',
            'function_cp1_old' => 'nullable',
            'sinc_cp1_old' => 'nullable',
            'add_addr_cp1_old' => 'nullable',
            'mobile_cp1_old' => 'nullable',
            'cp1_old' => 'nullable',

        ]);

        Kd14Req::where('id', $id)->update($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd14')->with('success', 'Kd14 Request Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kd14Req  $kd14Req
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd14Req::destroy($id);
        return redirect('/dashboard/salesFolder/kd14request')->with('success', 'Kd14 Request Has Been Deleted!');
    }

    public function pdfKd14Request($id){
        $data['kd14'] = Kd14Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd14Pdf', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd14RequestFin($id){
        $data['kd14'] = Kd14Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd14PdfFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd14RequestAdd($id){
        $data['kd14'] = Kd14Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd14AddPdf', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd14RequestAddFin($id){
        $data['kd14'] = Kd14Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd14AddPdfFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function inputted(){
        $kd14 = Kd14Req::all()->where('status_form', 'inputted');

        return view('dashboard.salesFolder.Kd14Req.inputted',[
            'kd14req' => $kd14
        ]);
    }

    public function finished(){
        $kd14 = Kd14Req::all()->where('status_form', 'finished');

        return view('dashboard.salesFolder.Kd14Req.finished',[
            'kd14req' => $kd14
        ]);
    }

    public function reject(){
        $kd14 = Kd14Req::all()->where('status_form', 'rejected');

        return view('dashboard.salesFolder.Kd14Req.reject',[
            'kd14req' => $kd14
        ]);
    }
}
