<?php

namespace App\Http\Controllers;

use App\Models\SuratPemanggilanKaryawan;
use App\Http\Requests\StoreSuratPemanggilanKaryawanRequest;
use App\Http\Requests\UpdateSuratPemanggilanKaryawanRequest;
use App\Models\User;

class SuratPemanggilanKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hr.pemanggilanKaryawan.index', [
            'pemanggilan' => SuratPemanggilanKaryawan::all()
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
        $pemanggilan = SuratPemanggilanKaryawan::all();
        return view('dashboard.hr.pemanggilanKaryawan.create', [
            'user' => $user,
            'pemanggilan' => $pemanggilan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuratPemanggilanKaryawanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratPemanggilanKaryawanRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        SuratPemanggilanKaryawan::create($validated);
        return redirect('/dashboard/hr/pemanggilan
        ')->with('success', 'Form Hubungan Kerja Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratPemanggilanKaryawan  $suratPemanggilanKaryawan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemanggilan = SuratPemanggilanKaryawan::findOrFail($id);
        return view('dashboard.hr.pemanggilanKaryawan.show', [
            'pemanggilan' => $pemanggilan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratPemanggilanKaryawan  $suratPemanggilanKaryawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemanggilan = SuratPemanggilanKaryawan::findOrFail($id);
        $user = User::all();

        return view('dashboard.hr.pemanggilanKaryawan.edit', [
            'pemanggilan' => $pemanggilan,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratPemanggilanKaryawanRequest  $request
     * @param  \App\Models\SuratPemanggilanKaryawan  $suratPemanggilanKaryawan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratPemanggilanKaryawanRequest $request, SuratPemanggilanKaryawan $pemanggilan)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        SuratPemanggilanKaryawan::where('id', $pemanggilan->id)->update($validated);
        return redirect('/dashboard/hr/pemanggilan
        ')->with('success', 'Form Hubungan Kerja Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratPemanggilanKaryawan  $suratPemanggilanKaryawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratPemanggilanKaryawan::destroy($id);
        return redirect('/dashboard/hr/pemanggilan
        ')->with('success', 'Form Hubungan Kerja Baru Telah Di Hapus!');
    }
}
