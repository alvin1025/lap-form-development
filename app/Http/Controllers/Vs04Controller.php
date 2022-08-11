<?php

namespace App\Http\Controllers;

use App\Models\Vs04;
use App\Http\Requests\StoreVs04Request;
use App\Http\Requests\UpdateVs04Request;
use App\Imports\VS04import;
use App\Models\AgentMaster;
use App\Models\Kd03;
use App\Models\QuantityUnit;
use App\Models\SalesGrade;
use App\Models\Sd;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class Vs04Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vs04 = Vs04::all();
        return view('dashboard.salesFolder.vs04.index', [
            'vs04' => $vs04
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agent = AgentMaster::all();
        $cust = Kd03::all();
        $sd = Sd::all();
        $quantity = QuantityUnit::all();
        $quality = SalesGrade::all();
        $vs04 = Vs04::all();
        return view('dashboard.salesFolder.vs04.create', [
            'vs04' => $vs04,
            'custs' => $cust,
            'agents' => $agent,
            'sds' => $sd,
            'quality' => $quality,
            'quantity' => $quantity,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVs04Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVs04Request $request)
    {
        $validated = $request->validated();
        Vs04::create($validated);
        return redirect('/dashboard/mis/settings/vs04')->with('success', 'Form VS04 Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vs04  $vs04
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = AgentMaster::all();
        $cust = Kd03::all();
        $sd = Sd::all();
        $quantity = QuantityUnit::all();
        $quality = SalesGrade::all();
        $vs04 = Vs04::findOrFail($id);
        return view('dashboard.salesFolder.vs04.show', [
            'vs04' => $vs04,
            'custs' => $cust,
            'agents' => $agent,
            'sds' => $sd,
            'quality' => $quality,
            'quantity' => $quantity,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vs04  $vs04
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = AgentMaster::all();
        $cust = Kd03::all();
        $sd = Sd::all();
        $quantity = QuantityUnit::all();
        $quality = SalesGrade::all();
        $vs04 = Vs04::findOrFail($id);
        return view('dashboard.salesFolder.vs04.edit', [
            'vs04' => $vs04,
            'custs' => $cust,
            'agents' => $agent,
            'sds' => $sd,
            'quality' => $quality,
            'quantity' => $quantity,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVs04Request  $request
     * @param  \App\Models\Vs04  $vs04
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVs04Request $request, Vs04 $vs04)
    {
        $validated = $request->validated();
        Vs04::where('id', $vs04->id)->update($validated);
        return redirect('/dashboard/mis/settings/vs04')->with('success', 'Form VS04 Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vs04  $vs04
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vs04::destroy($id);
        return redirect('/dashboard/mis/settings/vs04')->with('success', 'Form VS04 Baru Telah Di Hapus!');
    }

    public function importVs04(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('VS04Data', $namafile);


        Excel::import(new VS04import, \public_path('/VS04Data/' . $namafile));

        return redirect('/dashboard/mis/settings/vs04')->with('success', 'VS04 Baru Telah Di Tambahkan!');
    }
}
