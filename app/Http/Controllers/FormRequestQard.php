<?php

namespace App\Http\Controllers;

use App\Models\DevModel;
use App\Models\FormRequestDevelopment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormRequestQard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.form.index', [
            'forms' => FormRequestDevelopment::with('devmodel')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dev_type = DevModel::all();
        $marketing = FormRequestDevelopment::all();
        $cek = FormRequestDevelopment::count();
        $now = Carbon::now();
        $month = $now->format('m');
        $year = $now->format('y');
        if ($cek == 0) {
            $urut = 001;
            $nomer = 'QARD/'.$urut.'/'.$month.'/'.$year;
        }else{
            $get = FormRequestDevelopment::all()->last();
            $urut = (int)substr($get->no, 4) + 1;
            $nomer = 'QARD/'.$urut.'/'.$month.'/'.$year;
        }
        return view('dashboard.form.create', compact('nomer', 'dev_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        
        if ($request->file('image')){
            $validated['image'] = $request->file('image')->store('image-qard');
        }

        FormRequestDevelopment::create($validated);

        return redirect('/dashboard/formrequest')->with('success', 'New Form Request Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormRequestDevelopment  $formRequestDevelopment
     * @return \Illuminate\Http\Response
     */
    public function show(FormRequestDevelopment $formRequestDevelopment, $id)
    {
        $marketing = FormRequestDevelopment::find($id);
        // $dev = FormRequestDevelopment::with('dev_model')->get();
        return view('dashboard.form.show',[
            'marketing' => $marketing,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormRequestDevelopment  $formRequestDevelopment
     * @return \Illuminate\Http\Response
     */
    public function edit(FormRequestDevelopment $formRequestDevelopment, $id)
    {
        $mkt = FormRequestDevelopment::find($id);
        return view('dashboard.form.edit',[
            'dev_type' => DevModel::all(),
            'marketing' => $mkt
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormRequestDevelopment  $formRequestDevelopment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormRequestDevelopment $formrequest)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('image-qard');
        }
        // dd($validated);
        // FormRequestDevelopment::find($id)->update($validated);
        FormRequestDevelopment::where('id', $formrequest->id)->update($validated);
        return redirect('/dashboard/formrequest')->with('success', 'Form Has Been Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormRequestDevelopment  $formRequestDevelopment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FormRequestDevelopment::destroy($id);
        return redirect('/dashboard/formrequest')->with('success', 'Form Has Been Deleted!');
    }
}
