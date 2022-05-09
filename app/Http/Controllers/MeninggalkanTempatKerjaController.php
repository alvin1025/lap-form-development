<?php

namespace App\Http\Controllers;

use App\Models\MeninggalkanTempatKerja;
use App\Http\Requests\StoreMeninggalkanTempatKerjaRequest;
use App\Http\Requests\UpdateMeninggalkanTempatKerjaRequest;
use App\Models\User;

class MeninggalkanTempatKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meninggalkan = MeninggalkanTempatKerja::all();
        return view('dashboard.hr.meninggalkanTempat.index', [
            'meninggalkan' => $meninggalkan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meninggalkan = MeninggalkanTempatKerja::all();
        $user = User::all();
        return view('dashboard.hr.meninggalkanTempat.create', [
            'meninggalkan' => $meninggalkan,
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMeninggalkanTempatKerjaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeninggalkanTempatKerjaRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        MeninggalkanTempatKerja::create($validated);

        return redirect('/dashboard/hr/meninggalkan')->with('success', 'Form Permohonan Meninggalkan Tempat Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MeninggalkanTempatKerja  $meninggalkanTempatKerja
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meninggalkan = MeninggalkanTempatKerja::findOrFail($id);
        return view('dashboard.hr.meninggalkanTempat.show', [
            'meninggalkan' => $meninggalkan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MeninggalkanTempatKerja  $meninggalkanTempatKerja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $meninggalkan = MeninggalkanTempatKerja::findOrFail($id);
        return view('dashboard.hr.meninggalkanTempat.edit', [
            'user' => $user,
            'meninggalkan' => $meninggalkan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeninggalkanTempatKerjaRequest  $request
     * @param  \App\Models\MeninggalkanTempatKerja  $meninggalkanTempatKerja
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeninggalkanTempatKerjaRequest $request, MeninggalkanTempatKerja $meninggalkan)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        MeninggalkanTempatKerja::where('id', $meninggalkan->id)->update($validated);
        return redirect('/dashboard/hr/meninggalkan')->with('success', 'Form Permohonan Meninggalkan Tempat Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MeninggalkanTempatKerja  $meninggalkanTempatKerja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MeninggalkanTempatKerja::destroy($id);
        return redirect('/dashboard/hr/meninggalkan')->with('success', 'Form Permohonan Meninggalkan Tempat Telah Di Hapus!');
    }
}
