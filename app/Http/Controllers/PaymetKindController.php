<?php

namespace App\Http\Controllers;

use App\Models\PaymetKind;
use App\Http\Requests\StorePaymetKindRequest;
use App\Http\Requests\UpdatePaymetKindRequest;
use App\Imports\PaymentKindImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PaymetKindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paykind = PaymetKind::all();
        return view('dashboard.mis.settings.payKind.index', [
            'payment' => $paykind
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paykind = PaymetKind::all();
        return view('dashboard.mis.settings.payKind.create', [
            'payment' => $paykind
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymetKindRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymetKindRequest $request)
    {
        $validated = $request->validated();

        PaymetKind::create($validated);
        return redirect('/dashboard/mis/settings/paykind')->with('success', 'Payment Kind Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymetKind  $paymetKind
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paykind = PaymetKind::findOrFail($id);
        return view('dashboard.mis.settings.payKind.show', [
            'payment' => $paykind
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymetKind  $paymetKind
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paykind = PaymetKind::findOrFail($id);
        return view('dashboard.mis.settings.payKind.edit', [
            'payment' => $paykind
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymetKindRequest  $request
     * @param  \App\Models\PaymetKind  $paymetKind
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymetKindRequest $request, PaymetKind $paykind)
    {
        $validated = $request->validated();
        // dd($request);
        PaymetKind::where('id', $paykind->id)->update($validated);
        return redirect('/dashboard/mis/settings/paykind')->with('success', 'Payment Kind Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymetKind  $paymetKind
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PaymetKind::destroy($id);
        return redirect('/dashboard/mis/settings/paykind')->with('success', 'Payment Kind Baru Telah Di Hapus!');
    }

    public function importPaymentKind(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('PaymentKindData', $namafile);


        Excel::import(new PaymentKindImport, \public_path('/PaymentKindData/' . $namafile));

        return redirect('/dashboard/mis/settings/paykind')->with('success', 'PaymentKind Data Baru Telah Di Tambahkan!');
    }
}
