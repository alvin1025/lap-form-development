<?php

namespace App\Http\Controllers;

use App\Models\ShipmentKindManagement;
use App\Http\Requests\StoreShipmentKindManagementRequest;
use App\Http\Requests\UpdateShipmentKindManagementRequest;
use App\Models\Packing;
use App\Models\ShipmentKind;

class ShipmentKindManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipment = ShipmentKindManagement::all();
        return view('dashboard.mis.settings.shipmentManagement.index', [
            'shipment' => $shipment
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shki = ShipmentKind::all();
        $packing = Packing::all();
        $shipment = ShipmentKindManagement::all();
        return view(
            'dashboard.mis.settings.shipmentManagement.create',
            [
                'shipment' => $shipment,
                'shki' => $shki,
                'packing' => $packing
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShipmentKindManagementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShipmentKindManagementRequest $request)
    {
        $validated = $request->validated();

        ShipmentKindManagement::create($validated);
        return redirect('/dashboard/mis/settings/shipmentKindManagement')->with('success', 'ShipmentKind Management Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShipmentKindManagement  $shipmentKindManagement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shki = ShipmentKind::all();
        $packing = Packing::all();
        $shipment = ShipmentKindManagement::findOrFail($id);
        return view(
            'dashboard.mis.settings.shipmentManagement.show',
            [
                'shipment' => $shipment,
                'shki' => $shki,
                'packing' => $packing
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShipmentKindManagement  $shipmentKindManagement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shki = ShipmentKind::all();
        $packing = Packing::all();
        $shipment = ShipmentKindManagement::findOrFail($id);
        return view(
            'dashboard.mis.settings.shipmentManagement.edit',
            [
                'shipment' => $shipment,
                'shki' => $shki,
                'packing' => $packing
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShipmentKindManagementRequest  $request
     * @param  \App\Models\ShipmentKindManagement  $shipmentKindManagement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShipmentKindManagementRequest $request, ShipmentKindManagement $shipmentKindManagement)
    {
        $validated = $request->validated();

        ShipmentKindManagement::where('id', $shipmentKindManagement->id)->update($validated);
        return redirect('/dashboard/mis/settings/shipmentKindManagement')->with('success', 'ShipmentKind Management Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipmentKindManagement  $shipmentKindManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShipmentKindManagement::destroy($id);
        return redirect('/dashboard/mis/settings/shipmentKindManagement')->with('success', 'ShipmentKind Management Telah Di Hapus!');
    }
}
