<?php

namespace App\Http\Controllers;

use App\Models\PengantarKaryawanBaru;
use App\Http\Requests\StorePengantarKaryawanBaruRequest;
use App\Http\Requests\UpdatePengantarKaryawanBaruRequest;

class PengantarKaryawanBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hr.karyawanBaru.index', [
            'karyawanBaru' => PengantarKaryawanBaru::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawanBaru = PengantarKaryawanBaru::all();
        return view('dashboard.hr.karyawanBaru.create', [
            'karyawanBaru' => $karyawanBaru
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengantarKaryawanBaruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengantarKaryawanBaruRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        PengantarKaryawanBaru::create($validated);
        return redirect('/dashboard/hr/karyawanBaru')->with('success', 'Form Permohonan Promosi Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengantarKaryawanBaru  $pengantarKaryawanBaru
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawanBaru = PengantarKaryawanBaru::findOrFail($id);
        return view('dashboard.hr.karyawanBaru.show', [
            'karyawanBaru' => $karyawanBaru
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengantarKaryawanBaru  $pengantarKaryawanBaru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawanBaru = PengantarKaryawanBaru::findOrFail($id);
        return view('dashboard.hr.karyawanBaru.edit', [
            'karyawanBaru' => $karyawanBaru
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengantarKaryawanBaruRequest  $request
     * @param  \App\Models\PengantarKaryawanBaru  $pengantarKaryawanBaru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengantarKaryawanBaruRequest $request, PengantarKaryawanBaru $karyawanBaru)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        PengantarKaryawanBaru::where('id', $karyawanBaru->id)->update($validated);
        return redirect('/dashboard/hr/karyawanBaru')->with('success', 'Form Permohonan Promosi Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengantarKaryawanBaru  $pengantarKaryawanBaru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PengantarKaryawanBaru::destroy($id);
        return redirect('/dashboard/hr/karyawanBaru')->with('success', 'Form Permohonan Promosi Baru Telah Di Hapus!');
    }
}
