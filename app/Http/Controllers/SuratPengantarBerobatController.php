<?php

namespace App\Http\Controllers;

use App\Models\SuratPengantarBerobat;
use App\Http\Requests\StoreSuratPengantarBerobatRequest;
use App\Http\Requests\UpdateSuratPengantarBerobatRequest;
use App\Models\User;

use function Ramsey\Uuid\v1;

class SuratPengantarBerobatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $berobat = SuratPengantarBerobat::all();
        return view('dashboard.ga.pengantarBerobat.index', [
            'user' => $user,
            'berobat' => $berobat
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
        $berobat = SuratPengantarBerobat::all();
        return view('dashboard.ga.pengantarBerobat.create', [
            'user' => $user,
            'berobat' => $berobat
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuratPengantarBerobatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratPengantarBerobatRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['kronologi'] = nl2br(e($request->kronologi));
        $validated['keterangan'] = nl2br(e($request->keterangan));

        SuratPengantarBerobat::create($validated);
        return redirect('/dashboard/ga/berobat')->with('success', 'Daftar Kebutuhan Material Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratPengantarBerobat  $suratPengantarBerobat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berobat = SuratPengantarBerobat::findOrFail($id);
        $user = User::all();
        return view('dashboard.ga.pengantarBerobat.show', [
            'user' => $user,
            'berobat' => $berobat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratPengantarBerobat  $suratPengantarBerobat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $berobat = SuratPengantarBerobat::findOrfail($id);
        return view('dashboard.ga.pengantarBerobat.edit', [
            'user' => $user,
            'berobat' => $berobat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratPengantarBerobatRequest  $request
     * @param  \App\Models\SuratPengantarBerobat  $suratPengantarBerobat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratPengantarBerobatRequest $request, SuratPengantarBerobat $berobat)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['kronologi'] = nl2br(e($request->kronologi));
        $validated['keterangan'] = nl2br(e($request->keterangan));

        SuratPengantarBerobat::where('id', $berobat->id)->update($validated);
        return redirect('/dashboard/ga/berobat')->with('success', 'Daftar Kebutuhan Material Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratPengantarBerobat  $suratPengantarBerobat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratPengantarBerobat::destroy($id);
        return redirect('/dashboard/ga/berobat')->with('success', 'Daftar Kebutuhan Material Baru Telah Di Hapus!');
    }
}
