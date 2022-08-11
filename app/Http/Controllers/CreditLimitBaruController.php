<?php

namespace App\Http\Controllers;

use App\Models\CreditLimitBaru;
use App\Http\Requests\StoreCreditLimitBaruRequest;
use App\Http\Requests\UpdateCreditLimitBaruRequest;
use App\Models\CreditLimit;
use App\Models\PayTerm;
use App\Models\PermintaanInputCustomer;
use App\Models\User;

class CreditLimitBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $creditBaru = CreditLimitBaru::all();
        return view('dashboard.salesFolder.creditBaru.index', [
            'user' => $user,
            'creditBaru' => $creditBaru
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
        $credit = PermintaanInputCustomer::with('permintaaninputcustomer')->get();;
        $creditBaru = CreditLimitBaru::all();
        $creditLimit = CreditLimit::all();
        $pays = PayTerm::all();
        return view('dashboard.salesFolder.creditBaru.create', [
            'user' => $user,
            'creditBaru' => $creditBaru,
            'credits' => $credit,
            'creditLimits' => $creditLimit,
            'pays' => $pays
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreditLimitBaruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreditLimitBaruRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alamat'] = nl2br(e($request->alamat));

        CreditLimitBaru::create($validated);
        return redirect('/dashboard/salesFolder/creditBaru')->with('success', 'Credit Limit Dan Credit Term Baru Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreditLimitBaru  $creditLimitBaru
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $creditBaru = CreditLimitBaru::findOrFail($id);
        return view('dashboard.salesFolder.creditBaru.show', [
            'creditBaru' => $creditBaru
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreditLimitBaru  $creditLimitBaru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $creditBaru = CreditLimitBaru::findOrFail($id);
        return view('dashboard.salesFolder.creditBaru.edit', [
            'user' => $user,
            'creditBaru' => $creditBaru
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreditLimitBaruRequest  $request
     * @param  \App\Models\CreditLimitBaru  $creditLimitBaru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCreditLimitBaruRequest $request, CreditLimitBaru $creditBaru)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alamat'] = nl2br(e($request->alamat));

        CreditLimitBaru::where('id', $creditBaru->id)->update($validated);
        return redirect('/dashboard/salesFolder/creditBaru')->with('success', 'Credit Limit Dan Credit Term Baru Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreditLimitBaru  $creditLimitBaru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CreditLimitBaru::destroy($id);
        return redirect('/dashboard/salesFolder/creditBaru')->with('success', 'Credit Limit Dan Credit Term Baru Berhasil Di Hapus!');
    }
}
