<?php

namespace App\Http\Controllers;

use App\Models\BizType;
use App\Http\Requests\StoreBizTypeRequest;
use App\Http\Requests\UpdateBizTypeRequest;
use App\Imports\BizImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BizTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bizType = BizType::all();
        return view('dashboard.mis.settings.bizType.index', [
            'bizType' => $bizType
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bizType = BizType::all();
        return view('dashboard.mis.settings.bizType.create', [
            'bizType' => $bizType
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBizTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBizTypeRequest $request)
    {
        $validated = $request->validated();

        BizType::create($validated);
        return redirect('/dashboard/mis/settings/bizType')->with('success', 'Biz Type Baru Telah Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BizType  $bizType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bizType = BizType::findOrFail($id);
        return view('dashboard.mis.settings.bizType.show', [
            'bizType' => $bizType
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BizType  $bizType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bizType = BizType::findOrFail($id);
        return view('dashboard.mis.settings.bizType.edit', [
            'bizType' => $bizType
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBizTypeRequest  $request
     * @param  \App\Models\BizType  $bizType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBizTypeRequest $request, BizType $bizType)
    {
        $validated = $request->validated();

        BizType::where('id', $bizType->id)->update($validated);
        return redirect('/dashboard/mis/settings/bizType')->with('success', 'Biz Type Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BizType  $bizType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BizType::destroy($id);
        return redirect('/dashboard/mis/settings/bizType')->with('success', 'Biz Type Baru Telah Di Update!');
    }

    public function importexcelBiz(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('BizTypeData', $namafile);


        Excel::import(new BizImport, \public_path('/BizTypeData/' . $namafile));

        return redirect('/dashboard/mis/settings/bizType')->with('success', 'Biz Type Baru Telah Di Tambahkan!');
    }
}
