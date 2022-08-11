<?php

namespace App\Http\Controllers;

use App\Models\OrientasiMarket;
use App\Http\Requests\StoreOrientasiMarketRequest;
use App\Http\Requests\UpdateOrientasiMarketRequest;
use App\Imports\OrientasiMarketImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrientasiMarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orientasiMarket = OrientasiMarket::all();
        return view('dashboard.mis.settings.orientasiMarket.index', [
            'orientasiMarket' => $orientasiMarket
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orientasiMarket = OrientasiMarket::all();
        return view('dashboard.mis.settings.orientasiMarket.create', [
            'orientasiMarket' => $orientasiMarket
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrientasiMarketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrientasiMarketRequest $request)
    {
        $validated = $request->validated();

        OrientasiMarket::create($validated);
        return redirect('/dashboard/mis/settings/orientasiMarket')->with('success', 'Form Orientasi Market Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrientasiMarket  $orientasiMarket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orientasiMarket = OrientasiMarket::findOrFail($id);
        return view('dashboard.mis.settings.orientasiMarket.show', [
            'orientasiMarket' => $orientasiMarket
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrientasiMarket  $orientasiMarket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orientasiMarket = OrientasiMarket::findOrFail($id);
        return view('dashboard.mis.settings.orientasiMarket.edit', [
            'orientasiMarket' => $orientasiMarket
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrientasiMarketRequest  $request
     * @param  \App\Models\OrientasiMarket  $orientasiMarket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrientasiMarketRequest $request, OrientasiMarket $orientasiMarket)
    {
        $validated = $request->validated();

        OrientasiMarket::where('id', $orientasiMarket->id)->update($validated);
        return redirect('/dashboard/mis/settings/orientasiMarket')->with('success', 'Form Orientasi Market Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrientasiMarket  $orientasiMarket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrientasiMarket::destroy($id);
        return redirect('/dashboard/mis/settings/orientasiMarket')->with('success', 'Form Orientasi Market Baru Telah Di Update!');
    }

    public function importexcelOrientasiMarket(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('OrientasiMarketData', $namafile);


        Excel::import(new OrientasiMarketImport, \public_path('/OrientasiMarketData/' . $namafile));

        return redirect('/dashboard/mis/settings/orientasiMarket')->with('success', 'Form Orientasi Market Telah Di Tambahkan!');
    }
}
