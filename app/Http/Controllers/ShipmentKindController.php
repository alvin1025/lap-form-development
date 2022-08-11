<?php

namespace App\Http\Controllers;

use App\Models\ShipmentKind;
use App\Http\Requests\StoreShipmentKindRequest;
use App\Http\Requests\UpdateShipmentKindRequest;

class ShipmentKindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipmentKind = ShipmentKind::all();
        return view('dashboard.mis.settings.shipmentKind.index', [
            'shipmentKind' => $shipmentKind
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shipmentKind = ShipmentKind::all();
        return view('dashboard.mis.settings.shipmentKind.create', [
            'shipmentKind' => $shipmentKind
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShipmentKindRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShipmentKindRequest $request)
    {
        $validated = $request->validated();

        ShipmentKind::create($validated);
        return redirect('/dashboard/mis/settings/shipmentKind')->with('success', 'Shipment Kind Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShipmentKind  $shipmentKind
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shipmentKind = ShipmentKind::findOrFail($id);
        return view('dashboard.mis.settings.shipmentKind.show', [
            'shipmentKind' => $shipmentKind
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShipmentKind  $shipmentKind
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipmentKind = ShipmentKind::findOrFail($id);
        return view('dashboard.mis.settings.shipmentKind.edit', [
            'shipmentKind' => $shipmentKind
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShipmentKindRequest  $request
     * @param  \App\Models\ShipmentKind  $shipmentKind
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShipmentKindRequest $request, ShipmentKind $shipmentKind)
    {
        $validated = $request->validated();

        ShipmentKind::where('id', $shipmentKind->id)->update($validated);
        return redirect('/dashboard/mis/settings/shipmentKind')->with('success', 'Shipment Kind Baru Telah Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipmentKind  $shipmentKind
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShipmentKind::destroy($id);
        return redirect('/dashboard/mis/settings/shipmentKind')->with('success', 'Shipment Kind Baru Telah Hapus!');
    }
}
