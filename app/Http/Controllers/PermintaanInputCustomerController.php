<?php

namespace App\Http\Controllers;

use App\Models\PermintaanInputCustomer;
use App\Http\Requests\StorePermintaanInputCustomerRequest;
use App\Http\Requests\UpdatePermintaanInputCustomerRequest;
use App\Models\Assignment;
use App\Models\BizType;
use App\Models\Classes;
use App\Models\CreditLimit;
use App\Models\Customer;
use App\Models\Cutting;
use App\Models\DelCon;
use App\Models\JenisBisnis;
use App\Models\KepemilikanKantor;
use App\Models\KodeCountry;
use App\Models\Kurs;
use App\Models\Negara;
use App\Models\OrientasiMarket;
use App\Models\Packing;
use App\Models\PayTerm;
use App\Models\Satuan;
use App\Models\Sd;
use App\Models\StdSample;
use App\Models\Tax;
use App\Models\TipePerusahaan;
use App\Models\Tittle;
use App\Models\User;
use Carbon\Carbon;

class PermintaanInputCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $customer = PermintaanInputCustomer::all();
        // $title = Tittle::all();
        // $class = Classes::all();
        // $negara = Negara::all();
        // $kodeCountry = KodeCountry::all();
        // $sd = Sd::all();
        // $bizType = BizType::all();
        // $tax = Tax::all();
        // $assignment = Assignment::all();
        // $delCon = DelCon::all();
        // $kurs = Kurs::all();
        // $satuan = Satuan::all();
        // $packing = Packing::all();
        // $cutting = Cutting::all();
        // $stdtSample = StdSample::all();
        // $credit = CreditLimit::all();
        // $pays = PayTerm::all();

        return view('dashboard.salesFolder.InputCustomer.index', [
            'user' => $user,
            'customer' => $customer,
            // 'titles' => $title,
            // 'classes' => $class,
            // 'negaras' => $negara,
            // 'kodeCountries' => $kodeCountry,
            // 'sds' => $sd,
            // 'bizTypes' => $bizType,
            // 'taxs' => $tax,
            // 'assignments' => $assignment,
            // 'delCons' => $delCon,
            // 'kurses' => $kurs,
            // 'satuans' => $satuan,
            // 'packings' => $packing,
            // 'cuttings' => $cutting,
            // 'stdSamples' => $stdtSample,
            // 'credits' => $credit,
            // 'pays' => $pays,
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
        $customer = PermintaanInputCustomer::all();
        $title = Tittle::all();
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $sd = Sd::all();
        $bizType = BizType::all();
        $tax = Tax::all();
        $assignment = Assignment::all();
        $delCon = DelCon::all();
        $kurs = Kurs::all();
        $satuan = Satuan::all();
        $packing = Packing::all();
        $cutting = Cutting::all();
        $stdtSample = StdSample::all();
        $credit = CreditLimit::all();
        $pays = PayTerm::all();
        $orientasi = OrientasiMarket::all();
        $tipe = TipePerusahaan::all();
        $jenis = JenisBisnis::all();
        $milik = KepemilikanKantor::all();
        return view('dashboard.salesFolder.InputCustomer.create', [
            'user' => $user,
            'customers' => $customer,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'sds' => $sd,
            'bizTypes' => $bizType,
            'taxs' => $tax,
            'assignments' => $assignment,
            'delCons' => $delCon,
            'kurses' => $kurs,
            'satuans' => $satuan,
            'packings' => $packing,
            'cuttings' => $cutting,
            'stdSamples' => $stdtSample,
            'credits' => $credit,
            'pays' => $pays,
            'orientasis' => $orientasi,
            'tipes' => $tipe,
            'jenises' => $jenis,
            'kepemilikan' => $milik
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermintaanInputCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermintaanInputCustomerRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alamat'] = nl2br(e($request->alamat));
        $validated['kd5_alamat1'] = nl2br(e($request->kd5_alamat1));
        $validated['kd5_alamat2'] = nl2br(e($request->kd5_alamat2));
        $validated['kd5_alamat3'] = nl2br(e($request->kd5_alamat3));

        PermintaanInputCustomer::create($validated);
        return redirect('/dashboard/salesFolder/customer')->with('success', 'Daftar Kebutuhan Material Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermintaanInputCustomer  $permintaanInputCustomer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all();
        $title = Tittle::all();
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $sd = Sd::all();
        $bizType = BizType::all();
        $tax = Tax::all();
        $assignment = Assignment::all();
        $delCon = DelCon::all();
        $kurs = Kurs::all();
        $satuan = Satuan::all();
        $packing = Packing::all();
        $cutting = Cutting::all();
        $stdtSample = StdSample::all();
        $credit = CreditLimit::all();
        $pays = PayTerm::all();
        $orientasi = OrientasiMarket::all();
        $tipe = TipePerusahaan::all();
        $jenis = JenisBisnis::all();
        $milik = KepemilikanKantor::all();
        $customer = PermintaanInputCustomer::findOrFail($id);
        return view('dashboard.salesFolder.InputCustomer.show', [
            'user' => $user,
            'customers' => $customer,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'sds' => $sd,
            'bizTypes' => $bizType,
            'taxs' => $tax,
            'assignments' => $assignment,
            'delCons' => $delCon,
            'kurses' => $kurs,
            'satuans' => $satuan,
            'packings' => $packing,
            'cuttings' => $cutting,
            'stdSamples' => $stdtSample,
            'credits' => $credit,
            'pays' => $pays,
            'orientasis' => $orientasi,
            'tipes' => $tipe,
            'jenises' => $jenis,
            'kepemilikan' => $milik
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermintaanInputCustomer  $permintaanInputCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $title = Tittle::all();
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $sd = Sd::all();
        $bizType = BizType::all();
        $tax = Tax::all();
        $assignment = Assignment::all();
        $delCon = DelCon::all();
        $kurs = Kurs::all();
        $satuan = Satuan::all();
        $packing = Packing::all();
        $cutting = Cutting::all();
        $stdtSample = StdSample::all();
        $credit = CreditLimit::all();
        $pays = PayTerm::all();
        $orientasi = OrientasiMarket::all();
        $tipe = TipePerusahaan::all();
        $jenis = JenisBisnis::all();
        $milik = KepemilikanKantor::all();
        $customer = PermintaanInputCustomer::findOrFail($id);
        return view('dashboard.salesFolder.InputCustomer.edit', [
            'user' => $user,
            'customer' => $customer,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'sds' => $sd,
            'bizTypes' => $bizType,
            'taxs' => $tax,
            'assignments' => $assignment,
            'delCons' => $delCon,
            'kurses' => $kurs,
            'satuans' => $satuan,
            'packings' => $packing,
            'cuttings' => $cutting,
            'stdSamples' => $stdtSample,
            'credits' => $credit,
            'pays' => $pays,
            'orientasis' => $orientasi,
            'tipes' => $tipe,
            'jenises' => $jenis,
            'kepemilikan' => $milik
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermintaanInputCustomerRequest  $request
     * @param  \App\Models\PermintaanInputCustomer  $permintaanInputCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermintaanInputCustomerRequest $request, PermintaanInputCustomer $customer)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alamat'] = nl2br(e($request->alamat));
        $validated['kd5_alamat1'] = nl2br(e($request->kd5_alamat1));
        $validated['kd5_alamat2'] = nl2br(e($request->kd5_alamat2));
        $validated['kd5_alamat3'] = nl2br(e($request->kd5_alamat3));

        PermintaanInputCustomer::where('id', $customer->id)->update($validated);
        return redirect('/dashboard/salesFolder/customer')->with('success', 'Daftar Kebutuhan Material Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermintaanInputCustomer  $permintaanInputCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PermintaanInputCustomer::destroy($id);
        return redirect('/dashboard/salesFolder/customer')->with('success', 'Daftar Kebutuhan Material Baru Telah Di Update!');
    }
}
