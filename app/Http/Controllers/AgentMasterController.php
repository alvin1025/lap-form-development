<?php

namespace App\Http\Controllers;

use App\Models\AgentMaster;
use App\Http\Requests\StoreAgentMasterRequest;
use App\Http\Requests\UpdateAgentMasterRequest;
use App\Imports\AgentImport;
use App\Models\Agent;
use App\Models\AgentKind;
use App\Models\KodeCountry;
use App\Models\Kurs;
use App\Models\LanguageMark;
use App\Models\Negara;
use App\Models\Tittle;
use App\Models\Vs04;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AgentMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = AgentMaster::all();
        return view('dashboard.mis.settings.agentMaster.index', [
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
        $agent = AgentMaster::all();
        return view('dashboard.mis.settings.agentMaster.create', [
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
     * @param  \App\Http\Requests\StoreAgentMasterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentMasterRequest $request)
    {
        $validated = $request->validated();

        AgentMaster::create($validated);

        $allow = $request->validate([
            'allow' => 'nullable',
            'agent' => 'nullable',]);
        Vs04::create($allow);

        return redirect('/dashboard/mis/settings/agentmaster')->with('success', 'Form Agent Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgentMaster  $agentMaster
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
        $agent = AgentMaster::findOrFail($id);
        return view('dashboard.mis.settings.agentMaster.show', [
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
     * @param  \App\Models\AgentMaster  $agentMaster
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
        $agent = AgentMaster::findOrFail($id);
        // $getAllow['allow'] = Vs04::with(['agentmasters'])->get();
        // $cars= Vs04::with(array('agentmasters'=>function($query){
        //     $query->select('allow');
        // }))->get();
        return view('dashboard.mis.settings.agentMaster.edit', [
            'agent' => $agent,
            'titles' => $title,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kurses' => $kurs,
            'languages' => $language,
            'agentKind' => $agentKind,
            // 'allow' => $cars,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgentMasterRequest  $request
     * @param  \App\Models\AgentMaster  $agentMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgentMaster $agentmaster)
    {
        $validated = $request->validate([ 
        'agent' => 'nullable',
        'language' => 'nullable',
        'title' => 'nullable',
        'shortname' => 'nullable',
        'status' => 'nullable',
        'agent_kind' => 'nullable',
        'name1' => 'nullable',
        'name2' => 'nullable',
        'addit' => 'nullable',
        'street' => 'nullable',
        'cocd' => 'nullable',
        'cty' => 'nullable',
        'pobox' => 'nullable',
        'phone' => 'nullable',
        'email' => 'nullable',
        'mobile' => 'nullable',
        'home' => 'nullable',
        'fax' => 'nullable',
        'kurs' => 'nullable',]);
        // dd($request);
        AgentMaster::where('id', $agentmaster->id)->update($validated);
        Vs04::where('agent', $request->agent)->update(['allow'=> $request->allow]);
        Vs04::where('agent', $request->agent)->update(['agent'=> $request->agent]);
        return redirect('/dashboard/mis/settings/agentmaster')->with('success', 'Form Agent Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgentMaster  $agentMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AgentMaster::destroy($id);
        return redirect('/dashboard/mis/settings/agentmaster')->with('success', 'Form Agent Telah Di Hapus!');
    }

    public function importAgent(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('AgentData', $namafile);


        Excel::import(new AgentImport, \public_path('/AgentData/' . $namafile));

        return redirect('/dashboard/mis/settings/agent')->with('success', 'Form Agent Telah Di Tambah!');
    }

    public function getAlloq($agent)
    {
        $agentAlloq = Vs04::where('agent', '=', $agent);
        return response()->json($agentAlloq);
    }
}
