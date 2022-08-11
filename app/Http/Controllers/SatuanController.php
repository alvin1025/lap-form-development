<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use App\Http\Requests\StoreSatuanRequest;
use App\Http\Requests\UpdateSatuanRequest;
use App\Imports\SatuanImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satuan = Satuan::all();
        return view('dashboard.mis.settings.satuan.index', [
            'satuan' => $satuan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $satuan = Satuan::all();
        return view('dashboard.mis.settings.satuan.create', [
            'satuan' => $satuan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSatuanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSatuanRequest $request)
    {
        $validated = $request->validated();

        Satuan::create($validated);
        return redirect('/dashboard/mis/settings/satuan')->with('success', 'Form Satuan Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $satuan = Satuan::findOrFail($id);
        return view('dashboard.mis.settings.satuan.show', [
            'satuan' => $satuan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $satuan = Satuan::findOrFail($id);
        return view('dashboard.mis.settings.satuan.edit', [
            'satuan' => $satuan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSatuanRequest  $request
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSatuanRequest $request, Satuan $satuan)
    {
        $validated = $request->validated();

        Satuan::where('id', $satuan->id)->update($validated);
        return redirect('/dashboard/mis/settings/satuan')->with('success', 'Form Satuan Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Satuan::destroy($id);
        return redirect('/dashboard/mis/settings/satuan')->with('success', 'Form Satuan Baru Telah Di Hapus!');
    }

    public function importexcelSatuan(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('SatuanData', $namafile);


        Excel::import(new SatuanImport, \public_path('/SatuanData/' . $namafile));

        return redirect('/dashboard/mis/settings/satuan')->with('success', 'Satuan Baru Telah Di Tambahkan!');
    }
}
