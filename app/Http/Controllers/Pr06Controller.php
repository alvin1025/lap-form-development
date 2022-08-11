<?php

namespace App\Http\Controllers;

use App\Models\Pr06;
use App\Http\Requests\StorePr06Request;
use App\Http\Requests\UpdatePr06Request;
use App\Imports\Pr06Import;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class Pr06Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pr06 = Pr06::all();
        return view('dashboard.mis.settings.pr06.index', [
            'pr06' => $pr06
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pr06 = Pr06::all();
        return view('dashboard.mis.settings.pr06.create', [
            'pr06' => $pr06
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePr06Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePr06Request $request)
    {
        $validated = $request->validated();
        Pr06::create($validated);
        return redirect('/dashboard/mis/settings/pr06')->with('success', 'PR06 Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pr06  $pr06
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pr06 = Pr06::findOrFail($id);
        return view('dashboard.mis.settings.pr06.show', [
            'pr06' => $pr06
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pr06  $pr06
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pr06 = Pr06::findOrFail($id);
        return view('dashboard.mis.settings.pr06.edit', [
            'pr06' => $pr06
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePr06Request  $request
     * @param  \App\Models\Pr06  $pr06
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePr06Request $request, Pr06 $pr06)
    {
        $validated = $request->validated();
        Pr06::where('id', $pr06->id)->update($validated);
        return redirect('/dashboard/mis/settings/pr06')->with('success', 'PR06 Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pr06  $pr06
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pr06::destroy($id);
        return redirect('/dashboard/mis/settings/pr06')->with('success', 'PR06 Baru Telah Di Hapus!');
    }

    public function importPr06(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Pr06Data', $namafile);


        Excel::import(new Pr06Import, \public_path('/Pr06Data/' . $namafile));

        return redirect('/dashboard/mis/settings/pr06')->with('success', 'PR06 Telah Di Tambah!');
    }
}
