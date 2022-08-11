<?php

namespace App\Http\Controllers;

use App\Models\CaraPembayaran;
use App\Http\Requests\StoreCaraPembayaranRequest;
use App\Http\Requests\UpdateCaraPembayaranRequest;
use App\Imports\CaraPembayaranImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CaraPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caraPembayaran = CaraPembayaran::all();
        return view('dashboard.mis.settings.caraPembayaran.index', [
            'caraPembayaran' => $caraPembayaran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caraPembayaran = CaraPembayaran::all();
        return view('dashboard.mis.settings.caraPembayaran.create', [
            'caraPembayaran' => $caraPembayaran
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCaraPembayaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCaraPembayaranRequest $request)
    {
        $validated = $request->validated();

        CaraPembayaran::create($validated);
        return redirect('/dashboard/mis/settings/caraPembayaran')->with('success', 'Form Cara Pembayaran Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaraPembayaran  $caraPembayaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caraPembayaran = CaraPembayaran::findOrFail($id);
        return view('dashboard.mis.settings.caraPembayaran.show', [
            'caraPembayaran' => $caraPembayaran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CaraPembayaran  $caraPembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caraPembayaran = CaraPembayaran::findOrFail($id);
        return view('dashboard.mis.settings.caraPembayaran.edit', [
            'caraPembayaran' => $caraPembayaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCaraPembayaranRequest  $request
     * @param  \App\Models\CaraPembayaran  $caraPembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCaraPembayaranRequest $request, CaraPembayaran $caraPembayaran)
    {
        $validated = $request->validated();

        CaraPembayaran::where('id', $caraPembayaran->id)->update($validated);
        return redirect('/dashboard/mis/settings/caraPembayaran')->with('success', 'Form Cara Pembayaran Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaraPembayaran  $caraPembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CaraPembayaran::destroy($id);
        return redirect('/dashboard/mis/settings/caraPembayaran')->with('success', 'Form Cara Pembayaran Telah Di Update!');
    }

    public function importCaraPembayaran(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('CaraPembayaranData', $namafile);


        Excel::import(new CaraPembayaranImport, \public_path('/CaraPembayaranData/' . $namafile));

        return redirect('/dashboard/mis/settings/caraPembayaran')->with('success', 'Form Cara Pembayaran Telah Di Tambahkan!');
    }
}
