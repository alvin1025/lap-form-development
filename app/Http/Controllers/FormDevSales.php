<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesCreateRequest;
use App\Http\Requests\SalesEditRequest;
use App\Models\Bci;
use App\Models\FormDevSales as ModelsFormDevSales;
use App\Models\FormRequestDevelopment;
use App\Models\MasterDevReportQard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormDevSales extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(session('no'));
        return view('dashboard.sales.index', [
            'sales' => ModelsFormDevSales::where('user_id', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sales = ModelsFormDevSales::where('user_id', Auth::user()->id)->get();
        $cek = ModelsFormDevSales::count();
        $now = Carbon::now();
        $month = $now->format('m');
        $year = $now->format('y');
        if ($cek == 0) {
            $urut = 001;
            $nomer = 'LPA/D/' . $month . $year . '/0' . $urut;
        } else {
            $get = ModelsFormDevSales::all()->last();
            $urut = (int)substr($get->no, -2) + 1;
            $nomer = 'LPA/D/' . $month . $year . '/0' . $urut;
        }
        return view('dashboard.sales.create', compact('nomer', 'sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesCreateRequest $request)
    {
        $marketing = FormRequestDevelopment::all();
        $qard = MasterDevReportQard::all();
        $cek = FormRequestDevelopment::count();
        $now = Carbon::now();
        $month = $now->format('m');
        $year = $now->format('y');
        if ($cek == 0) {
            $urut = 001;
            $nomer = 'MKT/' . $urut . '/'  . $month . '/' . $year;
        } else {
            $get = FormRequestDevelopment::all()->last();
            $urut = (int)substr($get->no, 4) + 1;
            $nomer = 'MKT/' . $urut . '/'  . $month . '/' . $year;
        }

        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['note'] = nl2br(e($request->subject));


        $sales = ModelsFormDevSales::create($validated);

        // session(['no'=> $sales->no]);
        if ($validated['status'] === 'Membuat Form Development Sales Ke Maketing') {
            $marketing = new FormRequestDevelopment();
            $marketing->no = $nomer;
            $marketing->form_dev_sales_id = $sales->id;
            $marketing->save();
        }


        // $qard =  new MasterDevReportQard();
        // $qard->form_dev_sales_id = $sales->id;
        // $qard->save();

        return redirect('/dashboard/sales')->with('success', 'New Form Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\ModelsFormDevSales $formDevSales
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsFormDevSales $formDevSales, $id)
    {
        $formDevSales = ModelsFormDevSales::find($id);
        return view('dashboard.sales.show', [
            'sales' => $formDevSales
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
        $modelsformsales = ModelsFormDevSales::find($id);
        return view('dashboard.sales.edit', [
            'sales' => $modelsformsales
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalesEditRequest $request, ModelsFormDevSales $sale)
    {
        // dd($sale->id);
        // $sales = ModelsFormDevSales::findOrFail($sale->id);
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['note'] = nl2br(e($request->subject));


        ModelsFormDevSales::where('id', $sale->id)->update($validated);

        return redirect('/dashboard/sales')->with('success', 'Form Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsFormDevSales::destroy($id);
        return redirect('/dashboard/sales')->with('success', 'Form Has Been Deleted!');
    }
}
