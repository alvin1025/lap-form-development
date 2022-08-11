<?php

namespace App\Http\Controllers;

use App\Models\Kd03;
use App\Models\Kd04;
use App\Models\Kd05;
use App\Models\Kd06;
use App\Models\Kd11;
use App\Models\Kd14;
use App\Models\PayTerm;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($no_cust)
    {

        $data['kd03'] = Kd03::all()->where('no_cust', $no_cust);
        $data['kd04'] = Kd04::all()->where('kd4no_cust', $no_cust);
        $data['kd05'] = Kd05::all()->where('no_cust1', $no_cust);
        $data['kd06'] = Kd06::all()->where('kd6no_cust', $no_cust);
        $data['kd11'] = Kd11::all()->where('kd11no_cust', $no_cust);
        $data['kd14'] = Kd14::all()->where('kd14no_cust', $no_cust);

        $pdf = FacadePdf::loadView('pdfCust', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }

    public function generatePDFFin($no_cust)
    {

        $data['kd03'] = Kd03::all()->where('no_cust', $no_cust);
        $data['kd04'] = Kd04::all()->where('kd4no_cust', $no_cust);
        $data['kd05'] = Kd05::all()->where('no_cust1', $no_cust);
        $data['kd06'] = Kd06::all()->where('kd6no_cust', $no_cust);
        $data['kd11'] = Kd11::all()->where('kd11no_cust', $no_cust);
        $data['kd14'] = Kd14::all()->where('kd14no_cust', $no_cust);

        $pdf = FacadePdf::loadView('pdfCustFin', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream();
    }
}
