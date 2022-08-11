<?php

namespace App\Http\Controllers;

use App\Models\KepemilikanKantor;
use App\Http\Requests\StoreKepemilikanKantorRequest;
use App\Http\Requests\UpdateKepemilikanKantorRequest;
use App\Imports\KepemilikanKantorImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KepemilikanKantorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kepemilikanKantor = KepemilikanKantor::all();
        return view('dashboard.mis.settings.kepemilikanKantor.index', [
            'kepemilikanKantor' => $kepemilikanKantor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kepemilikanKantor = KepemilikanKantor::all();
        return view('dashboard.mis.settings.kepemilikanKantor.create', [
            'kepemilikanKantor' => $kepemilikanKantor
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKepemilikanKantorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKepemilikanKantorRequest $request)
    {
        $validated = $request->validated();

        KepemilikanKantor::create($validated);
        return redirect('/dashboard/mis/settings/kepemilikanKantor')->with('success', 'Form Kepemilikan Kantor Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KepemilikanKantor  $kepemilikanKantor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kepemilikanKantor = KepemilikanKantor::findOrFail($id);
        return view('dashboard.mis.settings.kepemilikanKantor.show', [
            'kepemilikanKantor' => $kepemilikanKantor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KepemilikanKantor  $kepemilikanKantor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kepemilikanKantor = KepemilikanKantor::findOrFail($id);
        return view('dashboard.mis.settings.kepemilikanKantor.edit', [
            'kepemilikanKantor' => $kepemilikanKantor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKepemilikanKantorRequest  $request
     * @param  \App\Models\KepemilikanKantor  $kepemilikanKantor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKepemilikanKantorRequest $request, KepemilikanKantor $kepemilikanKantor)
    {
        $validated = $request->validated();

        KepemilikanKantor::where('id', $kepemilikanKantor->id)->update($validated);
        return redirect('/dashboard/mis/settings/kepemilikanKantor')->with('success', 'Form Kepemilikan Kantor Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KepemilikanKantor  $kepemilikanKantor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KepemilikanKantor::destroy($id);
        return redirect('/dashboard/mis/settings/kepemilikanKantor')->with('success', 'Form Kepemilikan Kantor Telah Di Hapus!');
    }

    public function importexcelKepemilikanKantor(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('KepemilikanKantorData', $namafile);


        Excel::import(new KepemilikanKantorImport, \public_path('/KepemilikanKantorData/' . $namafile));

        return redirect('/dashboard/mis/settings/kepemilikanKantor')->with('success', 'Form Kepemilikan Kantor Telah Di Tambahkan!');
    }
}
