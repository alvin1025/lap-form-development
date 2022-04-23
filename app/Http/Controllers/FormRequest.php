<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormMktRequest;
use App\Http\Requests\MktEditRequest;
use App\Http\Requests\SalesEditRequest;
use App\Models\DevModel;
use App\Models\FormDevSales;
use App\Models\FormRequestDevelopment;
use App\Models\FormRequestModel;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FormRequest extends Controller
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
            'sales' => FormDevSales::where("status", "Membuat Form Development Sales Ke Maketing")->get()
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
            $nomer = 'MKT/' . $urut . '/' . $month . '/' . $year;
        } else {
            $get = FormRequestDevelopment::all()->last();
            $urut = (int)substr($get->no, 4) + 1;
            $nomer = 'MKT/' . $urut . '/' . $month . '/' . $year;
        }
        return view('dashboard.form.create', compact('nomer', 'dev_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormMktRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['subject'] = nl2br(e($request->subject));

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('image-mkt');
        }

        // if ($request->file('image')) {
        //     $validateData['image'] = $request->file('image')->store('form(mkt)-file');
        // }
        // $validateData['user_id'] = auth()->user()->id;
        FormRequestDevelopment::create($validated);

        return redirect('/dashboard/formrequest')->with('success', 'New Form Request Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FormRequestDevelopment $marketing, $id)
    {
        $marketing = FormRequestDevelopment::find($id);
        // $dev = FormRequestDevelopment::with('dev_model')->get();
        return view('dashboard.form.show', [
            'marketing' => $marketing,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mkt = FormRequestDevelopment::find($id);
        return view('dashboard.form.edit', [
            'dev_type' => DevModel::all(),
            'marketing' => $mkt
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MktEditRequest $request, FormRequestDevelopment $formrequest)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['subject'] = nl2br(e($request->subject));

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('image-mkt');
        }
        // dd($validated);
        // FormRequestDevelopment::find($id)->update($validated);
        FormRequestDevelopment::where('id', $formrequest->id)->update($validated);
        return redirect('/dashboard/formrequest')->with('success', 'Form Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FormRequestDevelopment::destroy($id);
        return redirect('/dashboard/formrequest')->with('success', 'Form Has Been Deleted!');
    }

    public function showSales(FormDevSales $formDevSales, $id)
    {
        $formDevSales = FormDevSales::find($id);
        return view('dashboard.sales.showSales', [
            'sales' => $formDevSales
        ]);
    }

    public function editSales($id)
    {
        $formDevSales = FormDevSales::find($id);
        return view('dashboard.sales.editSales', [
            'sales' => $formDevSales
        ]);
    }

    public function updateSales(SalesEditRequest $request, FormDevSales $formDevSales)
    {
        $validated = $request->validated();
        $validated['user_id'] = FormDevSales::get();

        // dd($validated);
        FormDevSales::where('id', $formDevSales->id)->update($validated);

        return redirect('/dashboard/formrequest')->with('success', 'Form Sales Has Been Updated!');
    }

    public function exportDevMarketing($id)
    {
        $mkt = FormRequestDevelopment::find($id);

        view()->share('mkt', $mkt);
        $pdfMarketing = PDF::loadView('pdfMarketing');

        return $pdfMarketing->download('DevelopmentMarketing.pdf');
    }
}
