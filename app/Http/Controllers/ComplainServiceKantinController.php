<?php

namespace App\Http\Controllers;

use App\Models\ComplainServiceKantin;
use App\Http\Requests\StoreComplainServiceKantinRequest;
use App\Http\Requests\UpdateComplainServiceKantinRequest;
use App\Models\User;

class ComplainServiceKantinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $complain = ComplainServiceKantin::all();
        return view('dashboard.ga.complainKantin.index', [
            'user' => $user,
            'complain' => $complain
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
        $complain = ComplainServiceKantin::all();
        return view('dashboard.ga.complainKantin.create', [
            'user' => $user,
            'complain' => $complain
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComplainServiceKantinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComplainServiceKantinRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['deskripsi'] = nl2br(e($request->deskripsi));

        ComplainServiceKantin::create($validated);
        return redirect('/dashboard/ga/complain')->with('success', 'Form Complain Service Kantin Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComplainServiceKantin  $complainServiceKantin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complain = ComplainServiceKantin::findOrFail($id);
        $user = User::all();
        return view('dashboard.ga.complainKantin.show', [
            'user' => $user,
            'complain' => $complain
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComplainServiceKantin  $complainServiceKantin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $complain = ComplainServiceKantin::findOrFail($id);
        return view('dashboard.ga.complainKantin.edit', [
            'user' => $user,
            'complain' => $complain

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComplainServiceKantinRequest  $request
     * @param  \App\Models\ComplainServiceKantin  $complainServiceKantin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComplainServiceKantinRequest $request, ComplainServiceKantin $complain)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['deskripsi'] = nl2br(e($request->deskripsi));

        ComplainServiceKantin::where('id', $complain->id)->update($validated);
        return redirect('/dashboard/ga/complain')->with('success', 'Form Complain Service Kantin Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComplainServiceKantin  $complainServiceKantin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ComplainServiceKantin::destroy($id);
        return redirect('/dashboard/ga/complain')->with('success', 'Form Complain Service Kantin Telah Di Hapus!');
    }
}
