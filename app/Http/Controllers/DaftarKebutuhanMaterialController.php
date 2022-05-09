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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDaftarKebutuhanMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDaftarKebutuhanMaterialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarKebutuhanMaterial  $daftarKebutuhanMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarKebutuhanMaterial $daftarKebutuhanMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarKebutuhanMaterial  $daftarKebutuhanMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarKebutuhanMaterial $daftarKebutuhanMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDaftarKebutuhanMaterialRequest  $request
     * @param  \App\Models\DaftarKebutuhanMaterial  $daftarKebutuhanMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDaftarKebutuhanMaterialRequest $request, DaftarKebutuhanMaterial $daftarKebutuhanMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarKebutuhanMaterial  $daftarKebutuhanMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarKebutuhanMaterial $daftarKebutuhanMaterial)
    {
        //
    }
}
