<?php

namespace App\Http\Controllers;

use App\Models\UndanganInstrukturTraining;
use App\Http\Requests\StoreUndanganInstrukturTrainingRequest;
use App\Http\Requests\UpdateUndanganInstrukturTrainingRequest;

class UndanganInstrukturTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hr.instrukturTraining.index', [
            'training' => UndanganInstrukturTraining::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hr.instrukturTraining.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUndanganInstrukturTrainingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUndanganInstrukturTrainingRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        UndanganInstrukturTraining::create($validated);
        return redirect('/dashboard/hr/instruktur
        ')->with('success', 'Form Hubungan Kerja Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UndanganInstrukturTraining  $undanganInstrukturTraining
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = UndanganInstrukturTraining::findOrFail($id);
        return view('dashboard.hr.instrukturTraining.show', [
            'training' => $training
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UndanganInstrukturTraining  $undanganInstrukturTraining
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = UndanganInstrukturTraining::findOrFail($id);
        return view('dashboard.hr.instrukturTraining.edit', [
            'training' => $training
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUndanganInstrukturTrainingRequest  $request
     * @param  \App\Models\UndanganInstrukturTraining  $undanganInstrukturTraining
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUndanganInstrukturTrainingRequest $request, UndanganInstrukturTraining $training)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        UndanganInstrukturTraining::where('id', $training->id)->update($validated);
        return redirect('/dashboard/hr/instruktur
        ')->with('success', 'Form Hubungan Kerja Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UndanganInstrukturTraining  $undanganInstrukturTraining
     * @return \Illuminate\Http\Response
     */
    public function destroy(UndanganInstrukturTraining $undanganInstrukturTraining)
    {
        //
    }
}
