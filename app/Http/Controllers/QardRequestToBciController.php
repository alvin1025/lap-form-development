<?php

namespace App\Http\Controllers;

use App\Models\QardRequestToBci;
use App\Http\Requests\StoreQardRequestToBciRequest;
use App\Http\Requests\UpdateQardRequestToBciRequest;

class QardRequestToBciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.qardtobci.index', [
            'testBenang' => QardRequestToBci::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.qardtobci.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQardRequestToBciRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQardRequestToBciRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['kepada'] = nl2br(e($request->kepada));
        $validated['dari'] = nl2br(e($request->dari));

        QardRequestToBci::create($validated);

        return redirect('/dashboard/test-benang')->with('success', 'New Form Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QardRequestToBci  $qardRequestToBci
     * @return \Illuminate\Http\Response
     */
    public function show(QardRequestToBci $qardRequestToBci, $id)
    {
        $qardRequestToBci = QardRequestToBci::findOrfail($id);
        return view('dashboard.qardtobci.show', [
            'benang' => $qardRequestToBci
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QardRequestToBci  $qardRequestToBci
     * @return \Illuminate\Http\Response
     */
    public function edit(QardRequestToBci $qardRequestToBci, $id)
    {
        $qardRequestToBci = QardRequestToBci::findOrFail($id);
        return view('dashboard.qardtobci.edit', [
            'benang' => $qardRequestToBci
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQardRequestToBciRequest  $request
     * @param  \App\Models\QardRequestToBci  $qardRequestToBci
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQardRequestToBciRequest $request, QardRequestToBci $test_benang)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['kepada'] = nl2br(e($request->kepada));
        $validated['dari'] = nl2br(e($request->dari));

        // dd($validated);
        QardRequestToBci::where('id', $test_benang->id)->update($validated);
        return redirect('/dashboard/test-benang')->with('success', 'New Form Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QardRequestToBci  $qardRequestToBci
     * @return \Illuminate\Http\Response
     */
    public function destroy(QardRequestToBci $qardRequestToBci)
    {
        //
    }
}
