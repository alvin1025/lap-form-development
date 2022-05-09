<?php

namespace App\Http\Controllers;

use App\Models\PembuatanKartuPengenal;
use App\Http\Requests\StorePembuatanKartuPengenalRequest;
use App\Http\Requests\UpdatePembuatanKartuPengenalRequest;
use App\Models\User;

class PembuatanKartuPengenalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hr.pembuatanKartu.index', [
            'kartu' => PembuatanKartuPengenal::all()
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
        $kartu = PembuatanKartuPengenal::all();
        return view('dashboard.hr.pembuatanKartu.create', [
            'user' => $user,
            'kartu' => $kartu
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePembuatanKartuPengenalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePembuatanKartuPengenalRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        PembuatanKartuPengenal::create($validated);
        return redirect('/dashboard/hr/kartu')->with('success', 'Form Permohonan Promosi Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PembuatanKartuPengenal  $pembuatanKartuPengenal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kartu = PembuatanKartuPengenal::findOrFail($id);
        return view('dashboard.hr.pembuatanKartu.show', [
            'kartu' => $kartu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PembuatanKartuPengenal  $pembuatanKartuPengenal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $kartu = PembuatanKartuPengenal::findOrFail($id);

        return view('dashboard.hr.pembuatanKartu.edit', [
            'user' => $user,
            'kartu' => $kartu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePembuatanKartuPengenalRequest  $request
     * @param  \App\Models\PembuatanKartuPengenal  $pembuatanKartuPengenal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePembuatanKartuPengenalRequest $request, PembuatanKartuPengenal $kartu)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        PembuatanKartuPengenal::where('id', $kartu->id)->update($validated);
        return redirect('/dashboard/hr/kartu')->with('success', 'Form Permohonan Promosi Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PembuatanKartuPengenal  $pembuatanKartuPengenal
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembuatanKartuPengenal $pembuatanKartuPengenal)
    {
        //
    }
}
