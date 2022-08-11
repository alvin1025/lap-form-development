<?php

namespace App\Http\Controllers;

use App\Models\SurchargeType;
use App\Http\Requests\StoreSurchargeTypeRequest;
use App\Http\Requests\UpdateSurchargeTypeRequest;
use App\Imports\SurchargeTypeImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class SurchargeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surcharge = SurchargeType::all();
        return view('dashboard.mis.settings.surcharge.index', ['surcharge' => $surcharge]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surcharge = SurchargeType::all();
        return view('dashboard.mis.settings.surcharge.create', ['surcharge' => $surcharge]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSurchargeTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSurchargeTypeRequest $request)
    {
        $validated = $request->validated();

        SurchargeType::create($validated);
        return redirect('/dashboard/mis/settings/surcharge')->with('success', 'Form Surcharge Type Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SurchargeType  $surchargeType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surcharge = SurchargeType::findOrFail($id);
        return view('dashboard.mis.settings.surcharge.show', [
            'surcharge' => $surcharge
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SurchargeType  $surchargeType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surcharge = SurchargeType::findOrFail($id);
        return view('dashboard.mis.settings.surcharge.edit', [
            'surcharge' => $surcharge
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSurchargeTypeRequest  $request
     * @param  \App\Models\SurchargeType  $surchargeType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSurchargeTypeRequest $request, SurchargeType $surcharge)
    {
        $validated = $request->validated();

        SurchargeType::where('id', $surcharge->id)->update($validated);
        return redirect('/dashboard/mis/settings/surcharge')->with('success', 'Form Surcharge  Telah Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SurchargeType  $surchargeType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SurchargeType::destroy($id);
        return redirect('/dashboard/mis/settings/surcharge')->with('success', 'Form Surcharge Type Telah Di Hapus!');
    }

    public function importSurchargeType(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('SurchargeTypeData', $namafile);


        Excel::import(new SurchargeTypeImport, \public_path('/SurchargeTypeData/' . $namafile));

        return redirect('/dashboard/mis/settings/surcharge')->with('success', 'Form Surcharge Type Telah Di Tambahkan!');
    }
}
