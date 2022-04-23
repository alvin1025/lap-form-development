<?php

namespace App\Http\Controllers;

use App\Models\Ws05;
use App\Http\Requests\Ws05CreateRequest;
use App\Http\Requests\Ws05EditRequest;
use App\Imports\Ws05Import;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class Ws05Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ws05.index', [
            'ws05' => Ws05::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ws05.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWs05Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Ws05CreateRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        Ws05::create($validated);
        return redirect('/dashboard/ws05')->with('success', 'WS05 Data Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ws05  $ws05
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ws05 = Ws05::findOrFail($id);
        return view('dashboard.ws05.show', [
            'ws05' => $ws05
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ws05  $ws05
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ws05 = Ws05::findOrFail($id);
        return view('dashboard.ws05.edit', [
            'ws05' => $ws05
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWs05Request  $request
     * @param  \App\Models\Ws05  $ws05
     * @return \Illuminate\Http\Response
     */
    public function update(Ws05EditRequest $request, Ws05 $ws05)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        // dd($validated);
        Ws05::where('id', $ws05->id)->update($validated);
        return redirect('/dashboard/ws05')->with('success', 'New Data WS03 Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ws05  $ws05
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ws05::destroy($id);
        return redirect('/dashboard/ws05')->with('success', 'Data WS05 Has Been Deleted!');
    }

    public function importws05(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Ws05Data', $namafile);

        Excel::import(new Ws05Import, \public_path('/Ws05Data/' . $namafile));
        return redirect('/dashboard/ws05')->with('success', 'Ws05 Has Been Added!');
    }
}
