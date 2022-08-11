<?php

namespace App\Http\Controllers;

use App\Models\KeyAcc;
use App\Http\Requests\StoreKeyAccRequest;
use App\Http\Requests\UpdateKeyAccRequest;
use App\Models\Departement;
use App\Models\MenueGroup;
use App\Models\UserGroup;

class KeyAccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyacc = KeyAcc::all();
        return view('dashboard.mis.settings.keyacc.index', [
            'keyacc' => $keyacc
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = UserGroup::all();
        $menu = MenueGroup::all();
        $dept = Departement::all();
        $keyacc = KeyAcc::all();
        return view('dashboard.mis.settings.keyacc.create', [
            'keyacc' => $keyacc,
            'users' => $user,
            'menus' => $menu,
            'dept' => $dept
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKeyAccRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeyAccRequest $request)
    {
        $validated = $request->validated();

        KeyAcc::create($validated);
        return redirect('/dashboard/mis/settings/keyacc')->with('success', 'Form KeyAcc Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KeyAcc  $keyAcc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = UserGroup::all();
        $menu = MenueGroup::all();
        $dept = Departement::all();
        $keyacc = KeyAcc::findOrFail($id);
        return view('dashboard.mis.settings.keyacc.show', [
            'keyacc' => $keyacc,
            'users' => $user,
            'menus' => $menu,
            'dept' => $dept
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KeyAcc  $keyAcc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserGroup::all();
        $menu = MenueGroup::all();
        $dept = Departement::all();
        $keyacc = KeyAcc::findOrFail($id);
        return view('dashboard.mis.settings.keyacc.edit', [
            'keyacc' => $keyacc,
            'users' => $user,
            'menus' => $menu,
            'dept' => $dept
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeyAccRequest  $request
     * @param  \App\Models\KeyAcc  $keyAcc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeyAccRequest $request, KeyAcc $keyacc)
    {
        $validated = $request->validated();

        KeyAcc::where('id', $keyacc->id)->update($validated);
        return redirect('/dashboard/mis/settings/keyacc')->with('success', 'Form KeyAcc Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KeyAcc  $keyAcc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KeyAcc::destroy($id);
        return redirect('/dashboard/mis/settings/keyacc')->with('success', 'Form KeyAcc Baru Telah Di Hapus!');
    }
}
