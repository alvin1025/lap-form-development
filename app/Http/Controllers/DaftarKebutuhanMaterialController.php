<?php

namespace App\Http\Controllers;

use App\Models\DaftarKebutuhanMaterial;
use App\Http\Requests\StoreDaftarKebutuhanMaterialRequest;
use App\Http\Requests\UpdateDaftarKebutuhanMaterialRequest;
use App\Models\User;

class DaftarKebutuhanMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebutuhan = DaftarKebutuhanMaterial::all();
        $user = User::all();
        return view('dashboard.ga.kebutuhanMaterial.index', [
            'user' => $user,
            'kebutuhan' => $kebutuhan
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
        $kebutuhan = DaftarKebutuhanMaterial::all();
        return view('dashboard.ga.kebutuhanMaterial.create', [
            'user' => $user,
            'kebutuhan' => $kebutuhan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDaftarKebutuhanMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDaftarKebutuhanMaterialRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        //uraian
        $validated['uraian1'] = nl2br(e($request->uraian1));
        $validated['uraian2'] = nl2br(e($request->uraian2));
        $validated['uraian3'] = nl2br(e($request->uraian3));
        $validated['uraian4'] = nl2br(e($request->uraian4));
        $validated['uraian5'] = nl2br(e($request->uraian5));
        $validated['uraian6'] = nl2br(e($request->uraian6));
        $validated['uraian7'] = nl2br(e($request->uraian7));
        $validated['uraian8'] = nl2br(e($request->uraian8));
        $validated['uraian9'] = nl2br(e($request->uraian9));
        $validated['uraian10'] = nl2br(e($request->uraian10));
        //keterangan
        $validated['keterangan1'] = nl2br(e($request->keterangan1));
        $validated['keterangan2'] = nl2br(e($request->keterangan2));
        $validated['keterangan3'] = nl2br(e($request->keterangan3));
        $validated['keterangan4'] = nl2br(e($request->keterangan4));
        $validated['keterangan5'] = nl2br(e($request->keterangan5));
        $validated['keterangan6'] = nl2br(e($request->keterangan6));
        $validated['keterangan7'] = nl2br(e($request->keterangan7));
        $validated['keterangan8'] = nl2br(e($request->keterangan8));
        $validated['keterangan9'] = nl2br(e($request->keterangan9));
        $validated['keterangan10'] = nl2br(e($request->keterangan10));

        DaftarKebutuhanMaterial::create($validated);
        return redirect('/dashboard/ga/kebutuhan')->with('success', 'Daftar Kebutuhan Material Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarKebutuhanMaterial  $daftarKebutuhanMaterial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all();
        $kebutuhan = DaftarKebutuhanMaterial::findOrFail($id);
        return view('dashboard.ga.kebutuhanMaterial.show', [
            'kebutuhan' => $kebutuhan,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarKebutuhanMaterial  $daftarKebutuhanMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $kebutuhan = DaftarKebutuhanMaterial::findOrFail($id);
        return view('dashboard.ga.kebutuhanMaterial.edit', [
            'user' => $user,
            'kebutuhan' => $kebutuhan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDaftarKebutuhanMaterialRequest  $request
     * @param  \App\Models\DaftarKebutuhanMaterial  $daftarKebutuhanMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDaftarKebutuhanMaterialRequest $request, DaftarKebutuhanMaterial $kebutuhan)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        //uraian
        $validated['uraian1'] = nl2br(e($request->uraian1));
        $validated['uraian2'] = nl2br(e($request->uraian2));
        $validated['uraian3'] = nl2br(e($request->uraian3));
        $validated['uraian4'] = nl2br(e($request->uraian4));
        $validated['uraian5'] = nl2br(e($request->uraian5));
        $validated['uraian6'] = nl2br(e($request->uraian6));
        $validated['uraian7'] = nl2br(e($request->uraian7));
        $validated['uraian8'] = nl2br(e($request->uraian8));
        $validated['uraian9'] = nl2br(e($request->uraian9));
        $validated['uraian10'] = nl2br(e($request->uraian10));
        //keterangan
        $validated['keterangan1'] = nl2br(e($request->keterangan1));
        $validated['keterangan2'] = nl2br(e($request->keterangan2));
        $validated['keterangan3'] = nl2br(e($request->keterangan3));
        $validated['keterangan4'] = nl2br(e($request->keterangan4));
        $validated['keterangan5'] = nl2br(e($request->keterangan5));
        $validated['keterangan6'] = nl2br(e($request->keterangan6));
        $validated['keterangan7'] = nl2br(e($request->keterangan7));
        $validated['keterangan8'] = nl2br(e($request->keterangan8));
        $validated['keterangan9'] = nl2br(e($request->keterangan9));
        $validated['keterangan10'] = nl2br(e($request->keterangan10));

        DaftarKebutuhanMaterial::where('id', $kebutuhan->id)->update($validated);
        return redirect('/dashboard/ga/kebutuhan')->with('success', 'Daftar Kebutuhan Material Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarKebutuhanMaterial  $daftarKebutuhanMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarKebutuhanMaterial::destroy($id);
        return redirect('/dashboard/ga/kebutuhan')->with('success', 'Daftar Kebutuhan Material Baru Telah Di Hapus!');
    }
}
