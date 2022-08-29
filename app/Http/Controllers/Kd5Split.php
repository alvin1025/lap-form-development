<?php

namespace App\Http\Controllers;

use App\Imports\Kd05Import;
use App\Models\Kd05;
use App\Models\KodeCountry;
use App\Models\Negara;
use App\Models\Tax;
use App\Models\Tittle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class Kd5Split extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $kd03 = Kd03::where('no_cust', $kd5->no_cust1)->get('short_name');
        $kd5 = Kd05::all();
        if (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd05Outs = $kd5;
        } else {
            $kd05Outs = $kd5->where('status', '=', '1');
        }

        // $kd5 = Kd05::all();
        return view('dashboard.salesFolder.Kd5.index', [
            'kd05' => $kd05Outs,
            // 'kd03' =>$kd03,
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
        $tax = Tax::all();
        $negara = Negara::all();
        // $kd03 = Kd03::all();
        $kodeCountry = KodeCountry::all();
        // $kd05 = Kd05::findOrFail($no_cust1)->where($no_cust1, '==', Kd03::where('no_cust', $kd03->no_cust))->get();
        // $kd05 = Kd05::all()->where('no_cust1=', Kd03::all()->get('no_cust'));
        $kd05 = Kd05::all();
        return view('dashboard.salesFolder.Kd5.create', [
            'titles' => $title,
            'taxs' => $tax,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kd05' => $kd05
        ]);
    }

    public function createSame($no_cust1)
    {
        $title = Tittle::all();
        $tax = Tax::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $kd05 = Kd05::all();
        return view('dashboard.salesFolder.Kd5.createSame', [
            'titles' => $title,
            'taxs' => $tax,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kd05' => $kd05,
            'no_cust1' => $no_cust1
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_cust1' => 'required',
            'addresscode1' => 'required',
            'title1' => 'nullable',
            'kd5negara1' => 'nullable',
            'kode_county1' => 'nullable',
            'kota1' => 'nullable',
            'email1' => 'nullable',
            'telp1' => 'nullable|max:15',
            'npwp1' => 'nullable',
            'nama11' => 'nullable',
            'nama21' => 'nullable',
            'street1' => 'nullable',
            'addit1' => 'nullable',
            'postal_code1' => 'nullable',
            'po_box1' => 'nullable',
            'tax1' => 'nullable',
            'mobile1' => 'nullable',
            'home1' => 'nullable',
            'fax1' => 'nullable',
            'status' => 'nullable',
            'status_form' => 'nullable',
            'ktp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'npwp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'addresscode' => ['nullable', 'string', 'unique:kd05'],
        ]);

        if ($file = $request->file('ktp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($file->getClientOriginalName());
            $image_full_name = 'Kd05' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd05-ktp/';
            $image_url = $upload_path . $image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['ktp_image'] = $image;
        }
        if ($files = $request->file('npwp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($files->getClientOriginalName());
            $image_full_name = 'Kd05' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd05-npwp/';
            $image_url = $upload_path . $image_full_name;
            $files->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['npwp_image'] = $image;
        }
        Kd05::create($validated);
        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd05 Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kd5 = Kd05::findOrFail($id);
        return view('dashboard.salesFolder.Kd5.show', [
            'kd05' => $kd5
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
        $title = Tittle::all();
        $tax = Tax::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $kd05 = Kd05::findOrFail($id);
        return view('dashboard.salesFolder.Kd5.edit', [
            'titles' => $title,
            'taxs' => $tax,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kd05' => $kd05
        ]);
    }

    public function editReject($id)
    {
        $title = Tittle::all();
        $tax = Tax::all();
        $negara = Negara::all();
        // $kd03 = Kd03::all();
        $kodeCountry = KodeCountry::all();
        // $kd05 = Kd05::findOrFail($no_cust1)->where($no_cust1, '==', Kd03::where('no_cust', $kd03->no_cust))->get();
        // $kd05 = Kd05::all()->where('no_cust1=', Kd03::all()->get('no_cust'));
        $kd05 = Kd05::findOrFail($id);
        return view('dashboard.salesFolder.Kd5.editReject', [
            'titles' => $title,
            'taxs' => $tax,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kd05' => $kd05
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kd05 $kd5)
    {
        $validated = $request->validate([
            'no_cust1' => 'required',
            'addresscode1' => 'nullable',
            'title1' => 'nullable',
            'kd5negara1' => 'nullable',
            'kode_county1' => 'nullable',
            'kota1' => 'nullable',
            'email1' => 'nullable',
            'telp1' => 'nullable|max:15',
            'npwp1' => 'nullable',
            'nama11' => 'nullable',
            'nama21' => 'nullable',
            'street1' => 'nullable',
            'addit1' => 'nullable',
            'postal_code1' => 'nullable',
            'po_box1' => 'nullable',
            'tax1' => 'nullable',
            'mobile1' => 'nullable',
            'home1' => 'nullable',
            'fax1' => 'nullable',
            'status' => 'nullable',
            'status_form' => 'nullable',
            'ktp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'npwp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'addresscode' => ['nullable', 'string'],
        ]);

        if ($file = $request->file('ktp_image')) {
            $month = Carbon::now()->format('m');
                $year = Carbon::now()->format('y');
                $no = $request->no_cust;
                $image_name = strtolower($file->getClientOriginalName());
                $image_full_name = 'Kd05' . $year . $month . $no . rand(1, 50) . "." . $image_name;
                $upload_path = 'Kd05-ktp/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $image_full_name);
                $image = $image_url;
                $validated['ktp_image'] = $image;
        }else {
            $validated['ktp_image'] = $kd5->ktp_image;
        }
        
        
        if ($files = $request->file('npwp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($files->getClientOriginalName());
            $image_full_name = 'Kd05' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd05-npwp/';
            $image_url = $upload_path . $image_full_name;
            $files->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['npwp_image'] = $image;
        }else {
            $validated['npwp_image'] = $kd5->npwp_image;
        }

        Kd05::where('id', $kd5->id)->update($validated);
        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd05 Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd05::destroy($id);
        return redirect('/dashboard/salesFolder/kd5')->with('success', 'Kd05 Has Been Deleted!');
    }

    public function importKd05(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd05Data', $namafile);


        Excel::import(new Kd05Import, \public_path('/Kd05Data/' . $namafile));

        return redirect('/dashboard/salesFolder/kd2')->with('success', 'KD05 Telah Di Tambahkan!');
    }
}
