<?php

namespace App\Http\Controllers;

use App\Imports\Kd04Import;
use App\Models\BlockReason;
use App\Models\CreditLimit;
use App\Models\Kd03;
use App\Models\Kd04;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class Kd4Split extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd04 = DB::table('kd04')
            ->leftJoin('kd03', 'kd04.kd4no_cust', '=', 'kd03.no_cust')
            ->get();
        $kd4 = Kd04::all();
        return view('dashboard.salesFolder.Kd4.index', [
            'kd04' => $kd04,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $kd04 = Kd04::all();
        $credit = CreditLimit::all();
        $block = BlockReason::all();
        return view('dashboard.salesFolder.Kd4.create', [
            'kd04' => $kd04,
            'credits' => $credit,
            'blocks' => $block,

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
            'status_form' => 'nullable',
        ]);

        Kd04::create($validated);
        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd04 Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kd04 = Kd04::findOrFail($id);
        $credit = CreditLimit::all();
        $block = BlockReason::all();
        return view('dashboard.salesFolder.Kd4.show', [
            'credits' => $credit,
            'kd04' => $kd04,
            'blocks' => $block
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
        $kd04 = Kd04::findOrFail($id);
        $credit = CreditLimit::all();
        $block = BlockReason::all();
        return view('dashboard.salesFolder.Kd4.edit', [
            'credits' => $credit,
            'kd04' => $kd04,
            'blocks' => $block
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
            'status_form' => 'nullable',
        ]);

        Kd04::where('id', $id)->update($validated);
        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd04 Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd04::destroy($id);
        return redirect('/dashboard/salesFolder/kd4')->with('success', 'Kd04 Has Been Deleted!');
    }
    public function importKd04(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd04Data', $namafile);


        Excel::import(new Kd04Import, \public_path('/Kd04Data/' . $namafile));

        return redirect('/dashboard/salesFolder/kd2')->with('success', 'KD04 Telah Di Tambahkan!');
    }
}
