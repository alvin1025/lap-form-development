<?php

namespace App\Http\Controllers;

use App\Models\PaymentTermMaster;
use App\Http\Requests\StorePaymentTermMasterRequest;
use App\Http\Requests\UpdatePaymentTermMasterRequest;
use App\Models\LanguageMark;
use App\Models\PayTerm;

class PaymentTermMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master = PaymentTermMaster::all();
        return view('dashboard.mis.settings.paymentMaster.index', [
            'master' => $master
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $language = LanguageMark::all();
        $payterm = PayTerm::all();
        $master = PaymentTermMaster::all();
        return view('dashboard.mis.settings.paymentMaster.create', [
            'master' => $master,
            'pays' => $payterm,
            'language' => $language
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentTermMasterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentTermMasterRequest $request)
    {
        $validated = $request->validated();

        PaymentTermMaster::create($validated);
        return redirect('/dashboard/mis/settings/paymentmaster')->with('success', 'Payment Master Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentTermMaster  $paymentTermMaster
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $language = LanguageMark::all();
        $payterm = PayTerm::all();
        $master = PaymentTermMaster::findOrFail($id);
        return view('dashboard.mis.settings.paymentMaster.show', [
            'master' => $master,
            'pays' => $payterm,
            'language' => $language
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentTermMaster  $paymentTermMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = LanguageMark::all();
        $payterm = PayTerm::all();
        $master = PaymentTermMaster::findOrFail($id);
        return view('dashboard.mis.settings.paymentMaster.edit', [
            'master' => $master,
            'pays' => $payterm,
            'language' => $language
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentTermMasterRequest  $request
     * @param  \App\Models\PaymentTermMaster  $paymentTermMaster
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentTermMasterRequest $request, PaymentTermMaster $paymentmaster)
    {
        $validated = $request->validated();

        PaymentTermMaster::where('id', $paymentmaster->id)->update($validated);
        return redirect('/dashboard/mis/settings/paymentmaster')->with('success', 'Payment Master Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentTermMaster  $paymentTermMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PaymentTermMaster::destroy($id);
        return redirect('/dashboard/mis/settings/paymentmaster')->with('success', 'Payment Master Baru Telah Di Hapus!');
    }
}
