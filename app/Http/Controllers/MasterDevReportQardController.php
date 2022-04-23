<?php

namespace App\Http\Controllers;

use App\Http\Requests\MasterDevReportQardEditRequest;
use App\Http\Requests\MasterQardCreateRequest;
use App\Models\MasterDevReportQard;
use App\Models\Ws03;
use App\Models\Ws05;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterDevReportQardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.qard.index', [
            'master' => MasterDevReportQard::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.qard.create', [
            'master' => MasterDevReportQard::where('user_id', Auth::user()->id)->get(),
            'ws03' => Ws03::all(),
            'ws05' => Ws05::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasterQardCreateRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        // dd($validated);
        MasterDevReportQard::create($validated);
        return redirect('/dashboard/qard')->with('success', 'New Form Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterDevReportQard  $masterDevReportQard
     * @return \Illuminate\Http\Response
     */
    public function show(MasterDevReportQard $masterDevReportQard, $id)
    {
        $masterDevReportQard = MasterDevReportQard::find($id);
        return view('dashboard.qard.show', [
            'master' => $masterDevReportQard
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterDevReportQard  $masterDevReportQard
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qard = MasterDevReportQard::findOrFail($id);
        return view('dashboard.qard.edit', [
            'qard' => $qard
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterDevReportQard  $masterDevReportQard
     * @return \Illuminate\Http\Response
     */
    public function update(MasterDevReportQardEditRequest $request, MasterDevReportQard $qard)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        MasterDevReportQard::where('id', $qard->id)->update($validated);
        return redirect('/dashboard/qard')->with('success', 'New Form Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterDevReportQard  $masterDevReportQard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterDevReportQard::destroy($id);

        return redirect('/dashboard/qard')->with('success', 'New Form Has Been Deleted!');
    }
}
