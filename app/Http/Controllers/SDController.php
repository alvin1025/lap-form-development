<?php

namespace App\Http\Controllers;

use App\Models\SD;
use App\Http\Requests\StoreSDRequest;
use App\Http\Requests\UpdateSDRequest;
use App\Imports\SdImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sd = SD::all();
        return view('dashboard.mis.settings.sd.index', [
            'sd' => $sd
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sd = SD::all();
        return view('dashboard.mis.settings.sd.create', [
            'sd' => $sd
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSDRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSDRequest $request)
    {
        $validated = $request->validated();
        SD::create($validated);
        return redirect('/dashboard/mis/settings/sd')->with('success', 'SD Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SD  $sD
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sd = SD::findOrFail($id);
        return view('dashboard.mis.settings.sd.show', [
            'sd' => $sd
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SD  $sD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sd = SD::findOrFail($id);
        return view('dashboard.mis.settings.sd.edit', [
            'sd' => $sd
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSDRequest  $request
     * @param  \App\Models\SD  $sD
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSDRequest $request, SD $sd)
    {
        $validated = $request->validated();

        SD::where('id', $sd->id)->update($validated);
        return redirect('/dashboard/mis/settings/sd')->with('success', 'SD Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SD  $sD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SD::destroy($id);
        return redirect('/dashboard/mis/settings/sd')->with('success', 'SD Baru Telah Di Hapus!');
    }

    public function importexcelSD(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('SdData', $namafile);


        Excel::import(new SdImport, \public_path('/SdData/' . $namafile));

        return redirect('/dashboard/mis/settings/sd')->with('success', 'SD Baru Telah Di Tambahkan!');
    }
}
