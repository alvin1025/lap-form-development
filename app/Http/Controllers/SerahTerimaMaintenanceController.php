<?php

namespace App\Http\Controllers;

use App\Models\SerahTerimaMaintenance;
use App\Http\Requests\StoreSerahTerimaMaintenanceRequest;
use App\Http\Requests\UpdateSerahTerimaMaintenanceRequest;

class SerahTerimaMaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.maintenance.serahTerima.index', [
            'terima' => SerahTerimaMaintenance::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.maintenance.serahTerima.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSerahTerimaMaintenanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSerahTerimaMaintenanceRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        SerahTerimaMaintenance::create($validated);
        return redirect('/dashboard/maintenance/serah-terima')->with('success', 'Form Serah Terima Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SerahTerimaMaintenance  $serahTerimaMaintenance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $terima = SerahTerimaMaintenance::findOrFail($id);
        return view('dashboard.maintenance.serahTerima.show', [
            'terima' => $terima
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SerahTerimaMaintenance  $serahTerimaMaintenance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $terima = SerahTerimaMaintenance::findOrFail($id);
        return view('dashboard.maintenance.serahTerima.edit', [
            'terima' => $terima
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSerahTerimaMaintenanceRequest  $request
     * @param  \App\Models\SerahTerimaMaintenance  $serahTerimaMaintenance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSerahTerimaMaintenanceRequest $request, SerahTerimaMaintenance $terima)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        SerahTerimaMaintenance::where('id', $terima->id)->update($validated);
        return redirect('/dashboard/maintenance/serah-terima')->with('success', 'Form Serah Terima Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SerahTerimaMaintenance  $serahTerimaMaintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(SerahTerimaMaintenance $serahTerimaMaintenance)
    {
        //
    }
}
