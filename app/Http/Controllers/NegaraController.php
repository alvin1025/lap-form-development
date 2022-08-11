<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use App\Http\Requests\StoreNegaraRequest;
use App\Http\Requests\UpdateNegaraRequest;
use App\Imports\NegaraImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $negara = Negara::all();
        return view('dashboard.mis.settings.negara.index', [
            'negara' => $negara
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $negara = Negara::all();
        return view('dashboard.mis.settings.negara.create', [
            'negara' => $negara
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNegaraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNegaraRequest $request)
    {
        $validated = $request->validated();
        Negara::create($validated);

        return redirect('/dashboard/mis/settings/negara')->with('success', 'Daftar Negara Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $negara = Negara::findOrFail($id);
        return view('dashboard.mis.settings.negara.show', [
            'negara' => $negara
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $negara = Negara::findOrFail($id);
        return view('dashboard.mis.settings.negara.edit', [
            'negara' => $negara
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNegaraRequest  $request
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNegaraRequest $request, Negara $negara)
    {
        $validated = $request->validated();

        Negara::where('id', $negara->id)->update($validated);
        return redirect('/dashboard/mis/settings/negara')->with('success', 'Daftar Negara Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Negara::destroy($id);
        return redirect('/dashboard/mis/settings/negara')->with('success', 'Daftar Negara Baru Telah Di Hapuss!');
    }

    public function importexcelNegara(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('NegaraData', $namafile);


        Excel::import(new NegaraImport, \public_path('/NegaraData/' . $namafile));

        return redirect('/dashboard/mis/settings/negara')->with('success', 'Data Negara Baru Telah Di Tambahkan!');
    }
}
