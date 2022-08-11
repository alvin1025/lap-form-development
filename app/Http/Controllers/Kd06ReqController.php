<?php

namespace App\Http\Controllers;

use App\Models\Kd06Req;
use App\Http\Requests\StoreKd06ReqRequest;
use App\Http\Requests\UpdateKd06ReqRequest;
use App\Models\AgentMaster;
use App\Models\Assignment;
use App\Models\BizType;
use App\Models\ClmAsi;
use App\Models\DelCon;
use App\Models\Kd06;
use App\Models\Kurs;
use App\Models\Negara;
use App\Models\PayTerm;
use App\Models\Satuan;
use App\Models\Sd;
use App\Models\Sg;
use App\Models\Tax;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class Kd06ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd06 = Kd06::all();
        $kd06Req = Kd06Req::all();
        return view('dashboard.salesFolder.Kd6Req.index', [
            'kd06' => $kd06,
            'kd06req' => $kd06Req
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kd06 = Kd06::all();
        $kd06Req = Kd06Req::all();
        $user = auth()->user()->employee_name;
        $sd = Sd::all();
        $sg = Sg::all();
        $pays = PayTerm::all();
        $bizType = BizType::all();
        $tax = Tax::all();
        $assignment = Assignment::all();
        $delCon = DelCon::all();
        $kurs = Kurs::all();
        $satuan = Satuan::all();
        $negara = Negara::all();
        $agent = AgentMaster::all();
        $clm = ClmAsi::all();
        return view('dashboard.salesFolder.Kd6Req.create', [
            'kd06' => $kd06Req,
            'sds' => $sd,
            'sgs' => $sg,
            'agents' => $agent,
            'users' => $user,
            'bizTypes' => $bizType,
            'taxs' => $tax,
            'assignments' => $assignment,
            'delCons' => $delCon,
            'kurses' => $kurs,
            'satuans' => $satuan,
            'pays' => $pays,
            'negaras' => $negara,
            'clms' => $clm,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKd06ReqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kd6no_cust' => 'nullable',
            'sd' => 'nullable',
            'payterm' => 'nullable',
            'kd6tax' => 'nullable',
            'del_con' => 'nullable',
            'kd6sg' => 'nullable',
            'kurs' => 'nullable',
            'assigment' => 'nullable',
            'satuan' => 'nullable',
            'biz_type_p1' => 'nullable',
            'nama_agent1' => 'nullable',
            'sales' => 'nullable',
            'staff_member' => 'nullable',
            'from' => 'nullable',
            'to' => 'nullable',
            'allowance_qty' => 'nullable',
            'pc' => 'nullable',
            'print' => 'nullable',
            'status' => 'nullable',
            'status_old' => 'nullable',
            // addnew
            'sd_old' => 'nullable',
            'kd6sg_old' => 'nullable',
            'biz_type_p1_old' => 'nullable',
            'nama_agent1_old' => 'nullable',
            'allowance_qty_old' => 'nullable',
            'kd6tax_old' => 'nullable',
            'del_con_old' => 'nullable',
            'payterm_old' => 'nullable',
            'kurs_old' => 'nullable',
            'satuan_old' => 'nullable',
            'sales_old' => 'nullable',
            'staff_member_old' => 'nullable',
            'from_old' => 'nullable',
            'to_old' => 'nullable',
            'pc_old' => 'nullable',
            'print_old' => 'nullable',
            'assigment_old' => 'nullable',
            // approval
            'status_form' => 'nullable',
            'created_by' => 'nullable',
            'submitted_by' => 'nullable',
            'acknowledged_by	' => 'nullable',
            'aprv1_by' => 'nullable',
            'aprv2_by' => 'nullable',
            'inputted_by' => 'nullable',
            'rejected_by' => 'nullable',
            'reject_reason' => 'nullable',
            'emailUser' => 'nullable',
            'sd_old' => 'nullable',
            'kd6sg' => 'nullable',


        ]);
        $validated['emailUser'] = auth()->user()->email;
        Kd06Req::create($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd6')->with('success', 'Kd06 Request Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kd06Req  $kd06Req
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $kd06 = Kd06::all();
        $kd06Req = Kd06Req::findOrFail($id);
        return view('dashboard.salesFolder.Kd6Req.show', [
            // 'kd06' => $kd06,
            'kd06' => $kd06Req
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kd06Req  $kd06Req
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kd06Req = Kd06Req::findOrFail($id);
        $user = auth()->user()->employee_name;
        $sd = Sd::all();
        $sg = Sg::all();
        $pays = PayTerm::all();
        $bizType = BizType::all();
        $tax = Tax::all();
        $assignment = Assignment::all();
        $delCon = DelCon::all();
        $kurs = Kurs::all();
        $satuan = Satuan::all();
        $negara = Negara::all();
        $agent = AgentMaster::all();
        $clm = ClmAsi::all();
        return view('dashboard.salesFolder.Kd6Req.edit', [
            'kd06' => $kd06Req,
            'sds' => $sd,
            'sgs' => $sg,
            'agents' => $agent,
            'users' => $user,
            'bizTypes' => $bizType,
            'taxs' => $tax,
            'assignments' => $assignment,
            'delCons' => $delCon,
            'kurses' => $kurs,
            'satuans' => $satuan,
            'pays' => $pays,
            'negaras' => $negara,
            'clms' => $clm,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKd06ReqRequest  $request
     * @param  \App\Models\Kd06Req  $kd06Req
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kd6no_cust' => 'nullable',
            'sd' => 'nullable',
            'payterm' => 'nullable',
            'kd6tax' => 'nullable',
            'del_con' => 'nullable',
            'kd6sg' => 'nullable',
            'kurs' => 'nullable',
            'assigment' => 'nullable',
            'satuan' => 'nullable',
            'biz_type_p1' => 'nullable',
            'nama_agent1' => 'nullable',
            'sales' => 'nullable',
            'staff_member' => 'nullable',
            'from' => 'nullable',
            'to' => 'nullable',
            'allowance_qty' => 'nullable',
            'pc' => 'nullable',
            'print' => 'nullable',
            'status' => 'nullable'
        ]);

        Kd06Req::where('id', $id)->update($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd6')->with('success', 'Kd06 Request Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kd06Req  $kd06Req
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd06Req::destroy($id);
        return redirect('/dashboard/salesFolder/kd06request')->with('success', 'Kd06 Request Has Been Deleted!');
    }

    public function pdfKd6Request($id){
        $data['kd06'] = Kd06Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd06Pdf', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd6RequestFin($id){
        $data['kd06'] = Kd06Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd06PdfFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd6RequestAdd($id){
        $data['kd06'] = Kd06Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd06AddPdf', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function pdfKd6RequestAddFin($id){
        $data['kd06'] = Kd06Req::all()->where('id', $id);

        $pdf = Pdf::loadView('kd06AddPdfFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function inputted(){
        $kd06 = Kd06Req::all()->where('status_form', 'inputted');

        return view('dashboard.salesFolder.Kd6Req.inputted',[
            'kd06req' => $kd06
        ]);
    }

    public function finished(){
        $kd06 = Kd06Req::all()->where('status_form', 'finished');

        return view('dashboard.salesFolder.Kd6Req.finished',[
            'kd06req' => $kd06
        ]);
    }

    public function reject(){
        $kd06 = Kd06Req::all()->where('status_form', 'rejected');

        return view('dashboard.salesFolder.Kd6Req.reject',[
            'kd06req' => $kd06
        ]);
    }
}
