<?php

namespace App\Http\Controllers;

use App\Models\Kurs;
use App\Http\Requests\StoreKursRequest;
use App\Http\Requests\UpdateKursRequest;
use App\Imports\KursImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurs = Kurs::all();
        return view('dashboard.mis.settings.kurs.index', [
            'kurs' => $kurs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kurs = Kurs::all();
        return view('dashboard.mis.settings.kurs.create', [
            'kurs' => $kurs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKursRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKursRequest $request)
    {
        $validated = $request->validated();

        Kurs::create($validated);
        return redirect('/dashboard/mis/settings/kurs')->with('success', 'Form Kurs Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kurs  $kurs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kurs = Kurs::findOrFail($id);
        return view('dashboard.mis.settings.kurs.show', [
            'kurs' => $kurs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kurs  $kurs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kurs = Kurs::findOrFail($id);
        return view('dashboard.mis.settings.kurs.edit', [
            'kurs' => $kurs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKursRequest  $request
     * @param  \App\Models\Kurs  $kurs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKursRequest $request, Kurs $kur)
    {
        $validated = $request->validated();

        Kurs::where('id', $kur->id)->update($validated);

        return redirect('/dashboard/mis/settings/kurs')->with('success', 'Form Kurs Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kurs  $kurs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kurs::destroy($id);
        return redirect('/dashboard/mis/settings/kurs')->with('success', 'Form Kurs Baru Telah Di Delete!');
    }

    public function importexcelKurs(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('KursData', $namafile);


        Excel::import(new KursImport, \public_path('/KursData/' . $namafile));

        return redirect('/dashboard/mis/settings/kurs')->with('success', 'kurs Baru Telah Di Tambahkan!');
    }
}
