<?php

namespace App\Http\Controllers;

use App\Models\PermohonanPromosi;
use App\Http\Requests\StorePermohonanPromosiRequest;
use App\Http\Requests\UpdatePermohonanPromosiRequest;
use App\Models\User;
use Illuminate\Auth\Access\Gate;

class PermohonanPromosiController extends Controller
{
    public function __construct()
    {
        // $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index', 'store']]);
        // $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('permohonan_promosi_access');
        // abort_if(Gate::denies('permohonan_promosi_access'), code: 403);
        return view('dashboard.hr.permohonanPromosi.index', [
            'promosi' => PermohonanPromosi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hr.permohonanPromosi.create', [
            'user' => User::all(),
            'promosi' => PermohonanPromosi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermohonanPromosiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermohonanPromosiRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alasan_promosi'] = nl2br(e($request->alasan_promosi));

        PermohonanPromosi::create($validated);
        return redirect('/dashboard/hr/promosi')->with('success', 'Form Permohonan Promosi Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermohonanPromosi  $permohonanPromosi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promosi = PermohonanPromosi::findOrFail($id);
        return view('dashboard.hr.permohonanPromosi.show', [
            'promosi' => $promosi

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermohonanPromosi  $permohonanPromosi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $promosi = PermohonanPromosi::findorFail($id);
        return view('dashboard.hr.permohonanPromosi.edit', [
            'promosi' => $promosi,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermohonanPromosiRequest  $request
     * @param  \App\Models\PermohonanPromosi  $permohonanPromosi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermohonanPromosiRequest $request, PermohonanPromosi $promosi)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['alasan_promosi'] = nl2br(e($request->alasan_promosi));

        PermohonanPromosi::where('id', $promosi->id)->update($validated);
        return redirect('/dashboard/hr/promosi')->with('success', 'Form Permohonan Promosi Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermohonanPromosi  $permohonanPromosi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PermohonanPromosi::destroy($id);
        return redirect('/dashboard/hr/promosi')->with('success', 'Form Permohonan Promosi Baru Telah Di Hapus!');
    }
}
