<?php

namespace App\Http\Controllers;

use App\Http\Requests\Ws03CreateRequest;
use App\Http\Requests\Ws03EditRequest;
use App\Imports\Ws03Import;
use App\Models\MasterDevReportQard;
use App\Models\Ws03;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class Ws03Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ws03.index', [
            'greige' => Ws03::paginate(100)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.ws03.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Ws03CreateRequest $request)
    {
        $masterqard = MasterDevReportQard::all();


        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $ws03 = Ws03::create($validated);
        $masterqard = new MasterDevReportQard();
        $masterqard->ws03_id = $ws03->id;
        $masterqard->save();

        return redirect('/dashboard/ws03')->with('success', 'New Data WS03 Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ws03  $ws03
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ws03 = Ws03::findOrFail($id);
        return view('dashboard.ws03.show', [
            'ws03' => $ws03
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ws03  $ws03
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ws03 = Ws03::findOrFail($id);
        return view('dashboard.ws03.edit', [
            'ws03' => $ws03
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ws03  $ws03
     * @return \Illuminate\Http\Response
     */
    public function update(Ws03EditRequest $request, Ws03 $ws03)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        Ws03::where('id', $ws03->id)->update($validated);
        return redirect('/dashboard/ws03')->with('success', 'New Data WS03 Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ws03  $ws03
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ws03::destroy($id);
        return redirect('/dashboard/ws03')->with('success', 'Data WS03 Has Been Deleted!');
    }

    public function importws03(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Ws03Data', $namafile);

        Excel::import(new Ws03Import, \public_path('/Ws03Data/' . $namafile));
        return redirect('/dashboard/ws03')->with('success', 'Ws03 Has Added!');
    }
}
