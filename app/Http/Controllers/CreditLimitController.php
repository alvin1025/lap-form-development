<?php

namespace App\Http\Controllers;

use App\Models\CreditLimit;
use App\Http\Requests\StoreCreditLimitRequest;
use App\Http\Requests\UpdateCreditLimitRequest;
use App\Imports\CreditLimitImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CreditLimitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditLimit = CreditLimit::all();
        return view('dashboard.mis.settings.creditLimit.index', [
            'creditLimit' => $creditLimit
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $creditLimit = CreditLimit::all();
        return view('dashboard.mis.settings.creditLimit.create', [
            'creditLimit' => $creditLimit
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreditLimitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreditLimitRequest $request)
    {
        $validated = $request->validated();

        CreditLimit::create($validated);
        return redirect('/dashboard/mis/settings/creditLimit')->with('success', 'Form Credit Limit Data Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreditLimit  $creditLimit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $creditLimit = CreditLimit::findOrFail($id);
        return view('dashboard.mis.settings.creditLimit.show', [
            'creditLimit' => $creditLimit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreditLimit  $creditLimit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $creditLimit = CreditLimit::findOrFail($id);
        return view('dashboard.mis.settings.creditLimit.edit', [
            'creditLimit' => $creditLimit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreditLimitRequest  $request
     * @param  \App\Models\CreditLimit  $creditLimit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCreditLimitRequest $request, CreditLimit $creditLimit)
    {
        $validated = $request->validated();

        CreditLimit::where('id', $creditLimit->id)->update($validated);
        return redirect('/dashboard/mis/settings/creditLimit')->with('success', 'Form Credit Limit Data Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreditLimit  $creditLimit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CreditLimit::destroy($id);
        return redirect('/dashboard/mis/settings/creditLimit')->with('success', 'Form Credit Limit Data Baru Telah Di Hapus!');
    }

    public function importexcelCreditLimit(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('CreditLimitData', $namafile);


        Excel::import(new CreditLimitImport, \public_path('/CreditLimitData/' . $namafile));

        return redirect('/dashboard/mis/settings/creditLimit')->with('success', 'Credit Limit Baru Telah Di Tambahkan!');
    }
}
