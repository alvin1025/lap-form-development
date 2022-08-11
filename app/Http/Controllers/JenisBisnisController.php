<?php

namespace App\Http\Controllers;

use App\Models\JenisBisnis;
use App\Http\Requests\StoreJenisBisnisRequest;
use App\Http\Requests\UpdateJenisBisnisRequest;
use App\Imports\JenisBisnisImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class JenisBisnisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisBisnis = JenisBisnis::all();
        return view('dashboard.mis.settings.jenisBisnis.index', [
            'jenisBisnis' => $jenisBisnis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisBisnis = JenisBisnis::all();
        return view('dashboard.mis.settings.jenisBisnis.create', [
            'jenisBisnis' => $jenisBisnis
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJenisBisnisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJenisBisnisRequest $request)
    {
        $validated = $request->validated();

        JenisBisnis::create($validated);
        return redirect('/dashboard/mis/settings/jenisBisnis')->with('success', 'Form Jenis Bisnis Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisBisnis  $jenisBisnis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisBisnis = JenisBisnis::findOrFail($id);
        return view('dashboard.mis.settings.jenisBisnis.show', [
            'jenisBisnis' => $jenisBisnis
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisBisnis  $jenisBisnis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisBisnis = JenisBisnis::findOrFail($id);
        return view('dashboard.mis.settings.jenisBisnis.edit', [
            'jenisBisnis' => $jenisBisnis
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJenisBisnisRequest  $request
     * @param  \App\Models\JenisBisnis  $jenisBisnis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJenisBisnisRequest $request, JenisBisnis $jenisBisni)
    {
        $validated = $request->validated();

        JenisBisnis::where('id', $jenisBisni->id)->update($validated);
        return redirect('/dashboard/mis/settings/jenisBisnis')->with('success', 'Form Jenis Bisnis Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisBisnis  $jenisBisnis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisBisnis::destroy($id);
        return redirect('/dashboard/mis/settings/jenisBisnis')->with('success', 'Form Jenis Bisnis Baru Telah Di Hapus!');
    }

    public function importexcelJenisBisnis(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('JenisBisnis', $namafile);


        Excel::import(new JenisBisnisImport, \public_path('/JenisBisnis/' . $namafile));

        return redirect('/dashboard/mis/settings/jenisBisnis')->with('success', 'Form Jenis Bisnis Baru Telah Di Tambahkan!');
    }
}
