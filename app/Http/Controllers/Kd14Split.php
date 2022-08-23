<?php

namespace App\Http\Controllers;

use App\Imports\Kd14Import;
use App\Models\Kd05;
use App\Models\Kd06;
use App\Models\Kd14;
use App\Models\Sd;
use App\Models\Sg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class Kd14Split extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd14 = Kd14::all();


        if (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $Kd14Outs = $kd14;
        } else {
            $Kd14Outs = $kd14->where('status', '=', '1');
        }

        // $kd14 = Kd14::all();
        return view('dashboard.salesFolder.Kd14.index', [
            'kd14' => $Kd14Outs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kd14 = Kd14::all();
        $sd = Sd::all();
        $sg = Sg::all();
        $kd05 = DB::table('kd05')->distinct('addresscode1')->get('addresscode1');
        return view('dashboard.salesFolder.Kd14.create', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14,
            'kd05' => $kd05
        ]);
    }

    public function createNewKd14($kd14no_cust)
    {
        $kd14 = Kd14::all();
        $s = Kd05::where('no_cust1', $kd14no_cust);
        $kd6 = Kd06::where('kd6no_cust', $kd14no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $kd05 = $s->distinct('addresscode1')->get('addresscode1');
        return view('dashboard.salesFolder.Kd14.createNewKd14', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14,
            'kd05' => $kd05,
            'kd14no_cust' => $kd14no_cust
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
            'kd14no_cust' => 'nullable',
            'cp1' => 'nullable',
            'nama_cp1' => 'required',
            'mobile_cp1' => 'required',
            'phone_cp1' => 'required',
            'function_cp1' => 'required',
            'sinc_cp1' => 'required',
            'email_cp1' => 'nullable',
            'sd_cp1' => 'nullable',
            'sg_cp1' => 'nullable',
            'add_addr_cp1' => 'nullable',
            'status' => 'nullable',
            'status_form' => 'nullable',
            'contactperson' => ['nullable', 'string', 'unique:kd14'],
        ]);

        Kd14::create($validated);
        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd14 Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kd14 = Kd14::findOrFail($id);
        $sd = Sd::all();
        $sg = Sg::all();
        $kd05 = Kd05::all();
        return view('dashboard.salesFolder.Kd14.show', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14,
            'kd05' => $kd05
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kd14)
    {
        // dd($kd14->kd14no_cust);
        $kd14 = Kd14::findOrFail($kd14);
        $s = Kd05::where('no_cust1', $kd14->kd14no_cust);
        $kd6 = Kd06::where('kd6no_cust', $kd14->kd14no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $kd05 = $s->distinct('addresscode1')->get('addresscode1');
        return view('dashboard.salesFolder.Kd14.edit', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14,
            'kd05' => $kd05
        ]);
    }

    public function editReject($kd14)
    {
        // dd($kd14->kd14no_cust);
        $kd14 = Kd14::findOrFail($kd14);
        $s = Kd05::where('no_cust1', $kd14->kd14no_cust);
        $kd6 = Kd06::where('kd6no_cust', $kd14->kd14no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $kd05 = $s->distinct('addresscode1')->get('addresscode1');
        return view('dashboard.salesFolder.Kd14.editReject', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14,
            'kd05' => $kd05
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
            'kd14no_cust' => 'nullable',
            'cp1' => 'required',
            'nama_cp1' => 'required',
            'mobile_cp1' => 'required',
            'phone_cp1' => 'required',
            'function_cp1' => 'required',
            'sinc_cp1' => 'required',
            'email_cp1' => 'nullable',
            'sd_cp1' => 'nullable',
            'sg_cp1' => 'nullable',
            'add_addr_cp1' => 'nullable',
            'status' => 'nullable',
            'status_form' => 'nullable',
            'contactperson' => ['nullable', 'string'],
        ]);

        Kd14::where('id', $id)->update($validated);
        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd14 Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd14::destroy($id);
        return redirect('/dashboard/salesFolder/kd14')->with('success', 'Kd14 Has Been Deleted!');
    }

    public function importKd14(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd14Data', $namafile);


        Excel::import(new Kd14Import, \public_path('/Kd14Data/' . $namafile));

        return redirect('/dashboard/salesFolder/kd2')->with('success', 'KD14 Telah Di Tambahkan!');
    }
}
