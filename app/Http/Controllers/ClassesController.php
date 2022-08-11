<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Http\Requests\StoreClassesRequest;
use App\Http\Requests\UpdateClassesRequest;
use App\Imports\ClassImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = Classes::all();
        return view('dashboard.mis.settings.class.index', [
            'class' => $class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = Classes::all();
        return view('dashboard.mis.settings.class.create', [
            'class' => $class
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClassesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassesRequest $request)
    {
        $validated = $request->validated();

        Classes::create($validated);
        return redirect('/dashboard/mis/settings/classes')->with('success', 'Class Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classes::findOrFail($id);
        return view('dashboard.mis.settings.class.show', [
            'class' => $class
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Classes::findOrFail($id);
        return view('dashboard.mis.settings.class.edit', [
            'class' => $class
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassesRequest  $request
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassesRequest $request, Classes $class)
    {
        $validated = $request->validated();

        Classes::where('id', $class->id)->update($validated);
        return redirect('/dashboard/mis/settings/classes')->with('success', 'Class Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classes::destroy($id);
        return redirect('/dashboard/mis/settings/classes')->with('success', 'Class Baru Telah Di Hapus!');
    }

    public function importClass(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('ClassData', $namafile);


        Excel::import(new ClassImport, \public_path('/ClassData/' . $namafile));

        return redirect('/dashboard/mis/settings/classes')->with('success', 'Class Baru Telah Di Tambahkan!');
    }
}
