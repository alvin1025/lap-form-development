<?php

namespace App\Http\Controllers;

use App\Models\Kd04Request;
use App\Http\Requests\StoreKd04RequestRequest;
use App\Http\Requests\UpdateKd04RequestRequest;
use App\Models\BlockReason;
use App\Models\CreditLimit;
use App\Models\Kd04;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class Kd04RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd04I = Kd04Request::latest()->get();
        $kd04 = Kd04::all();
        $kd04Req = $kd04I->unique('kd4no_cust');
        return view('dashboard.salesFolder.Kd4Req.index', [
            'kd04req' => $kd04Req,
            'kd04' => $kd04
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kd04Req = Kd04Request::all();
        $credit = CreditLimit::all();
        $block = BlockReason::all();
        return view('dashboard.salesFolder.Kd4Req.create', [
            'kd04' => $kd04Req,
            'credits' => $credit,
            'blocks' => $block,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKd04RequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kd4no_cust' => 'nullable',
            'no_debitor' => 'nullable',
            'no_creditor' => 'nullable',
            'no_group_cust' => 'nullable',
            'credit_cust' => 'nullable',
            'credit_limit' => 'nullable',
            'credit_limit2' => 'nullable',
            'credit_limit3' => 'nullable',
            'credit_limit4' => 'nullable',
            'credit_limit5' => 'nullable',
            'credit_from' => 'nullable',
            'credit_to' => 'nullable',
            'credit_line_check' => 'nullable',
            'block_delivery' => 'nullable',
            'block' => 'nullable',
            'block_reason' => 'nullable',
            'created_by' => 'nullable',
            'rejected_by' => 'nullable',
            'submitted_by' => 'nullable',
            'acknowledged_by' => 'nullable',
            'aprv1_by' => 'nullable',
            'aprv2_by' => 'nullable',
            'inputted_by' => 'nullable',
            'reject_reason' => 'nullable',
            'status_form' => 'nullable',
            'status_old' => 'nullable',

            // new
            'credit_limit_old' => 'nullable',
            'no_debitor_old' => 'nullable',
            'no_creditor_old' => 'nullable',
            'no_group_cust_old' => 'nullable',
            'credit_cust_old' => 'nullable',
            'credit_from_old' => 'nullable',
            'credit_to_old' => 'nullable',
            'credit_line_check_old' => 'nullable',
            'block_delivery_old' => 'nullable',
            'block_old' => 'nullable',
            'block_reason_old' => 'nullable',
            'emailUser' => 'nullable'
        ]);
        $validated['emailUser'] = auth()->user()->email;
        Kd04Request::create($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd4')->with('success', 'Kd04 Request Has Been Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kd04Request  $kd04Request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kd04Req = Kd04Request::findOrFail($id);
        return view('dashboard.salesFolder.Kd4Req.show', [
            'kd04' => $kd04Req
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kd04Request  $kd04Request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kd04Req = Kd04Request::findOrFail($id);
        $credit = CreditLimit::all();
        $block = BlockReason::all();
        return view('dashboard.salesFolder.Kd4Req.edit', [
            'credits' => $credit,
            'kd04' => $kd04Req,
            'blocks' => $block
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKd04RequestRequest  $request
     * @param  \App\Models\Kd04Request  $kd04Request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $validated = $request->validate([
            'kd4no_cust' => 'nullable',
            'no_debitor' => 'nullable',
            'no_creditor' => 'nullable',
            'no_group_cust' => 'nullable',
            'credit_cust' => 'nullable',
            'credit_limit' => 'nullable',
            'credit_limit2' => 'nullable',
            'credit_limit3' => 'nullable',
            'credit_limit4' => 'nullable',
            'credit_limit5' => 'nullable',
            'credit_from' => 'nullable',
            'credit_to' => 'nullable',
            'credit_line_check' => 'nullable',
            'block_delivery' => 'nullable',
            'block' => 'nullable',
            'block_reason' => 'nullable',

            // new
            'credit_limit_old' => 'nullable',
            'no_debitor_old' => 'nullable',
            'no_creditor_old' => 'nullable',
            'no_group_cust_old' => 'nullable',
            'credit_cust_old' => 'nullable',
            'credit_from_old' => 'nullable',
            'credit_to_old' => 'nullable',
            'credit_line_check_old' => 'nullable',
            'block_delivery_old' => 'nullable',
            'block_old' => 'nullable',
            'block_reason_old' => 'nullable',
            'status' => 'nullable',
            'status_old' => 'nullable',
        ]);
        Kd04Request::where('id', $id)->update($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd4')->with('success', 'Kd04 Request Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kd04Request  $kd04Request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd04Request::destroy($id);
        return redirect('/dashboard/salesFolder/kd04request')->with('success', 'Kd04 Request Has Been Deleted!');
    }

    public function kd04Pdf($id){
        $data['kd04'] = Kd04Request::all()->where('id', $id);

        $pdf = Pdf::loadView('kd04Pdf', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }
    public function kd04PdfFin($id){
        $data['kd04'] = Kd04Request::all()->where('id', $id);

        $pdf = Pdf::loadView('kd04PdfFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function inputted(){
        $kd04 = Kd04Request::all()->where('status_form', 'inputted');
        return view('dashboard.salesFolder.Kd4Req.inputted',[
            'kd04req' => $kd04
        ]);
    }

    public function finished(){
        $kd04 = Kd04Request::all()->where('status_form', 'finished');
        return view('dashboard.salesFolder.Kd4Req.finished',[
            'kd04req' => $kd04
        ]);
    }

    public function reject(){
        $kd04 = Kd04Request::all()->where('status_form', 'rejected')->where('emailUser', auth()->user()->email);
        return view('dashboard.salesFolder.Kd4Req.reject',[
            'kd04req' => $kd04
        ]);
    }
}
