<?php

namespace App\Http\Controllers;

use App\Models\DelCon;
use App\Http\Requests\StoreDelConRequest;
use App\Http\Requests\UpdateDelConRequest;
use App\Imports\DelconImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DelConController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delCon = DelCon::all();
        return view('dashboard.mis.settings.delCon.index', [
            'delcon' => $delCon
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $delCon = DelCon::all();
        return view('dashboard.mis.settings.delCon.create', [
            'delcon' => $delCon
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDelConRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDelConRequest $request)
    {
        $validated = $request->validated();

        DelCon::create($validated);
        return redirect('/dashboard/mis/settings/delcon')->with('success', 'Form Del.Con Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DelCon  $delCon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delCon = DelCon::findOrFail($id);
        return view('dashboard.mis.settings.delCon.show', [
            'delcon' => $delCon
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DelCon  $delCon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delCon = DelCon::findOrFail($id);
        return view('dashboard.mis.settings.delCon.edit', [
            'delcon' => $delCon
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDelConRequest  $request
     * @param  \App\Models\DelCon  $delCon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDelConRequest $request, DelCon $delcon)
    {
        $validated = $request->validated();

        DelCon::where('id', $delcon->id)->update($validated);
        return redirect('/dashboard/mis/settings/delcon')->with('success', 'Form Del.Con Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DelCon  $delCon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DelCon::destroy($id);
        return redirect('/dashboard/mis/settings/delcon')->with('success', 'Form Del.Con Baru Telah Di Hapus!');
    }

    public function importexcelDelcon(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('DelconData', $namafile);


        Excel::import(new DelconImport, \public_path('/DelconData/' . $namafile));

        return redirect('/dashboard/mis/settings/delcon')->with('success', 'Del.Con Baru Telah Di Tambahkan!');
    }
}
