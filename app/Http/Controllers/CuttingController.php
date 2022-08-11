<?php

namespace App\Http\Controllers;

use App\Models\Cutting;
use App\Http\Requests\StoreCuttingRequest;
use App\Http\Requests\UpdateCuttingRequest;

class CuttingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutting = Cutting::all();
        return view('dashboard.mis.settings.cutting.index', [
            'cutting' => $cutting
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cutting = Cutting::all();
        return view('dashboard.mis.settings.cutting.create', [
            'cutting' => $cutting
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCuttingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCuttingRequest $request)
    {
        $validated = $request->validated();

        Cutting::create($validated);
        return redirect('/dashboard/mis/settings/cutting')->with('success', 'Form Packing Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cutting  $cutting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cutting = Cutting::findOrFail($id);
        return view('dashboard.mis.settings.cutting.show', [
            'cutting' => $cutting
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cutting  $cutting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cutting = Cutting::findOrFail($id);
        return view('dashboard.mis.settings.cutting.edit', [
            'cutting' => $cutting
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCuttingRequest  $request
     * @param  \App\Models\Cutting  $cutting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCuttingRequest $request, Cutting $cutting)
    {
        $validated = $request->validated();

        Cutting::where('id', $cutting->id)->update($validated);
        return redirect('/dashboard/mis/settings/cutting')->with('success', 'Form Packing Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cutting  $cutting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cutting::destroy($id);
        return redirect('/dashboard/mis/settings/cutting')->with('success', 'Form Packing Baru Telah Di Hapus!');
    }
}
