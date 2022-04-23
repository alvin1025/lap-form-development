<?php

namespace App\Http\Controllers;

use App\Http\Requests\BciToQardCreate;
use App\Http\Requests\BciToQardEdit;
use App\Models\Bci;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BciToQard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.bci.index', [
            'bci' => Bci::where('user_id', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.bci.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BciToQardCreate $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['note'] = nl2br(e($request->subject));

        Bci::create($validated);

        return redirect('/dashboard/bci')->with('success', 'New Form Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bci = Bci::findOrFail($id);
        return view('dashboard.bci.show', [
            'bci' => $bci
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bci =  Bci::findOrFail($id);
        return view('dashboard.bci.edit', [
            'bci' => $bci
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BciToQardEdit $request, Bci $bci)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['note'] = nl2br(e($request->subject));
        // dd($validated);
        Bci::where('id', $bci->id)->update($validated);
        return redirect('/dashboard/bci')->with('success', 'New Form Has Been Added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
