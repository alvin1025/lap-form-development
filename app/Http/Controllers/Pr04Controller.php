<?php

namespace App\Http\Controllers;

use App\Models\Pr04;
use App\Http\Requests\StorePr04Request;
use App\Http\Requests\UpdatePr04Request;
use App\Imports\Pr04Import;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class Pr04Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pr04 = Pr04::all();
        return view('dashboard.mis.settings.pr04.index', [
            'pr04' => $pr04
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pr04 = Pr04::all();
        return view('dashboard.mis.settings.pr04.create', [
            'pr04' => $pr04
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePr04Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePr04Request $request)
    {
        $validated = $request->validated();
        Pr04::create($validated);
        return redirect('/dashboard/mis/settings/pr04')->with('success', 'PR04 Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pr04  $pr04
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pr04 = Pr04::findOrFail($id);
        return view('dashboard.mis.settings.pr04.show', [
            'pr04' => $pr04
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pr04  $pr04
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pr04 = Pr04::findOrFail($id);
        return view('dashboard.mis.settings.pr04.edit', [
            'pr04' => $pr04
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePr04Request  $request
     * @param  \App\Models\Pr04  $pr04
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePr04Request $request, Pr04 $pr04)
    {
        $validated = $request->validated();
        Pr04::where('id', $pr04->id)->update($validated);
        return redirect('/dashboard/mis/settings/pr04')->with('success', 'PR04 Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pr04  $pr04
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pr04::destroy($id);
        return redirect('/dashboard/mis/settings/pr04')->with('success', 'PR04 Telah Di Hapus!');
    }

    public function importPr04(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Pr04Data', $namafile);


        Excel::import(new Pr04Import, \public_path('/Pr04Data/' . $namafile));

        return redirect('/dashboard/mis/settings/pr04')->with('success', 'PR04 Telah Di Tambah!');
    }
}
