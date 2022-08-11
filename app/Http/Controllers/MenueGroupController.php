<?php

namespace App\Http\Controllers;

use App\Models\MenueGroup;
use App\Http\Requests\StoreMenueGroupRequest;
use App\Http\Requests\UpdateMenueGroupRequest;
use App\Imports\MenueGroupImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MenueGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menueGroup = MenueGroup::all();
        return view('dashboard.mis.settings.menueGroup.index', [
            'menueGroup' => $menueGroup
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menueGroup = MenueGroup::all();
        return view('dashboard.mis.settings.menueGroup.create', [
            'menueGroup' => $menueGroup
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMenueGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenueGroupRequest $request)
    {
        $validated = $request->validated();
        MenueGroup::create($validated);

        return redirect('/dashboard/mis/settings/MenueGroup')->with('success', 'Menue Group Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenueGroup  $menueGroup
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menueGroup = MenueGroup::findOrFail($id);
        return view('dashboard.mis.settings.menueGroup.show', [
            'menueGroup' => $menueGroup
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenueGroup  $menueGroup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menueGroup = MenueGroup::findOrFail($id);
        return view('dashboard.mis.settings.menueGroup.edit', [
            'menueGroup' => $menueGroup
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenueGroupRequest  $request
     * @param  \App\Models\MenueGroup  $menueGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenueGroupRequest $request, MenueGroup $MenueGroup)
    {
        $validated = $request->validated();
        MenueGroup::where('id', $MenueGroup->id)->update($validated);

        return redirect('/dashboard/mis/settings/MenueGroup')->with('success', 'Menue Group Telah Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenueGroup  $menueGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MenueGroup::destroy($id);
        return redirect('/dashboard/mis/settings/MenueGroup')->with('success', 'Menue Group Telah Hapus!');
    }

    public function importMenueGroup(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('MenueGroupData', $namafile);


        Excel::import(new MenueGroupImport, \public_path('/MenueGroupData/' . $namafile));

        return redirect('/dashboard/mis/settings/MenueGroup')->with('success', 'Menue Group Data Baru Telah Di Tambahkan!');
    }
}
