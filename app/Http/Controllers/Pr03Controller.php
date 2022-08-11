<?php

namespace App\Http\Controllers;

use App\Models\Pr03;
use App\Http\Requests\StorePr03Request;
use App\Http\Requests\UpdatePr03Request;
use App\Imports\Pr03Import;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class Pr03Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pr03 = Pr03::all();
        return view('dashboard.mis.settings.pr03.index', [
            'pr03' => $pr03
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pr03 = Pr03::all();
        return view('dashboard.mis.settings.pr03.create', [
            'pr03' => $pr03
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePr03Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePr03Request $request)
    {
        $validated = $request->validated();
        Pr03::create($validated);
        return redirect('/dashboard/mis/settings/pr03')->with('success', 'PR03 Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pr03  $pr03
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pr03 = Pr03::findOrFail($id);
        return view('dashboard.mis.settings.pr03.show', [
            'pr03' => $pr03
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pr03  $pr03
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pr03 = Pr03::findOrFail($id);
        return view('dashboard.mis.settings.pr03.edit', [
            'pr03' => $pr03
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePr03Request  $request
     * @param  \App\Models\Pr03  $pr03
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePr03Request $request, Pr03 $pr03)
    {
        $validated = $request->validated();
        Pr03::where('id', $pr03->id)->update($validated);
        return redirect('/dashboard/mis/settings/pr03')->with('success', 'PR03 Telah Di Update!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pr03  $pr03
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pr03::destroy($id);
        return redirect('/dashboard/mis/settings/pr03')->with('success', 'PR03 Telah Di Hapus!');
    }

    public function importPr03(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Pr03Data', $namafile);


        Excel::import(new Pr03Import, \public_path('/Pr03Data/' . $namafile));

        return redirect('/dashboard/mis/settings/pr03')->with('success', 'PR03 Telah Di Tambah!');
    }
}
