<?php

namespace App\Http\Controllers;

use App\Imports\Kd11Import;
use App\Models\Kd06;
use App\Models\Kd11;
use App\Models\Sd;
use App\Models\Sg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class Kd11Split extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kd11 = Kd11::all();

        if (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd11Outs = $kd11;
        } else {
            $kd11Outs = $kd11->where('status1', '=', '1');
        }


        // $kd11 = Kd11::all();
        return view('dashboard.salesFolder.Kd11.index', [
            'kd11' => $kd11Outs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kd11 = Kd11::all();
        $sd = Sd::all();
        $sg = Sg::all();
        $kd06 = DB::table('kd06')->distinct('kd6sg')->get('kd6sg');
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');
        return view('dashboard.salesFolder.Kd11.create', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd11' => $kd11,
            'assocs' => $assoc,
            'kd06' => $kd06
        ]);
    }

    public function createNewKd11($kd11no_cust)
    {
        $kd11 = Kd11::all();
        $kd6 = Kd06::where('kd6no_cust', $kd11no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');
        return view('dashboard.salesFolder.Kd11.createNewKd11', [
            'sds' => $sd,
            'kd06' => $sg,
            'kd11' => $kd11,
            'assocs' => $assoc,
            'kd11no_cust' => $kd11no_cust,
            // 'kd06' => $kd06
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
            'kd11no_cust' => 'required',
            'sd1' => 'nullable',
            'sg1' => 'nullable',
            'association_no1' => 'nullable',
            'status1' => 'nullable',
            'central_regu1' => 'nullable',
            'conditions1' => 'nullable',
            'status_form' => 'nullable',

        ]);

        Kd11::create($validated);
        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd11 Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kd11)
    {
        $kd11 = Kd11::findOrFail($kd11);
        $kd6 = Kd06::where('kd6no_cust', $kd11->kd11no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');
        return view('dashboard.salesFolder.Kd11.show', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd11' => $kd11,
            'assocs' => $assoc
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kd11)
    {
        $kd11 = Kd11::findOrFail($kd11);
        $kd6 = Kd06::where('kd6no_cust', $kd11->kd11no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');
        return view('dashboard.salesFolder.Kd11.edit', [
            'sds' => $sd,
            'kd6sg' => $sg,
            'kd11' => $kd11,
            'assocs' => $assoc,
            // 'kd6sg' => $kd06
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
            'kd11no_cust' => 'required',
            'sd1' => 'nullable',
            'sg1' => 'nullable',
            'association_no1' => 'nullable',
            'status1' => 'nullable',
            'central_regu1' => 'nullable',
            'conditions1' => 'nullable',
            'status_form' => 'nullable',

        ]);

        Kd11::where('id', $id)->update($validated);
        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd11 Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd11::destroy($id);
        return redirect('/dashboard/salesFolder/kd11')->with('success', 'Kd11 Has Been Deleted!');
    }

    public function importKd11(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd11Data', $namafile);


        Excel::import(new Kd11Import, \public_path('/Kd11Data/' . $namafile));

        return redirect('/dashboard/salesFolder/kd2')->with('success', 'KD11 Telah Di Tambahkan!');
    }
}
