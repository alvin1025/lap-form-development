<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Http\Requests\StoreAssignmentRequest;
use App\Http\Requests\UpdateAssignmentRequest;
use App\Imports\AssignmentImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignment = Assignment::all();
        return view('dashboard.mis.settings.assigment.index', [
            'assignment' => $assignment
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assignment = Assignment::all();
        return view('dashboard.mis.settings.assigment.create', [
            'assignment' => $assignment
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssignmentRequest $request)
    {
        $validated = $request->validated();

        Assignment::create($validated);
        return redirect('/dashboard/mis/settings/assignment')->with('success', 'Form Assignment Baru Telah Dibuat!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignment = Assignment::findOrFail($id);
        return view('dashboard.mis.settings.assigment.show', [
            'assignment' => $assignment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        return view('dashboard.mis.settings.assigment.edit', [
            'assignment' => $assignment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssignmentRequest  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssignmentRequest $request, Assignment $assignment)
    {
        $validated = $request->validated();

        Assignment::where('id', $assignment->id)->update($validated);
        return redirect('/dashboard/mis/settings/assignment')->with('success', 'Form Assignment Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assignment::destroy($id);
        return redirect('/dashboard/mis/settings/assignment')->with('success', 'Form Assignment Baru Telah Di Hapus!');
    }

    public function importexcelAssignment(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('AssignmentData', $namafile);


        Excel::import(new AssignmentImport, \public_path('/AssignmentData/' . $namafile));

        return redirect('/dashboard/mis/settings/assignment')->with('success', 'Assignment Baru Telah Di Tambahkan!');
    }
}
