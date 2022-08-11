<?php

namespace App\Http\Controllers;

use App\Models\Sg;
use App\Http\Requests\StoreSgRequest;
use App\Http\Requests\UpdateSgRequest;
use App\Imports\SgImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class SgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sg = Sg::all();
        return view('dashboard.mis.settings.sg.index', [
            'sg' => $sg
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sg = Sg::all();
        return view('dashboard.mis.settings.sg.create', [
            'sg' => $sg
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSgRequest $request)
    {
        $validated = $request->validated();

        Sg::create($validated);
        return redirect('/dashboard/mis/settings/sg')->with('success', 'Form SG Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sg  $sg
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sg = Sg::findOrFail($id);
        return view('dashboard.mis.settings.sg.show', [
            'sg' => $sg
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sg  $sg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sg = Sg::findOrFail($id);
        return view('dashboard.mis.settings.sg.edit', [
            'sg' => $sg
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSgRequest  $request
     * @param  \App\Models\Sg  $sg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSgRequest $request, Sg $sg)
    {
        $validated = $request->validated();

        Sg::where('id', $sg->id)->update($validated);
        return redirect('/dashboard/mis/settings/sg')->with('success', 'Form SG Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sg  $sg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sg::destroy($id);
        return redirect('/dashboard/mis/settings/sg')->with('success', 'Form SG Baru Telah Di Hapus!');
    }

    public function importexcelSG(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('SgData', $namafile);


        Excel::import(new SgImport, \public_path('/SgData/' . $namafile));

        return redirect('/dashboard/mis/settings/sg')->with('success', 'SG Baru Telah Di Tambahkan!');
    }
}
