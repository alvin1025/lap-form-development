<?php

namespace App\Http\Controllers;

use App\Models\UndanganHubunganKerja;
use App\Http\Requests\StoreUndanganHubunganKerjaRequest;
use App\Http\Requests\UpdateUndanganHubunganKerjaRequest;
use App\Models\User;

class UndanganHubunganKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hr.undanganKerja.index', [
            'undangan' => UndanganHubunganKerja::all()
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
        $undangan = UndanganHubunganKerja::all();
        return view('dashboard.hr.undanganKerja.create', [
            'user' => $user,
            'undangan' => $undangan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUndanganHubunganKerjaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUndanganHubunganKerjaRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        UndanganHubunganKerja::create($validated);

        return redirect('/dashboard/hr/pemanggilan
        ')->with('success', 'Form Hubungan Kerja Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UndanganHubunganKerja  $undanganHubunganKerja
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $undangan = UndanganHubunganKerja::findOrFail($id);
        return view('dashboard.hr.undanganKerja.show', [
            'undangan' => $undangan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UndanganHubunganKerja  $undanganHubunganKerja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $undangan = UndanganHubunganKerja::findOrFail($id);
        $user = User::all();
        return view('dashboard.hr.undanganKerja.edit', [
            'undangan' => $undangan,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUndanganHubunganKerjaRequest  $request
     * @param  \App\Models\UndanganHubunganKerja  $undanganHubunganKerja
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUndanganHubunganKerjaRequest $request, UndanganHubunganKerja $undangan)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        UndanganHubunganKerja::where('id', $undangan->id)->update($validated);
        return redirect('/dashboard/hr/undangan
        ')->with('success', 'Form Hubungan Kerja Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UndanganHubunganKerja  $undanganHubunganKerja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UndanganHubunganKerja::destroy($id);
        return redirect('/dashboard/hr/undangan
        ')->with('success', 'Form Hubungan Kerja Baru Telah Di Hapus!');
    }
}
