<?php

namespace App\Http\Controllers;

use App\Models\SuratPengantarPemeriksaanDokter;
use App\Http\Requests\StoreSuratPengantarPemeriksaanDokterRequest;
use App\Http\Requests\UpdateSuratPengantarPemeriksaanDokterRequest;
use App\Models\User;

class SuratPengantarPemeriksaanDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hr.pemeriksaanDokter.index', [
            'dokter' => SuratPengantarPemeriksaanDokter::all()
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
        $dokter = SuratPengantarPemeriksaanDokter::all();
        return view('dashboard.hr.pemeriksaanDokter.create', [
            'user' => $user,
            'dokter' => $dokter
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuratPengantarPemeriksaanDokterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratPengantarPemeriksaanDokterRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        SuratPengantarPemeriksaanDokter::create($validated);
        return redirect('/dashboard/hr/dokter')->with('success', 'Form Pemeriksaan Dokter Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratPengantarPemeriksaanDokter  $suratPengantarPemeriksaanDokter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokter = SuratPengantarPemeriksaanDokter::findOrFail($id);
        return view('dashboard.hr.pemeriksaanDokter.show', [
            'dokter' => $dokter
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratPengantarPemeriksaanDokter  $suratPengantarPemeriksaanDokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $dokter = SuratPengantarPemeriksaanDokter::findOrFail($id);
        return view('dashboard.hr.pemeriksaanDokter.edit', [
            'user' => $user,
            'dokter' => $dokter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratPengantarPemeriksaanDokterRequest  $request
     * @param  \App\Models\SuratPengantarPemeriksaanDokter  $suratPengantarPemeriksaanDokter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratPengantarPemeriksaanDokterRequest $request, SuratPengantarPemeriksaanDokter $dokter)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        SuratPengantarPemeriksaanDokter::where('id', $dokter->id)->update($validated);
        return redirect('/dashboard/hr/dokter')->with('success', 'Form Pemeriksaan Dokter Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratPengantarPemeriksaanDokter  $suratPengantarPemeriksaanDokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratPengantarPemeriksaanDokter::destroy($id);
        return redirect('/dashboard/hr/dokter')->with('success', 'Form Pemeriksaan Dokter Baru Telah Di Hapus!');
    }
}
