<?php

namespace App\Http\Controllers;

use App\Models\VA03;
use App\Http\Requests\StoreVA03Request;
use App\Http\Requests\UpdateVA03Request;
use App\Models\QuantityUnit;

class VA03Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $va03 = VA03::all();
        return view('dashboard.mis.settings.va03.index', [
            'va03' => $va03
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quantity = QuantityUnit::all();
        $va03 = VA03::all();
        return view('dashboard.mis.settings.va03.create', [
            'va03' => $va03,
            'quantity' => $quantity
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVA03Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVA03Request $request)
    {
        $validated = $request->validated();

        VA03::create($validated);
        return redirect('/dashboard/mis/settings/va03')->with('success', 'Form VA03 Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VA03  $vA03
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quantity = QuantityUnit::all();
        $va03 = VA03::findOrFail($id);
        return view('dashboard.mis.settings.va03.show', [
            'va03' => $va03,
            'quantity' => $quantity
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VA03  $vA03
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quantity = QuantityUnit::all();
        $va03 = VA03::findOrFail($id);
        return view('dashboard.mis.settings.va03.edit', [
            'va03' => $va03,
            'quantity' => $quantity
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVA03Request  $request
     * @param  \App\Models\VA03  $vA03
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVA03Request $request, VA03 $va03)
    {
        $validated = $request->validated();

        VA03::where('id', $va03->id)->update($validated);
        return redirect('/dashboard/mis/settings/va03')->with('success', 'Form VA03 Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VA03  $vA03
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VA03::destroy($id);
        return redirect('/dashboard/mis/settings/va03')->with('success', 'Form VA03 Baru Telah Di Update!');
    }
}
