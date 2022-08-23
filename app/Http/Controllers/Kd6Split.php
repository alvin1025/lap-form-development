<?php

namespace App\Http\Controllers;

use App\Imports\Kd06Import;
use App\Models\Agent;
use App\Models\AgentMaster;
use App\Models\Assignment;
use App\Models\BizType;
use App\Models\ClmAsi;
use App\Models\DelCon;
use App\Models\Kd06 as ModelsKd06;
use App\Models\Kurs;
use App\Models\Negara;
use App\Models\PayTerm;
use App\Models\Satuan;
use App\Models\Sd;
use App\Models\Sg;
use App\Models\Tax;
use App\Models\User;
use App\Models\Vs04;
use Illuminate\Http\Request;
use Kd06;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class Kd6Split extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd6 = ModelsKd06::all();


        if (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd06Outs = $kd6;
        } else {
            $kd06Outs = $kd6->where('status', '=', '1');
        }


        // $kd6 = ModelsKd06::all();
        return view('dashboard.salesFolder.Kd6.index', [
            'kd06' => $kd06Outs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $agents = DB::table('agent_masters')
        //     ->leftJoin('vs04s', 'agent_masters.agent', '=', 'vs04s.agent')
        //     ->get();
        $kd6 = ModelsKd06::all();
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
        return view('dashboard.salesFolder.Kd6.create', [
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
            'kd06' => $kd6,
            'clms' => $clm
        ]);
    }

    public function createNewKd6($kd6no_cust)
    {

        $kd6 = ModelsKd06::find($kd6no_cust);
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
        return view('dashboard.salesFolder.Kd6.createNewKd6', [
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
            'kd06' => $kd6,
            'clms' => $clm,
            'kd6no_cust' => $kd6no_cust
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->kd6sg);
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
            'status_form' => 'nullable',
            'sdsg' => ['nullable', 'string', 'unique:kd06'],

        ]);
        ModelsKd06::create($validated);
        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd06 Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kd6 = ModelsKd06::findOrFail($id);
        $user = User::all()->where('division', '==',  'FABRIC SALES');
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
        return view('dashboard.salesFolder.Kd6.show', [
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
            'kd06' => $kd6,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kd6 = ModelsKd06::findOrFail($id);
        $user = User::all()->where('division', '==',  'FABRIC SALES')->where('jabatan', '==', 'Sub Division Manager');
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
        return view('dashboard.salesFolder.Kd6.edit', [
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
            'kd06' => $kd6,
            'clms' => $clm
        ]);
    }

    public function editReject($id)
    {
        $kd6 = ModelsKd06::findOrFail($id);
        $user = User::all()->where('division', '==',  'FABRIC SALES')->where('jabatan', '==', 'Sub Division Manager');
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
        return view('dashboard.salesFolder.Kd6.editReject', [
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
            'kd06' => $kd6,
            'clms' => $clm
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $kd06 = ModelsKd06::find('id', $id);
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
            'status_form' => 'nullable',
            'sdsg' => ['nullable', 'string'],
        ]);
        
        ModelsKd06::where('id', $id)->update($validated);
        
    
        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd06 Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsKd06::destroy($id);
        return redirect('/dashboard/salesFolder/kd6')->with('success', 'Kd06 Has Been Deleted!');
    }

    public function importKd06(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd06Data', $namafile);


        Excel::import(new Kd06Import, \public_path('/Kd06Data/' . $namafile));

        return redirect('/dashboard/salesFolder/kd2')->with('success', 'KD06 Telah Di Tambahkan!');
    }

    public function getAllow($agent)
    {
        $agentAlloq = Vs04::where('agent', '=', $agent);
        return response()->json($agentAlloq);
    }
}
