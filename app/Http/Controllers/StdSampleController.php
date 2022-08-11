<?php

namespace App\Http\Controllers;

use App\Models\StdSample;
use App\Http\Requests\StoreStdSampleRequest;
use App\Http\Requests\UpdateStdSampleRequest;

class StdSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stdSample = StdSample::all();
        return view('dashboard.mis.settings.std.index', [
            'stdSample' => $stdSample
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stdSample = StdSample::all();
        return view('dashboard.mis.settings.std.create', [
            'stdSample' => $stdSample
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStdSampleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStdSampleRequest $request)
    {
        $validated = $request->validated();

        StdSample::create($validated);
        return redirect('/dashboard/mis/settings/stdSample')->with('success', 'Form Std Sample Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StdSample  $stdSample
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stdSample = StdSample::findOrFail($id);
        return view('dashboard.mis.settings.std.show', [
            'stdSample' => $stdSample
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StdSample  $stdSample
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stdSample = StdSample::findOrFail($id);
        return view('dashboard.mis.settings.std.edit', [
            'stdSample' => $stdSample
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStdSampleRequest  $request
     * @param  \App\Models\StdSample  $stdSample
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStdSampleRequest $request, StdSample $stdSample)
    {

        $validated = $request->validated();

        StdSample::where('id', $stdSample->id)->update($validated);
        return redirect('/dashboard/mis/settings/stdSample')->with('success', 'Form Std Sample Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StdSample  $stdSample
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StdSample::destroy($id);
        return redirect('/dashboard/mis/settings/stdSample')->with('success', 'Form Std Sample Baru Telah Di Hapus!');
    }
}
