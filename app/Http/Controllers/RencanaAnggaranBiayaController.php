<?php

namespace App\Http\Controllers;

use App\Models\RencanaAnggaranBiaya;
use App\Http\Requests\StoreRencanaAnggaranBiayaRequest;
use App\Http\Requests\UpdateRencanaAnggaranBiayaRequest;
use App\Models\User;

class RencanaAnggaranBiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $anggaran = RencanaAnggaranBiaya::all();
        return view('dashboard.ga.rencanaAnggaran.index', [
            'user' => $user,
            'anggaran' => $anggaran
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
        $anggaran = RencanaAnggaranBiaya::all();
        return view('dashboard.ga.rencanaAnggaran.create', [
            'user' => $user,
            'anggaran' => $anggaran
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRencanaAnggaranBiayaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRencanaAnggaranBiayaRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        //uraian
        $validated['uraian1'] = nl2br(e($request->uraian1));
        $validated['uraian2'] = nl2br(e($request->uraian2));
        $validated['uraian3'] = nl2br(e($request->uraian3));
        $validated['uraian4'] = nl2br(e($request->uraian4));
        $validated['uraian5'] = nl2br(e($request->uraian5));
        $validated['uraian6'] = nl2br(e($request->uraian6));
        $validated['uraian7'] = nl2br(e($request->uraian7));
        $validated['uraian8'] = nl2br(e($request->uraian8));
        $validated['uraian9'] = nl2br(e($request->uraian9));
        $validated['uraian10'] = nl2br(e($request->uraian10));
        //keterangan
        $validated['keterangan1'] = nl2br(e($request->keterangan1));
        $validated['keterangan2'] = nl2br(e($request->keterangan2));
        $validated['keterangan3'] = nl2br(e($request->keterangan3));
        $validated['keterangan4'] = nl2br(e($request->keterangan4));
        $validated['keterangan5'] = nl2br(e($request->keterangan5));
        $validated['keterangan6'] = nl2br(e($request->keterangan6));
        $validated['keterangan7'] = nl2br(e($request->keterangan7));
        $validated['keterangan8'] = nl2br(e($request->keterangan8));
        $validated['keterangan9'] = nl2br(e($request->keterangan9));
        $validated['keterangan10'] = nl2br(e($request->keterangan10));

        RencanaAnggaranBiaya::create($validated);
        return redirect('/dashboard/ga/anggaran')->with('success', 'Rencana Anggaran Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RencanaAnggaranBiaya  $rencanaAnggaranBiaya
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggaran = RencanaAnggaranBiaya::findOrFail($id);
        return view('dashboard.ga.rencanaAnggaran.show', [
            'anggaran' => $anggaran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RencanaAnggaranBiaya  $rencanaAnggaranBiaya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $anggaran = RencanaAnggaranBiaya::findOrFail($id);
        return view('dashboard.ga.rencanaAnggaran.edit', [
            'user' => $user,
            'anggaran' => $anggaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRencanaAnggaranBiayaRequest  $request
     * @param  \App\Models\RencanaAnggaranBiaya  $rencanaAnggaranBiaya
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRencanaAnggaranBiayaRequest $request, RencanaAnggaranBiaya $anggaran)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        //uraian
        $validated['uraian1'] = nl2br(e($request->uraian1));
        $validated['uraian2'] = nl2br(e($request->uraian2));
        $validated['uraian3'] = nl2br(e($request->uraian3));
        $validated['uraian4'] = nl2br(e($request->uraian4));
        $validated['uraian5'] = nl2br(e($request->uraian5));
        $validated['uraian6'] = nl2br(e($request->uraian6));
        $validated['uraian7'] = nl2br(e($request->uraian7));
        $validated['uraian8'] = nl2br(e($request->uraian8));
        $validated['uraian9'] = nl2br(e($request->uraian9));
        $validated['uraian10'] = nl2br(e($request->uraian10));
        //keterangan
        $validated['keterangan1'] = nl2br(e($request->keterangan1));
        $validated['keterangan2'] = nl2br(e($request->keterangan2));
        $validated['keterangan3'] = nl2br(e($request->keterangan3));
        $validated['keterangan4'] = nl2br(e($request->keterangan4));
        $validated['keterangan5'] = nl2br(e($request->keterangan5));
        $validated['keterangan6'] = nl2br(e($request->keterangan6));
        $validated['keterangan7'] = nl2br(e($request->keterangan7));
        $validated['keterangan8'] = nl2br(e($request->keterangan8));
        $validated['keterangan9'] = nl2br(e($request->keterangan9));
        $validated['keterangan10'] = nl2br(e($request->keterangan10));

        RencanaAnggaranBiaya::where('id', $anggaran->id)->update($validated);
        return redirect('/dashboard/ga/anggaran')->with('success', 'Rencana Anggaran Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RencanaAnggaranBiaya  $rencanaAnggaranBiaya
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RencanaAnggaranBiaya::destroy($id);
        return redirect('/dashboard/ga/anggaran')->with('success', 'Rencana Anggaran Baru Telah Di Hapus!');
    }
}
