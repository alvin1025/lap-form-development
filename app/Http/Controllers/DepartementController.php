<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Http\Requests\StoreDepartementRequest;
use App\Http\Requests\UpdateDepartementRequest;
use App\Imports\DepartmentImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departement = Departement::all();
        return view('dashboard.mis.settings.departement.index', [
            'departement' => $departement
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departement = Departement::all();
        return view('dashboard.mis.settings.departement.create', [
            'departement' => $departement
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDepartementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartementRequest $request)
    {
        $validated = $request->validated();

        Departement::create($validated);
        return redirect('/dashboard/mis/settings/departement')->with('success', 'Form Departement Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departement = Departement::findOrFail($id);
        return view('dashboard.mis.settings.departement.show', [
            'departement' => $departement
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departement = Departement::findOrFail($id);
        return view('dashboard.mis.settings.departement.edit', [
            'departement' => $departement
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepartementRequest  $request
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartementRequest $request, Departement $departement)
    {
        $validated = $request->validated();

        Departement::where('id', $departement->id)->update($validated);
        return redirect('/dashboard/mis/settings/departement')->with('success', 'Form Departement Baru Telah Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departement::destroy($id);
        return redirect('/dashboard/mis/settings/departement')->with('success', 'Form Departement Baru Telah Hapus!');
    }

    public function importDepartment(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('DepartmentData', $namafile);


        Excel::import(new DepartmentImport, \public_path('/DepartmentData/' . $namafile));

        return redirect('/dashboard/mis/settings/departement')->with('success', 'Department Data Baru Telah Di Tambahkan!');
    }
}
