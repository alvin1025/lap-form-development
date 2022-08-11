<?php

namespace App\Http\Controllers;

use App\Models\KodeCountry;
use App\Http\Requests\StoreKodeCountryRequest;
use App\Http\Requests\UpdateKodeCountryRequest;
use App\Imports\KodeCountyImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KodeCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kodeCountry = KodeCountry::all();
        return view('dashboard.mis.settings.kodeCountry.index', [
            'kodeCountry' => $kodeCountry
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kodeCountry = KodeCountry::all();
        return view('dashboard.mis.settings.kodeCountry.create', [
            'kodeCountry' => $kodeCountry
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKodeCountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKodeCountryRequest $request)
    {
        $validated = $request->validated();

        KodeCountry::create($validated);
        return redirect('/dashboard/mis/settings/country')->with('success', 'Daftar Kode Country Baru Berhasil Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KodeCountry  $kodeCountry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kodeCountry = KodeCountry::findOrFail($id);
        return view('dashboard.mis.settings.kodeCountry.show', [
            'country' => $kodeCountry
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KodeCountry  $kodeCountry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kodeCountry = KodeCountry::findOrFail($id);
        return view('dashboard.mis.settings.kodeCountry.edit', [
            'country' => $kodeCountry
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKodeCountryRequest  $request
     * @param  \App\Models\KodeCountry  $kodeCountry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKodeCountryRequest $request, KodeCountry $country)
    {
        $validated = $request->validated();

        KodeCountry::where('id', $country->id)->update($validated);
        return redirect('/dashboard/mis/settings/country')->with('success', 'Daftar Kode Country Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KodeCountry  $kodeCountry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KodeCountry::destroy($id);
        return redirect('/dashboard/mis/settings/country')->with('success', 'Daftar Kode Country Berhasil Di Hapus!');
    }

    public function importCounty(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('KodeCountyData', $namafile);


        Excel::import(new KodeCountyImport, \public_path('/KodeCountyData/' . $namafile));

        return redirect('/dashboard/mis/settings/country')->with('success', 'Daftar Kode CountryTelah Di Tambahkan!');
    }
}
