<?php

namespace App\Http\Controllers;

use App\Models\DeliveryTermSL;
use App\Http\Requests\StoreDeliveryTermSLRequest;
use App\Http\Requests\UpdateDeliveryTermSLRequest;

class DeliveryTermSLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delivTerm = DeliveryTermSL::all();
        return view('dashboard.mis.settings.delivTerm.index', [
            'deliv' => $delivTerm
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $delivTerm = DeliveryTermSL::all();
        return view('dashboard.mis.settings.delivTerm.create', [
            'deliv' => $delivTerm
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeliveryTermSLRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryTermSLRequest $request)
    {
        $validated = $request->validated();

        DeliveryTermSL::create($validated);
        return redirect('/dashboard/mis/settings/delivTerm')->with('success', 'Form Delivery Term Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryTermSL  $deliveryTermSL
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delivTerm = DeliveryTermSL::findOrFail($id);
        return view('dashboard.mis.settings.delivTerm.show', [
            'deliv' => $delivTerm
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryTermSL  $deliveryTermSL
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivTerm = DeliveryTermSL::findOrFail($id);
        return view('dashboard.mis.settings.delivTerm.edit', [
            'deliv' => $delivTerm
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeliveryTermSLRequest  $request
     * @param  \App\Models\DeliveryTermSL  $deliveryTermSL
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeliveryTermSLRequest $request, DeliveryTermSL $delivTerm)
    {
        $validated = $request->validated();

        DeliveryTermSL::where('id', $delivTerm->id)->update($validated);
        return redirect('/dashboard/mis/settings/delivTerm')->with('success', 'Form Delivery Term Telah di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryTermSL  $deliveryTermSL
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DeliveryTermSL::destroy($id);
        return redirect('/dashboard/mis/settings/delivTerm')->with('success', 'Form Delivery Term Telah di Hapus !');
    }
}
