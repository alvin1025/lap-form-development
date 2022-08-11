<?php

namespace App\Http\Controllers;

use App\Models\Assiociation;
use App\Http\Requests\StoreAssiociationRequest;
use App\Http\Requests\UpdateAssiociationRequest;
use App\Imports\AssiociationImport;
use App\Models\Negara;
use App\Models\Tax;
use App\Models\Tittle;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AssiociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assiociation = Assiociation::all();
        return view('dashboard.mis.settings.assoc.index', [
            'assoc' => $assiociation
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assiociation = Assiociation::all();
        $title = Tittle::all();
        $negara = Negara::all();
        $tax = Tax::all();
        return view('dashboard.mis.settings.assoc.create', [
            'assoc' => $assiociation,
            'negaras' => $negara,
            'titles' => $title,
            'taxs' => $tax
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssiociationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssiociationRequest $request)
    {
        $validated = $request->validated();

        Assiociation::create($validated);
        return redirect('/dashboard/mis/settings/assiociation')->with('success', 'Form Association Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assiociation  $assiociation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assiociation = Assiociation::findOrFail($id);
        return view('dashboard.mis.settings.assoc.show', [
            'assoc' => $assiociation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assiociation  $assiociation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = Tittle::all();
        $negara = Negara::all();
        $tax = Tax::all();
        $assiociation = Assiociation::findOrFail($id);
        return view('dashboard.mis.settings.assoc.edit', [
            'assoc' => $assiociation,
            'negaras' => $negara,
            'titles' => $title,
            'taxs' => $tax
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssiociationRequest  $request
     * @param  \App\Models\Assiociation  $assiociation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssiociationRequest $request, Assiociation $assiociation)
    {
        $validated = $request->validated();

        Assiociation::where('id', $assiociation->id)->update($validated);
        return redirect('/dashboard/mis/settings/assiociation')->with('success', 'Form Association Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assiociation  $assiociation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assiociation::destroy($id);
        return redirect('/dashboard/mis/settings/assiociation')->with('success', 'Form Association Baru Telah Di Hapus!');
    }

    public function importAssoc(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('AssocData', $namafile);


        Excel::import(new AssiociationImport, \public_path('/AssocData/' . $namafile));

        return redirect('/dashboard/mis/settings/assiociation')->with('success', 'Form Association Baru Telah Di Tambah!');
    }
}
