<?php

namespace App\Http\Controllers;

use App\Models\UserGroup;
use App\Http\Requests\StoreUserGroupRequest;
use App\Http\Requests\UpdateUserGroupRequest;
use App\Imports\UserGroupImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userGroup = UserGroup::all();
        return view('dashboard.mis.settings.userGroup.index', [
            'userGroup' => $userGroup
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userGroup = UserGroup::all();
        return view('dashboard.mis.settings.userGroup.create', [
            'userGroup' => $userGroup
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserGroupRequest $request)
    {
        $validated = $request->validated();
        UserGroup::create($validated);
        return redirect('/dashboard/mis/settings/userGroup')->with('success', 'User Group Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userGroup = UserGroup::findOrFail($id);
        return view('dashboard.mis.settings.userGroup.show', [
            'userGroup' => $userGroup
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userGroup = UserGroup::findOrFail($id);
        return view('dashboard.mis.settings.userGroup.edit', [
            'userGroup' => $userGroup
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserGroupRequest  $request
     * @param  \App\Models\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserGroupRequest $request, UserGroup $userGroup)
    {
        $validated = $request->validated();
        UserGroup::where('id', $userGroup->id)->update($validated);
        return redirect('/dashboard/mis/settings/userGroup')->with('success', 'User Group Telah Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserGroup::destroy($id);
        return redirect('/dashboard/mis/settings/userGroup')->with('success', 'User Group Telah Di Delete!');
    }

    public function importUserGroup(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('UserGroupData', $namafile);


        Excel::import(new UserGroupImport, \public_path('/UserGroupData/' . $namafile));

        return redirect('/dashboard/mis/settings/userGroup')->with('success', 'User Group Data Baru Telah Di Tambahkan!');
    }
}
