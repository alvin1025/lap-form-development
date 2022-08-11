<?php

namespace App\Http\Controllers;

use App\Models\LanguageMark;
use App\Http\Requests\StoreLanguageMarkRequest;
use App\Http\Requests\UpdateLanguageMarkRequest;

class LanguageMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $language = LanguageMark::all();
        return view('dashboard.mis.settings.language.index', [
            'language' => $language
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $language = LanguageMark::all();
        return view('dashboard.mis.settings.language.create', [
            'language' => $language
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLanguageMarkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLanguageMarkRequest $request)
    {
        $validated = $request->validated();

        LanguageMark::create($validated);
        return redirect('/dashboard/mis/settings/language')->with('success', 'Language Mark Baru Berhasil Di Buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LanguageMark  $languageMark
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $language = LanguageMark::findOrFail($id);
        return view('dashboard.mis.settings.language.show', [
            'language' => $language
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LanguageMark  $languageMark
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = LanguageMark::findOrFail($id);
        return view('dashboard.mis.settings.language.edit', [
            'language' => $language
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLanguageMarkRequest  $request
     * @param  \App\Models\LanguageMark  $languageMark
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLanguageMarkRequest $request, LanguageMark $language)
    {
        $validated = $request->validated();

        LanguageMark::where('id', $language->id)->update($validated);
        return redirect('/dashboard/mis/settings/language')->with('success', 'Language Mark Baru Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LanguageMark  $languageMark
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LanguageMark::destroy($id);
        return redirect('/dashboard/mis/settings/language')->with('success', 'Language Mark Baru Berhasil Di Hapus!');
    }
}
