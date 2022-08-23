<?php

namespace App\Http\Controllers;

use App\Models\Bci;
use App\Models\FormDevSales;
use App\Models\FormRequestDevelopment;
use App\Models\Kd03;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            // Sales
            'kd03' => Kd03::all(),
            'sales' => FormDevSales::all(),
            'salesOutstanding' => FormDevSales::where('status', '!=', 'Membuat Form Development Sales Ke Maketing')->get(),
            'salesTotal' => FormDevSales::all()->count(),
            'salesOutstandingTotal' => FormDevSales::where('status', '!=', 'Membuat Form Development Sales Ke Maketing')->count(),

            //Marketing
            'marketing' => FormRequestDevelopment::all(),
            'marketingInternal' => FormRequestDevelopment::all(),

            //bci
            'bci' => Bci::all(),

            //customer
            'kd03all' => Kd03::all()->count(),
            'kd03outs' => Kd03::all()->where('status_form', '!=', 'inputted')->count(),
            'kd03fix' => Kd03::all()->where('status_form', '!=', 'inputted')->where('emailUser', auth()->user()->email)->count(),
            'reject' => Kd03::all()->where('status_form', '==', 'rejected')->where('emailUser', auth()->user()->email)->count(),
            'dm' => Kd03::all()->where('status_form', 'created')->count(),
            'gm' => Kd03::all()->where('status_form', 'submitted')->count(),
            'dmFin' => Kd03::all()->where('status_form', 'acknowledged')->count(),
            'gmFin' => Kd03::all()->where('status_form', 'aprv 1')->count(),
            'doc' => Kd03::all()->where('status_form', 'aprv 2')->count(),
            'kd03inputted' => Kd03::all()->where('status_form', '=', 'inputted')->where('emailUser', auth()->user()->email)->count(),
            // 'kd03reject' => Kd03::all()->where('status_form', '==', 'rejected')->where('emailUser', auth()->user()->email)->count(),
            'inputed' => Kd03::all()->where('status_form', '=', 'inputted')->count(),
            'finish' => Kd03::all()->where('status_form', '=', 'finished')->count(),
        ]);
    }

    public function indexUtama(){
        return view('auth.dashboardUtama');
    }
}
