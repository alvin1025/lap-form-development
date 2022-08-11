<?php

namespace App\Http\Controllers;

use App\Models\SalesGrade;
use App\Http\Requests\StoreSalesGradeRequest;
use App\Http\Requests\UpdateSalesGradeRequest;

class SalesGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = SalesGrade::all();
        return view('dashboard.mis.settings.salesGrade.index', [
            'sales' => $sales
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sales = SalesGrade::all();
        return view('dashboard.mis.settings.salesGrade.create', [
            'sales' => $sales
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalesGradeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalesGradeRequest $request)
    {
        $validated = $request->validated();

        SalesGrade::create($validated);
        return redirect('/dashboard/mis/settings/salesGrade')->with('success', 'Form Sales Grade Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesGrade  $salesGrade
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sales = SalesGrade::findOrFail($id);
        return view('dashboard.mis.settings.salesGrade.show', [
            'sales' => $sales
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesGrade  $salesGrade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sales = SalesGrade::findOrFail($id);
        return view('dashboard.mis.settings.salesGrade.edit', [
            'sales' => $sales
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalesGradeRequest  $request
     * @param  \App\Models\SalesGrade  $salesGrade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalesGradeRequest $request, SalesGrade $salesGrade)
    {
        $validated = $request->validated();

        SalesGrade::where('id', $salesGrade->id)->update($validated);
        return redirect('/dashboard/mis/settings/salesGrade')->with('success', 'Form Sales Grade Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesGrade  $salesGrade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SalesGrade::destroy($id);
        return redirect('/dashboard/mis/settings/salesGrade')->with('success', 'Form Sales Grade Telah Di Hapus!');
    }
}
