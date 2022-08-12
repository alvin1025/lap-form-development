<?php

namespace App\Http\Controllers;

use App\Models\Kd11Req;
use App\Http\Requests\StoreKd11ReqRequest;
use App\Http\Requests\UpdateKd11ReqRequest;
use App\Models\Kd06;
use App\Models\Kd11;
use App\Models\Sd;
use App\Models\Sg;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kd11ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd11I = Kd11Req::latest()->get();
        $kd11 = Kd11::all();
        $kd11Req = $kd11I->unique('association_no1');
        return view('dashboard.salesFolder.Kd11Req.index', [
            'kd11req' => $kd11Req,
            'kd11' => $kd11
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($kd11request)
    {
        $kd6 = Kd06::where('kd6no_cust', $kd11request->kd11no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');
        $kd11Req = Kd11Req::all();
        return view('dashboard.salesFolder.Kd11Req.create', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd11' => $kd11Req,
            'assocs' => $assoc
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKd11ReqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kd11no_cust' => 'nullable',
            'sd1' => 'nullable',
            'sg1' => 'nullable',
            'association_no1' => 'nullable',
            'status1' => 'nullable',
            'status_old' => 'nullable',
            'central_regu1' => 'nullable',
            'conditions1' => 'nullable',
            // addnew
            'sd1_old' => 'nullable',
            'sg1_old' => 'nullable',
            'association_no1_old' => 'nullable',
            'validity_from1_old' => 'nullable',
            'validity_to1_old' => 'nullable',
            'central_regu1_old' => 'nullable',
            'conditions1_old' => 'nullable',
            // aproval
            'status_form' => 'nullable',
            'created_by' => 'nullable',
            'aprv1_by' => 'nullable',
            'aprv2_by' => 'nullable',
            'inputted_by' => 'nullable',
            'rejectted_by' => 'nullable',
            'reject_reason' => 'nullable',
            'emailUser' => 'nullable'
        ]);
        $validated['emailUser'] = auth()->user()->email;
        Kd11Req::create($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd11')->with('success', 'Kd11 Request Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kd11Req  $kd11Req
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sd = Sd::all();
        $sg = Sg::all();
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');
        $kd11Req = Kd11Req::findOrFail($id);
        return view('dashboard.salesFolder.Kd11Req.show', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd11' => $kd11Req,
            'assocs' => $assoc
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kd11Req  $kd11Req
     * @return \Illuminate\Http\Response
     */
    public function edit($kd11request)
    {
        $kd11Req = Kd11Req::findOrFail($kd11request);
        $kd6 = Kd06::where('kd6no_cust', $kd11Req->kd11no_cust);
        // dd($kd6);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');
        
        return view('dashboard.salesFolder.Kd11Req.edit', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd11' => $kd11Req,
            'assocs' => $assoc
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKd11ReqRequest  $request
     * @param  \App\Models\Kd11Req  $kd11Req
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $validated = $request->validate([
            'kd11no_cust' => 'nullable',
            'sd1' => 'nullable',
            'sg1' => 'nullable',
            'association_no1' => 'nullable',
            'status1' => 'nullable',
            'status_old' => 'nullable',
            'central_regu1' => 'nullable',
            'conditions1' => 'nullable',
            'sd1_old' => 'nullable',
            'sg1_old' => 'nullable',
            'association_no1_old' => 'nullable',
            'validity_from1_old' => 'nullable',
            'validity_to1_old' => 'nullable',
            'central_regu1_old' => 'nullable',
            'conditions1_old' => 'nullable',
        ]);

        Kd11Req::where('id', $id)->update($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd11')->with('success', 'Kd11 Request Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kd11Req  $kd11Req
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd11Req::destroy($id);
        return redirect('/dashboard/salesFolder/kd11request')->with('success', 'Kd11 Request Has Been Deleted!');
    }

    public function pdfKd11Request($id){
        $data['kd11'] = Kd11Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd11Pdf', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd11RequestFin($id){
        $data['kd11'] = Kd11Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd11PdfFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd11RequestAdd($id){
        $data['kd11'] = Kd11Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd11AddPdf', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd11RequestAddFin($id){
        $data['kd11'] = Kd11Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd11AddPdfFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function inputted(){
        $kd11 = Kd11Req::all()->where('status_form', 'inputted');
        return view('dashboard.salesFolder.Kd11Req.inputted',[
            'kd11req' => $kd11
        ]);
    }

    public function finished(){
        $kd11 = Kd11Req::all()->where('status_form', 'finished');
        return view('dashboard.salesFolder.Kd11Req.finished',[
            'kd11req' => $kd11
        ]);
    }

    public function reject(){
        $kd11 = Kd11Req::all()->where('status_form', 'rejected')->where('emailUser', auth()->user()->email);
        return view('dashboard.salesFolder.Kd11Req.reject',[
            'kd11req' => $kd11
        ]);
    }
}
