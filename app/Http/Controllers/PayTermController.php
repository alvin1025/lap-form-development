<?php

namespace App\Http\Controllers;

use App\Models\PayTerm;
use App\Http\Requests\StorePayTermRequest;
use App\Http\Requests\UpdatePayTermRequest;
use App\Imports\PaytermImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PayTermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payTerm = PayTerm::all();
        return view('dashboard.mis.settings.payTerm.index', [
            'payTerm' => $payTerm
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payTerm = PayTerm::all();
        return view('dashboard.mis.settings.payTerm.create', [
            'payTerm' => $payTerm
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePayTermRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayTermRequest $request)
    {
        $validated = $request->validated();

        PayTerm::create($validated);
        return redirect('/dashboard/mis/settings/payTerm')->with('success', 'PayTerm Sample Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PayTerm  $payTerm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payTerm = PayTerm::findOrFail($id);
        return view('dashboard.mis.settings.payTerm.show', [
            'payTerm' => $payTerm
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayTerm  $payTerm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payTerm = PayTerm::findOrFail($id);
        return view('dashboard.mis.settings.payTerm.edit', [
            'payTerm' => $payTerm
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayTermRequest  $request
     * @param  \App\Models\PayTerm  $payTerm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayTermRequest $request, PayTerm $payTerm)
    {
        $validated = $request->validated();

        PayTerm::where('id', $payTerm->id)->update($validated);
        return redirect('/dashboard/mis/settings/payTerm')->with('success', 'PayTerm Sample Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayTerm  $payTerm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PayTerm::destroy($id);
        return redirect('/dashboard/mis/settings/payTerm')->with('success', 'PayTerm Sample Baru Telah Di Hapus!');
    }

    public function importexcelPayterm(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('PaytermData', $namafile);


        Excel::import(new PaytermImport, \public_path('/PaytermData/' . $namafile));

        return redirect('/dashboard/mis/settings/payTerm')->with('success', 'PayTerm Baru Telah Di Tambahkan!');
    }
}
