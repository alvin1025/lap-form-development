<?php

namespace App\Http\Controllers;

use App\Models\Bci;
use App\Models\FormDevSales;
use App\Models\FormRequestDevelopment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            // Sales
            'sales' => FormDevSales::all(),
            'salesOutstanding' => FormDevSales::where('status', '!=', 'Membuat Form Development Sales Ke Maketing')->get(),
            'salesTotal' => FormDevSales::all()->count(),
            'salesOutstandingTotal' => FormDevSales::where('status', '!=', 'Membuat Form Development Sales Ke Maketing')->count(),

            //Marketing
            'marketing' => FormRequestDevelopment::all(),
            'marketingInternal' => FormRequestDevelopment::all(),

            //bci
            'bci' => Bci::all()
        ]);
    }
}
