<?php

namespace App\Http\Controllers;

use App\Models\ClmAsi;
use App\Http\Requests\StoreClmAsiRequest;
use App\Http\Requests\UpdateClmAsiRequest;
use App\Imports\ClmImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ClmAsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clm = ClmAsi::all();
        return view('dashboard.mis.settings.clm.index', [
            'clm' => $clm
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clm = ClmAsi::all();
        return view('dashboard.mis.settings.clm.create', [
            'clm' => $clm
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClmAsiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClmAsiRequest $request)
    {
        $validated = $request->validated();
        ClmAsi::create($validated);

        return redirect('/dashboard/mis/settings/clm')->with('success', 'Clmasi Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClmAsi  $clmAsi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clm = ClmAsi::findOrFail($id);
        return view('dashboard.mis.settings.clm.show', [
            'clm' => $clm
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClmAsi  $clmAsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clm = ClmAsi::findOrFail($id);
        return view('dashboard.mis.settings.clm.edit', [
            'clm' => $clm
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClmAsiRequest  $request
     * @param  \App\Models\ClmAsi  $clmAsi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClmAsiRequest $request, ClmAsi $clm)
    {
        $validated = $request->validated();
        ClmAsi::where('id', $clm->id)->update($validated);
        return redirect('/dashboard/mis/settings/clm')->with('success', 'Clmasi Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClmAsi  $clmAsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClmAsi::destroy($id);
        return redirect('/dashboard/mis/settings/clm')->with('success', 'Clmasi Baru Telah Di Hapus!');
    }

    public function importClm(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('ClmasiData', $namafile);


        Excel::import(new ClmImport, \public_path('/ClmasiData/' . $namafile));

        return redirect('/dashboard/mis/settings/clm')->with('success', 'Clmasi Baru Telah Di Tambahkan!');
    }
}
