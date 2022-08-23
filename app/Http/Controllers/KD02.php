<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Kd03;
use App\Models\Kd04;
use App\Models\Kd05;
use App\Models\Kd06;
use App\Models\Kd11;
use App\Models\Kd14;
use App\Models\KodeCountry;
use App\Models\Negara;
use App\Models\Tax;
use App\Models\Tittle;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KD02 extends Controller
{
    public function index()
    {
        // $kd03 = Kd03::all();
        Kd04::all();
        Kd05::all();
        Kd06::all();
        Kd11::all();
        Kd14::all();
        // $kd03 = DB::table('kd03')
        //     ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
        //     ->get();

        $kd03 = DB::table('kd03')
            ->leftJoin('kd04', 'kd03.no_cust', '=', 'kd04.kd4no_cust')
            ->leftJoin('kd05', 'kd03.no_cust', '=', 'kd05.no_cust1')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->leftJoin('kd11', 'kd03.no_cust', '=', 'kd11.kd11no_cust')
            ->leftJoin('kd14', 'kd03.no_cust', '=', 'kd14.kd14no_cust')->get();
        // ->distinct()->get();
        // ->distinct('no_cust')->first();
        // dd($kd03);

        $kd03unique = $kd03->unique('no_cust');
        $kd03unique->all();

        return view('dashboard.salesFolder.kd2.index', [
            'kd03' => $kd03,
            'kd03unique' => $kd03unique
        ]);
    }

    public function info(){
        Kd04::all();
        Kd05::all();
        Kd06::all();
        Kd11::all();
        Kd14::all();
        $kd03 = DB::table('kd03')
            ->leftJoin('kd04', 'kd03.no_cust', '=', 'kd04.kd4no_cust')
            ->leftJoin('kd05', 'kd03.no_cust', '=', 'kd05.no_cust1')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->leftJoin('kd11', 'kd03.no_cust', '=', 'kd11.kd11no_cust')
            ->leftJoin('kd14', 'kd03.no_cust', '=', 'kd14.kd14no_cust')->get();
        $kd03unique = $kd03->unique('no_cust');
        $kd03unique->all();

        return view('dashboard.salesFolder.kd2.infoIndex', [
            'kd03' => $kd03,
            'kd03unique' => $kd03unique
        ]);
    }

    public function infoDetail($no_cust)
    {
        $kd3 = Kd03::all()->where('no_cust', '=', $no_cust);
        $kd4 = Kd04::all()->where('kd4no_cust', '=', $no_cust);
        $kd5 = Kd05::all()->where('no_cust1', '=', $no_cust);
        $kd6 = Kd06::all()->where('kd6no_cust', '=', $no_cust);
        $kd11 = Kd11::all()->where('kd11no_cust', '=', $no_cust);
        $kd14 = Kd14::all()->where('kd14no_cust', '=', $no_cust);
        return view('dashboard.salesFolder.kd2.infoDetail', [
            'kd03' => $kd3,
            'kd04' => $kd4,
            'kd05' => $kd5,
            'kd06' => $kd6,
            'kd11' => $kd11,
            'kd14' => $kd14,
            'no_cust' => $no_cust
        ]);
    }

    public function indexkd3($no_cust)
    {
        $kd03 = Kd03::all()->where('no_cust', '=', $no_cust);
        return view('dashboard.salesFolder.kd2.indexkd3', [
            'kd03' => $kd03
        ]);
    }

    public function indexkd4($no_cust)
    {
        $kd04 = Kd04::all()->where('kd4no_cust', '=', $no_cust);
        $kd03 = Kd03::where('no_cust', $no_cust)->get();

        return view('dashboard.salesFolder.kd2.indexkd4', [
            'kd04' => $kd04,
            'kd03' => $kd03
        ]);
    }

    public function indexkd5($no_cust)
    {
        $kd05 = Kd05::all()->where('no_cust1', '=', $no_cust);
        return view('dashboard.salesFolder.kd2.indexkd5', [
            'kd05' => $kd05
        ]);
    }

    public function indexkd6($no_cust)
    {
        $kd06 = Kd06::all()->where('kd6no_cust', '=', $no_cust);
        return view('dashboard.salesFolder.kd2.indexkd6', [
            'kd06' => $kd06
        ]);
    }

    public function indexkd11($no_cust)
    {
        $kd11 = Kd11::all()->where('kd11no_cust', '=', $no_cust);
        return view('dashboard.salesFolder.kd2.indexkd11', [
            'kd11' => $kd11
        ]);
    }

    public function indexkd14($no_cust)
    {
        $kd14 = Kd14::all()->where('kd14no_cust', '=', $no_cust);
        return view('dashboard.salesFolder.kd2.indexkd14', [
            'kd14' => $kd14
        ]);
    }
}
