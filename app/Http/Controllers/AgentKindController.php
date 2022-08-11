<?php

namespace App\Http\Controllers;

use App\Models\AgentKind;
use App\Http\Requests\StoreAgentKindRequest;
use App\Http\Requests\UpdateAgentKindRequest;
use App\Imports\AgentKindImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AgentKindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kind = AgentKind::all();
        return view('dashboard.mis.settings.agentKind.index', [
            'kind' => $kind
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kind = AgentKind::all();
        return view('dashboard.mis.settings.agentKind.create', [
            'kind' => $kind
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAgentKindRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentKindRequest $request)
    {
        $validated = $request->validated();

        AgentKind::create($validated);
        return redirect('/dashboard/mis/settings/agentkind')->with('success', 'Agent Kind Baru Berhasil Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgentKind  $agentKind
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kind = AgentKind::findOrFail($id);
        return view('dashboard.mis.settings.agentKind.show', [
            'kind' => $kind
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgentKind  $agentKind
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kind = AgentKind::findOrFail($id);
        return view('dashboard.mis.settings.agentKind.edit', [
            'kind' => $kind
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgentKindRequest  $request
     * @param  \App\Models\AgentKind  $agentKind
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentKindRequest $request, AgentKind $agentkind)
    {
        $validated = $request->validated();

        AgentKind::where('id', $agentkind->id)($validated);
        return redirect('/dashboard/mis/settings/agentkind')->with('success', 'Agent Kind Baru Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgentKind  $agentKind
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AgentKind::destroy($id);
        return redirect('/dashboard/mis/settings/agentkind')->with('success', 'Agent Kind Baru Berhasil Di Hapus!');
    }

    public function importAgentKind(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('AgentKindData', $namafile);


        Excel::import(new AgentKindImport, \public_path('/AgentKindData/' . $namafile));

        return redirect('/dashboard/mis/settings/agentkind')->with('success', 'Agent Kind Data Baru Telah Di Tambahkan!');
    }
}
