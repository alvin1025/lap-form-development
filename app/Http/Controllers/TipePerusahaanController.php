<?php

namespace App\Http\Controllers;

use App\Models\TipePerusahaan;
use App\Http\Requests\StoreTipePerusahaanRequest;
use App\Http\Requests\UpdateTipePerusahaanRequest;
use App\Imports\TipePerusahaanImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TipePerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipePerusahaan = TipePerusahaan::all();
        return view('dashboard.mis.settings.tipePerusahaan.index', [
            'tipePerusahaan' => $tipePerusahaan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipePerusahaan = TipePerusahaan::all();
        return view('dashboard.mis.settings.tipePerusahaan.create', [
            'tipePerusahaan' => $tipePerusahaan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipePerusahaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipePerusahaanRequest $request)
    {
        $validated = $request->validated();

        TipePerusahaan::create($validated);
        return redirect('/dashboard/mis/settings/tipePerusahaan')->with('success', 'Form Tipe Perusahaan Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipePerusahaan  $tipePerusahaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipePerusahaan = TipePerusahaan::findOrFail($id);
        return view('dashboard.mis.settings.tipePerusahaan.show', [
            'tipePerusahaan' => $tipePerusahaan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipePerusahaan  $tipePerusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipePerusahaan = TipePerusahaan::findOrFail($id);
        return view('dashboard.mis.settings.tipePerusahaan.edit', [
            'tipePerusahaan' => $tipePerusahaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipePerusahaanRequest  $request
     * @param  \App\Models\TipePerusahaan  $tipePerusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipePerusahaanRequest $request, TipePerusahaan $tipePerusahaan)
    {
        $validated = $request->validated();

        TipePerusahaan::where('id', $tipePerusahaan->id)->update($validated);
        return redirect('/dashboard/mis/settings/tipePerusahaan')->with('success', 'Form Tipe Perusahaan Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipePerusahaan  $tipePerusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipePerusahaan::destroy($id);
        return redirect('/dashboard/mis/settings/tipePerusahaan')->with('success', 'Form Tipe Perusahaan Telah Di Hapus!');
    }

    public function importTipePerusahaan(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('TipePerusahaanData', $namafile);


        Excel::import(new TipePerusahaanImport, \public_path('/TipePerusahaanData/' . $namafile));

        return redirect('/dashboard/mis/settings/tipePerusahaan')->with('success', 'Form Tipe Perusahaan Telah Di Tambahkan!');
    }
}
