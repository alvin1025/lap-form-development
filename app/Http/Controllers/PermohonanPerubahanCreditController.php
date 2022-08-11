<?php

namespace App\Http\Controllers;

use App\Models\PermohonanPerubahanCredit;
use App\Http\Requests\StorePermohonanPerubahanCreditRequest;
use App\Http\Requests\UpdatePermohonanPerubahanCreditRequest;
use App\Models\User;

class PermohonanPerubahanCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $credit = PermohonanPerubahanCredit::all();
        return view('dashboard.salesFolder.permohonanCredit.index', [
            'user' => $user,
            'credit' => $credit
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $credit = PermohonanPerubahanCredit::with('customerinput')->get();
        return view('dashboard.salesFolder.permohonanCredit.create', [
            'user' => $user,
            'credits' => $credit
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermohonanPerubahanCreditRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermohonanPerubahanCreditRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alamat'] = nl2br(e($request->alamat));

        PermohonanPerubahanCredit::create($validated);
        return redirect('/dashboard/salesFolder/credit')->with('success', 'Permohonan Perubahan Credit Limit Dan Credit Term Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermohonanPerubahanCredit  $permohonanPerubahanCredit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all();
        $credit = PermohonanPerubahanCredit::findOrFail($id);
        return view('dashboard.salesFolder.permohonanCredit.show', [
            'user' => $user,
            'credit' => $credit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermohonanPerubahanCredit  $permohonanPerubahanCredit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $credit = PermohonanPerubahanCredit::findOrFail($id);
        return view('dashboard.salesFolder.permohonanCredit.edit', [
            'user' => $user,
            'credit' => $credit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermohonanPerubahanCreditRequest  $request
     * @param  \App\Models\PermohonanPerubahanCredit  $permohonanPerubahanCredit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermohonanPerubahanCreditRequest $request, PermohonanPerubahanCredit $credit)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alamat'] = nl2br(e($request->alamat));

        PermohonanPerubahanCredit::where('id', $credit->id)->update($validated);
        return redirect('/dashboard/salesFolder/credit')->with('success', 'Permohonan Perubahan Credit Limit Dan Credit Term Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermohonanPerubahanCredit  $permohonanPerubahanCredit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PermohonanPerubahanCredit::destroy($id);
        return redirect('/dashboard/salesFolder/credit')->with('success', 'Permohonan Perubahan Credit Limit Dan Credit Term Di Hapus!');
    }
}
