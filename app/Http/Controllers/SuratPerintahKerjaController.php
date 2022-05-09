<?php

namespace App\Http\Controllers;

use App\Models\SuratPerintahKerja;
use App\Http\Requests\StoreSuratPerintahKerjaRequest;
use App\Http\Requests\UpdateSuratPerintahKerjaRequest;
use App\Models\User;

class SuratPerintahKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ga.perintahKerja.index', [
            'perintah' => SuratPerintahKerja::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $perintah = SuratPerintahKerja::all();

        return view('dashboard.ga.perintahKerja.create', [
            'user' => $user,
            'perintah' => $perintah
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuratPerintahKerjaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratPerintahKerjaRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alamat'] = nl2br(e($request->alamat));
        $validated['alamat_karyawan'] = nl2br(e($request->alamat_karyawan));

        SuratPerintahKerja::create($validated);
        return redirect('/dashboard/ga/perintah')->with('success', 'Surat Perintah Kerja Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratPerintahKerja  $suratPerintahKerja
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all();
        $perintah = SuratPerintahKerja::findOrfail($id);
        return view('dashboard.ga.perintahKerja.show', [
            'user' => $user,
            'perintah' => $perintah
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratPerintahKerja  $suratPerintahKerja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $perintah = SuratPerintahKerja::findOrFail($id);
        return view('dashboard.ga.perintahKerja.edit', [
            'user' => $user,
            'perintah' => $perintah
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratPerintahKerjaRequest  $request
     * @param  \App\Models\SuratPerintahKerja  $suratPerintahKerja
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratPerintahKerjaRequest $request, SuratPerintahKerja $perintah)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alamat'] = nl2br(e($request->alamat));
        $validated['alamat_karyawan'] = nl2br(e($request->alamat_karyawan));

        SuratPerintahKerja::where('id', $perintah->id)->update($validated);
        return redirect('/dashboard/ga/perintah')->with('success', 'Surat Perintah Kerja Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratPerintahKerja  $suratPerintahKerja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratPerintahKerja::destroy($id);
        return redirect('/dashboard/ga/perintah')->with('success', 'Surat Perintah Kerja Berhasil Di Hapus!');
    }
}
