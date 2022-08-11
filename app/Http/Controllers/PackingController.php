<?php

namespace App\Http\Controllers;

use App\Models\Packing;
use App\Http\Requests\StorePackingRequest;
use App\Http\Requests\UpdatePackingRequest;

class PackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packing = Packing::all();
        return view('dashboard.mis.settings.packing.index', [
            'packing' => $packing
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packing = Packing::all();
        return view('dashboard.mis.settings.packing.create', [
            'packing' => $packing
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePackingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackingRequest $request)
    {
        $validated = $request->validated();

        Packing::create($validated);
        return redirect('/dashboard/mis/settings/packing')->with('success', 'Form Packing Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Packing  $packing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $packing = Packing::findOrFail($id);
        return view('dashboard.mis.settings.packing.show', [
            'packing' => $packing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Packing  $packing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packing = Packing::findOrFail($id);
        return view('dashboard.mis.settings.packing.edit', [
            'packing' => $packing
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackingRequest  $request
     * @param  \App\Models\Packing  $packing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackingRequest $request, Packing $packing)
    {
        $validated = $request->validated();

        Packing::where('id', $packing->id)->update($validated);
        return redirect('/dashboard/mis/settings/packing')->with('success', 'Form Packing Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Packing  $packing
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Packing::destroy($id);
        return redirect('/dashboard/mis/settings/packing')->with('success', 'Form Packing Baru Telah Di Hapus!');
    }
}
