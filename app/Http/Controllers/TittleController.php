<?php

namespace App\Http\Controllers;

use App\Models\Tittle;
use App\Http\Requests\StoreTittleRequest;
use App\Http\Requests\UpdateTittleRequest;
use App\Imports\TitleImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Chart\Title;

class TittleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $tittle = Tittle::all();
        return view('dashboard.mis.settings.title.index', [
            'user' => $user,
            'tittle' => $tittle
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $title = Tittle::all();
        return view('dashboard.mis.settings.title.create', [
            'user' => $user,
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTittleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTittleRequest $request)
    {
        $validated = $request->validated();


        Tittle::create($validated);
        return redirect('/dashboard/mis/settings/title')->with('success', 'Title Baru Telah Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tittle  $tittle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = Tittle::findOrFail($id);
        return view('dashboard.mis.settings.title.show', [
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tittle  $tittle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $title = Tittle::findOrFail($id);
        return view('dashboard.mis.settings.title.edit', [
            'user' => $user,
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTittleRequest  $request
     * @param  \App\Models\Tittle  $tittle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTittleRequest $request, Tittle $title)
    {
        $validated = $request->validated();

        Tittle::where('id', $title->id)->update($validated);
        return redirect('/dashboard/mis/settings/title')->with('success', 'Title Baru Telah Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tittle  $tittle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tittle::destroy($id);
        return redirect('/dashboard/mis/settings/title')->with('success', 'Title Baru Telah Di Hapus!');
    }

    public function importTitle(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('TitleData', $namafile);


        Excel::import(new TitleImport, \public_path('/TitleData/' . $namafile));

        return redirect('/dashboard/mis/settings/title')->with('success', 'Title Baru Telah Di Tambahkan!');
    }
}
