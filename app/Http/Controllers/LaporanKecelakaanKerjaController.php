<?php

namespace App\Http\Controllers;

use App\Models\LaporanKecelakaanKerja;
use App\Http\Requests\StoreLaporanKecelakaanKerjaRequest;
use App\Http\Requests\UpdateLaporanKecelakaanKerjaRequest;
use App\Models\User;

class LaporanKecelakaanKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hr.laporanKecelakaan.index', [
            'kecelakaan' => LaporanKecelakaanKerja::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hr.laporanKecelakaan.create', [
            'user' => User::all(),
            'kecelakaan' => LaporanKecelakaanKerja::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLaporanKecelakaanKerjaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporanKecelakaanKerjaRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['tempat_tinggal'] = nl2br(e($request->tempat_tinggal));
        $validated['sebab_kecelakaan'] = nl2br(e($request->sebab_kecelakaan));
        $validated['keterangan'] = nl2br(e($request->keterangan));

        LaporanKecelakaanKerja::create($validated);
        return redirect('/dashboard/hr/kecelakaan')->with('success', 'Form Laporan Kecelakaan Kerja Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanKecelakaanKerja  $laporanKecelakaanKerja
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kecelakaan = LaporanKecelakaanKerja::findOrFail($id);
        return view('dashboard.hr.laporanKecelakaan.show', [
            'kecelakaan' => $kecelakaan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanKecelakaanKerja  $laporanKecelakaanKerja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecelakaan = LaporanKecelakaanKerja::findOrFail($id);
        return view('dashboard.hr.laporanKecelakaan.edit', [
            'kecelakaan' => $kecelakaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanKecelakaanKerjaRequest  $request
     * @param  \App\Models\LaporanKecelakaanKerja  $laporanKecelakaanKerja
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanKecelakaanKerjaRequest $request, LaporanKecelakaanKerja $kecelakaan)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['tempat_tinggal'] = nl2br(e($request->tempat_tinggal));
        $validated['sebab_kecelakaan'] = nl2br(e($request->sebab_kecelakaan));
        $validated['keterangan'] = nl2br(e($request->keterangan));

        LaporanKecelakaanKerja::where('id', $kecelakaan->id)->update($validated);
        return redirect('/dashboard/hr/kecelakaan')->with('success', 'Form Laporan Kecelakaan Kerja Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanKecelakaanKerja  $laporanKecelakaanKerja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LaporanKecelakaanKerja::destroy($id);
        return redirect('/dashboard/hr/kecelakaan')->with('success', 'Form Laporan Kecelakaan Kerja Baru Telah Di Hapus!');
    }
}
