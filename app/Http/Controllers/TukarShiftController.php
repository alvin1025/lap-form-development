<?php

namespace App\Http\Controllers;

use App\Models\TukarShift;
use App\Http\Requests\StoreTukarShiftRequest;
use App\Http\Requests\UpdateTukarShiftRequest;
use App\Models\User;

class TukarShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hr.tukarShift.index', [
            'shift' => TukarShift::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hr.tukarShift.create', [
            'user' => User::all(),
            'shift' => TukarShift::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTukarShiftRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTukarShiftRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        TukarShift::create($validated);
        return redirect('/dashboard/hr/shift')->with('success', 'Form Permohonan Promosi Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TukarShift  $tukarShift
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shift = TukarShift::findOrFail($id);
        return view('dashboard.hr.tukarShift.show', [
            'shift' => $shift
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TukarShift  $tukarShift
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shift = TukarShift::findOrFail($id);
        $user = User::all();
        return view('dashboard.hr.tukarShift.edit', [
            'shift' => $shift,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTukarShiftRequest  $request
     * @param  \App\Models\TukarShift  $tukarShift
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTukarShiftRequest $request, TukarShift $shift)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        TukarShift::where('id', $shift->id)->update($validated);
        return redirect('/dashboard/hr/shift')->with('success', 'Form Permohonan Promosi Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TukarShift  $tukarShift
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TukarShift::destroy($id);
        return redirect('/dashboard/hr/shift
        ')->with('success', 'Form Hubungan Kerja Baru Telah Di Hapus!');
    }
}
