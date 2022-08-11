<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Imports\AgentImport;
use App\Models\AgentKind;
use App\Models\KodeCountry;
use App\Models\Kurs;
use App\Models\LanguageMark;
use App\Models\Negara;
use App\Models\Tittle;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = Agent::all();
        return view('dashboard.mis.settings.agent.index', [
            'agent' => $agent
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = Tittle::all();
        $kurs = Kurs::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $language = LanguageMark::all();
        $agentKind = AgentKind::all();
        $agent = Agent::all();
        return view('dashboard.mis.settings.agent.create', [
            'agent' => $agent,
            'titles' => $title,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kurses' => $kurs,
            'languages' => $language,
            'agentKind' => $agentKind,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAgentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentRequest $request)
    {
        $validated = $request->validated();

        Agent::create($validated);
        return redirect('/dashboard/mis/settings/agent')->with('success', 'Form Assignment Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = Tittle::all();
        $kurs = Kurs::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $language = LanguageMark::all();
        $agentKind = AgentKind::all();
        $agent = Agent::findOrFail($id);
        return view('dashboard.mis.settings.agent.show', [
            'agent' => $agent,
            'titles' => $title,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kurses' => $kurs,
            'languages' => $language,
            'agentKind' => $agentKind,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = Tittle::all();
        $kurs = Kurs::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $language = LanguageMark::all();
        $agentKind = AgentKind::all();
        $agent = Agent::findOrFail($id);
        return view('dashboard.mis.settings.agent.edit', [
            'agent' => $agent,
            'titles' => $title,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kurses' => $kurs,
            'languages' => $language,
            'agentKind' => $agentKind,
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgentRequest  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        $validated = $request->validated();
        // dd($request);
        Agent::where('id', $agent->id)->update($validated);
        return redirect('/dashboard/mis/settings/agent')->with('success', 'Form Assignment Telah Di Update!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agent::destroy($id);
        return redirect('/dashboard/mis/settings/agent')->with('success', 'Form Assignment Telah Di Hapus!');
    }

    public function importAgent(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('AgentData', $namafile);


        Excel::import(new AgentImport, \public_path('/AgentData/' . $namafile));

        return redirect('/dashboard/mis/settings/agent')->with('success', 'Form Assignment Telah Di Tambah!');
    }
}
