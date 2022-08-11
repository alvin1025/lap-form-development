<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Http\Requests\StoreTaxRequest;
use App\Http\Requests\UpdateTaxRequest;
use App\Imports\TaxImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tax = Tax::all();
        return view('dashboard.mis.settings.tax.index', [
            'tax' => $tax
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tax = Tax::all();
        return view('dashboard.mis.settings.tax.create', [
            'tax' => $tax
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaxRequest $request)
    {
        $validated = $request->validated();

        Tax::create($validated);
        return redirect('/dashboard/mis/settings/tax')->with('success', 'Form Tax Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tax = Tax::findOrFail($id);
        return view('dashboard.mis.settings.tax.show', [
            'tax' => $tax
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tax = Tax::findOrFail($id);
        return view('dashboard.mis.settings.tax.edit', [
            'tax' => $tax
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaxRequest  $request
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaxRequest $request, Tax $tax)
    {
        $validated = $request->validated();

        Tax::where('id', $tax->id)->update($validated);
        return redirect('/dashboard/mis/settings/tax')->with('success', 'Form Tax Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tax::destroy($id);
        return redirect('/dashboard/mis/settings/tax')->with('success', 'Form Tax Baru Telah Di Hapus!');
    }

    public function importexcelTax(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('TaxData', $namafile);


        Excel::import(new TaxImport, \public_path('/TaxData/' . $namafile));

        return redirect('/dashboard/mis/settings/tax')->with('success', 'Tax Baru Telah Di Tambahkan!');
    }
}
