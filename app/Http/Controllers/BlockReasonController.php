<?php

namespace App\Http\Controllers;

use App\Models\BlockReason;
use App\Http\Requests\StoreBlockReasonRequest;
use App\Http\Requests\UpdateBlockReasonRequest;
use App\Imports\BlockReasonImport;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Maatwebsite\Excel\Facades\Excel;

class BlockReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $block = BlockReason::all();
        return view('dashboard.mis.settings.blockReason.index', [
            'block' => $block
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $block = BlockReason::all();
        return view('dashboard.mis.settings.blockReason.create', [
            'block' => $block
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlockReasonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlockReasonRequest $request)
    {
        $validated = $request->validated();

        BlockReason::create($validated);
        return redirect('/dashboard/mis/settings/BReason')->with('success', 'Block Reason Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlockReason  $blockReason
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $block = BlockReason::findOrFail($id);
        return view('dashboard.mis.settings.blockReason.show', [
            'block' => $block
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlockReason  $blockReason
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $block = BlockReason::findOrFail($id);
        return view('dashboard.mis.settings.blockReason.edit', [
            'block' => $block
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlockReasonRequest  $request
     * @param  \App\Models\BlockReason  $blockReason
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlockReasonRequest $request, BlockReason $BReason)
    {
        $validated = $request->validated();
        // dd($validated);
        BlockReason::where('id', $BReason->id)->update($validated);
        return redirect('/dashboard/mis/settings/BReason')->with('success', 'Block Reason Telah Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlockReason  $blockReason
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlockReason::destroy($id);
        return redirect('/dashboard/mis/settings/BReason')->with('success', 'Block Reason Telah Hapus!');
    }

    public function importBlockReason(HttpRequest $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('BlockReasonData', $namafile);


        Excel::import(new BlockReasonImport, \public_path('/BlockReasonData/' . $namafile));

        return redirect('/dashboard/mis/settings/BReason')->with('success', 'Block Reason Telah Di Tambahkan!');
    }
}
