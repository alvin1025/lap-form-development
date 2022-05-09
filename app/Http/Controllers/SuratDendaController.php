<?php

namespace App\Http\Controllers;

use App\Models\SuratDenda;
use App\Http\Requests\StoreSuratDendaRequest;
use App\Http\Requests\UpdateSuratDendaRequest;
use App\Models\User;

class SuratDendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hr.suratDenda.index', [
            'denda' => SuratDenda::all()
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
        $denda = SuratDenda::all();
        return view('dashboard.hr.suratDenda.create', [
            'user' => $user,
            'denda' => $denda
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuratDendaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratDendaRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['denda'] = nl2br(e($request->denda));

        SuratDenda::create($validated);
        return redirect('/dashboard/hr/denda')->with('success', 'Form Persetujuan Denda Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratDenda  $suratDenda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $denda = SuratDenda::findOrFail($id);
        return view('dashboard.hr.suratDenda.show', [
            'denda' => $denda
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratDenda  $suratDenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $denda = SuratDenda::findOrFail($id);
        $user = User::all();

        return view('dashboard.hr.suratDenda.edit', [
            'denda' => $denda,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratDendaRequest  $request
     * @param  \App\Models\SuratDenda  $suratDenda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratDendaRequest $request, SuratDenda $denda)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['denda'] = nl2br(e($request->denda));

        SuratDenda::where('id', $denda->id)->update($validated);
        return redirect('/dashboard/hr/denda')->with('success', 'Form Persetujuan Denda Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratDenda  $suratDenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratDenda::destroy($id);
        return redirect('/dashboard/hr/denda')->with('success', 'Form Persetujuan Denda Baru Telah Di Hapus!');
    }
}
