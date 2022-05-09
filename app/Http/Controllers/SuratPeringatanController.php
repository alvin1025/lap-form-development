<?php

namespace App\Http\Controllers;

use App\Models\SuratPeringatan;
use App\Http\Requests\StoreSuratPeringatanRequest;
use App\Http\Requests\UpdateSuratPeringatanRequest;
use App\Models\User;

class SuratPeringatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hr.suratPeringatan.index', [
            'peringatan' => SuratPeringatan::all()
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
        $peringatan = SuratPeringatan::all();

        return view('dashboard.hr.suratPeringatan.create', [
            'user' => $user,
            'peringatan' => $peringatan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuratPeringatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratPeringatanRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alasan'] = nl2br(e($request->alasan));

        SuratPeringatan::create($validated);
        return redirect('/dashboard/hr/peringatan')->with('success', 'Form Permohonan Promosi Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratPeringatan  $suratPeringatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peringatan = SuratPeringatan::findOrFail($id);
        return view('dashboard.hr.suratPeringatan.show', [
            'peringatan' => $peringatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratPeringatan  $suratPeringatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $peringatan = SuratPeringatan::findOrFail($id);
        return view('dashboard.hr.suratPeringatan.edit', [
            'user' => $user,
            'peringatan' => $peringatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratPeringatanRequest  $request
     * @param  \App\Models\SuratPeringatan  $suratPeringatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratPeringatanRequest $request, SuratPeringatan $peringatan)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alasan'] = nl2br(e($request->alasan));

        SuratPeringatan::where('id', $peringatan->id)->update($validated);
        return redirect('/dashboard/hr/peringatan')->with('success', 'Form Permohonan Promosi Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratPeringatan  $suratPeringatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratPeringatan::destroy($id);
        return redirect('/dashboard/hr/peringatan')->with('success', 'Form Permohonan Promosi Baru Telah Di Hapus!');
    }
}
