<?php

namespace App\Http\Controllers;

use App\Models\QuantityUnit;
use App\Http\Requests\StoreQuantityUnitRequest;
use App\Http\Requests\UpdateQuantityUnitRequest;
use App\Imports\QuantityUnitImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class QuantityUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quantity = QuantityUnit::all();
        return view('dashboard.mis.settings.quantityUnit.index', [
            'quantity' => $quantity
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
        return view('dashboard.mis.settings.quantityUnit.create', [
            'quantity' => $quantity
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuantityUnitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuantityUnitRequest $request)
    {
        $validated = $request->validated();

        QuantityUnit::create($validated);
        return redirect('/dashboard/mis/settings/quantity')->with('success', 'Quantity Unit Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuantityUnit  $quantityUnit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quantity = QuantityUnit::findOrFail($id);
        return view('dashboard.mis.settings.quantityUnit.show', [
            'quantity' => $quantity
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuantityUnit  $quantityUnit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quantity = QuantityUnit::findOrFail($id);
        return view('dashboard.mis.settings.quantityUnit.edit', [
            'quantity' => $quantity
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuantityUnitRequest  $request
     * @param  \App\Models\QuantityUnit  $quantityUnit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuantityUnitRequest $request, QuantityUnit $quantity)
    {
        $validated = $request->validated();

        QuantityUnit::where('id', $quantity->id)->update($validated);
        return redirect('/dashboard/mis/settings/quantity')->with('success', 'Quantity Unit Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuantityUnit  $quantityUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        QuantityUnit::destroy($id);
        return redirect('/dashboard/mis/settings/quantity')->with('success', 'Quantity Unit Telah Di Hapus!');
    }

    public function importQuantityUnit(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('QuantityUnitData', $namafile);


        Excel::import(new QuantityUnitImport, \public_path('/QuantityUnitData/' . $namafile));

        return redirect('/dashboard/mis/settings/quantity')->with('success', 'Form Quantity Unit Telah Di Tambahkan!');
    }
}
