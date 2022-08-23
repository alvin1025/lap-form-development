<?php

namespace App\Http\Controllers;

use App\Imports\Kd03Import;
use App\Mail\FormSubmitEmail;
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
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class Kd3Split extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = Kd03::all();
        } else {
            $kd03Outs = Kd03::all()->where('status', '=', '1');
        }



        // $kd3 = Kd03::all();
        return view('dashboard.salesFolder.Kd3.index', [
            'kd03' => $kd03Outs,
            // 'join' => $join,
        ]);
    }

    public function InputtedIndex()
    {

        $kd03 = Kd03::all()->where('status_form', 'inputted');
        $kd05 = DB::table('kd05')
            ->leftJoin('kd03', 'kd05.no_cust1', '=', 'kd03.no_cust')
            ->get(['no_cust']);
        $count = $kd05->where('no_cust1', 'kd03.no_cust')->count();
        // dd($count);
        return view('dashboard.salesFolder.Kd3.indexInputted', [
            'kd03' => $kd03,
        ]);
    }

    public function rejectIndex()
    {

        $kd03 = Kd03::all()->where('status_form', 'rejected');
        $kd05 = DB::table('kd05')
            ->leftJoin('kd03', 'kd05.no_cust1', '=', 'kd03.no_cust')
            ->get(['no_cust']);
        $count = $kd05->where('no_cust1', 'kd03.no_cust')->count();
        // dd($count);
        return view('dashboard.salesFolder.Kd3.reject', [
            'kd03' => $kd03,
        ]);
    }

    public function finishedIndex()
    {

        $kd03 = Kd03::all()->where('status_form', 'finished');
        $kd05 = DB::table('kd05')
            ->leftJoin('kd03', 'kd05.no_cust1', '=', 'kd03.no_cust')
            ->get(['no_cust']);
        $count = $kd05->where('no_cust1', 'kd03.no_cust')->count();
        // dd($count);
        return view('dashboard.salesFolder.Kd3.indexFinished', [
            'kd03' => $kd03,
        ]);
    }

    public function OutIndex()
    {

        $kd03 = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();
        // $cust =  Kd06::where('kd4no_cust', $kd03->no_cust)->get();
        // $cob = auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name = 'DM FABRIC SALES';
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd03Outs = $kd03->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd03Outs = $kd03->where('status_form', 'created');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd03Outs = $kd03->where('status_form', 'submitted');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd03Outs = $kd03->where('status_form', 'acknowledged');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd03Outs = $kd03->where('status_form', 'aprv 1');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd03Outs = $kd03->where('status_form', 'aprv 2');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = $kd03->where('status_form', '!=', 'inputted');
        } else {
            "Anda Tidak Memiliki Akses Customer Data";
        }

        $kd03unique = $kd03Outs->unique('no_cust');
        $kd03unique->all();

        // dd(auth()->user());
        return view('dashboard.salesFolder.Kd3.indexOut', [
            'kd03' => $kd03unique,
            // 'cust' => $cust
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cek = Kd03::count();
        if ($cek == 0) {
            $urut = 001;
            $nomer = $urut;
        } else {
            $get = Kd03::all()->last();
            $urut = (int)substr($get->no_cust, 0) + 1;
            $nomer = $urut;
        }

        $title = Tittle::all();
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $tax = Tax::all();
        $kd3 = Kd03::all();
        return view('dashboard.salesFolder.Kd3.create', [
            'kd03' => $kd3,
            'no' => $nomer,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'taxs' => $tax,
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
            'no_cust' => 'required|unique:kd03',
        ]);
        $validated['emailUser'] = auth()->user()->email;

        if ($file = $request->file('ktp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($file->getClientOriginalName());
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-ktp/';
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
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-npwp/';
            $image_url = $upload_path . $image_full_name;
            $files->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['npwp_image'] = $image;
        }
        // dd($validated);
        $kd3 = Kd03::create($validated);

        $kd04 = new Kd04();
        $kd04->kd4no_cust = $kd3->no_cust;
        $kd04->no_debitor = $kd3->no_cust;
        $kd04->no_creditor = $kd3->no_cust;
        $kd04->no_group_cust = $kd3->no_cust;
        $kd04->credit_cust = $kd3->no_cust;
        $kd04->status_form = $kd3->status_form;
        $kd04->status = $kd3->status;
        $kd04->credit_line_check = "Cr.line check at deliv.release";
        $kd04->save();

        $kd05 = new Kd05();
        $kd05->no_cust1 = $kd3->no_cust;
        $kd05->status = '1';
        $kd05->status_form = $kd3->status_form;
        $kd05->save();

        $kd06 = new Kd06();
        $kd06->kd6no_cust = $kd3->no_cust;
        $kd06->status = '1';
        $kd06->status_form = $kd3->status_form;
        $kd06->save();

        $kd11 = new Kd11();
        $kd11->kd11no_cust = $kd3->no_cust;
        $kd11->status1 = '1';
        $kd11->status_form = $kd3->status_form;
        $kd11->save();

        $kd14 = new Kd14();
        $kd14->kd14no_cust = $kd3->no_cust;
        $kd14->status = '1';
        $kd14->status_form = $kd3->status_form;
        $kd14->save();
        // Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
        return redirect()->route('kd3.edit', $kd3)->with('success', 'Kd03 Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kd3 = Kd03::findOrFail($id);

        return view('dashboard.salesFolder.Kd3.show', [
            'kd03' => $kd3
        ]);
    }
    public function submit($no_cust)
    {
        $kd3 = Kd03::all()->where('no_cust', '=', $no_cust);
        // dd($kd3);
        $kd4 = Kd04::all()->where('kd4no_cust', '=', $no_cust);
        $kd5 = Kd05::all()->where('no_cust1', '=', $no_cust);
        $kd6 = Kd06::all()->where('kd6no_cust', '=', $no_cust);
        $kd11 = Kd11::all()->where('kd11no_cust', '=', $no_cust);
        $kd14 = Kd14::all()->where('kd14no_cust', '=', $no_cust);
        // $join = DB::table('kd03')
        //     ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
        //     ->leftJoin('kd04', 'kd03.no_cust', '=', 'kd04.kd4no_cust')
        //     ->leftJoin('kd05', 'kd03.no_cust', '=', 'kd05.no_cust1')
        //     ->leftJoin('kd11', 'kd03.no_cust', '=', 'kd11.kd11no_cust')
        //     ->leftJoin('kd14', 'kd03.no_cust', '=', 'kd14.kd14no_cust')
        //     ->get();
        return view('dashboard.salesFolder.Kd3.submit', [
            'kd03' => $kd3,
            'kd04' => $kd4,
            'kd05' => $kd5,
            'kd06' => $kd6,
            'kd11' => $kd11,
            'kd14' => $kd14,
            // 'joins' => $join,
            'no_cust' => $no_cust
        ]);
    }

    public function updateSubmit(Request $request, $no_cust)
    {
        $emailGmFin = User::where('position_job_name', 'DIREKTUR FINANCE, ACCT & IT')->where('jabatan', 'Direksi')->first('email')->email;
        $emailDmFin = User::where('division', 'FINANCE')->where('jabatan', 'Division Manager')->first('email')->email;
        $emailDm = User::where('division', 'FABRIC SALES')->where('position_job_name', 'DM FABRIC SALES')->first('email')->email;
        $emailGm = User::where('position_job_name', 'GM SALES FABRIC & FACTORY MANAGER LPA')->first('email')->email;

        $now = Carbon::today()->format('Y-m-d');
        $submit2 = Carbon::today()->format('Y-m-d');
        $ack = Carbon::today()->format('Y-m-d');
        $aprv12 = Carbon::now()->format('Y-m-d');
        $aprv22 = Carbon::now()->format('Y-m-d');
        $inputted2 = Carbon::now()->format('Y-m-d');
        $kd03 = Kd03::where('no_cust', '=', $no_cust)->first();
        $user = $kd03->emailUser;
        $details = [
            'title' => 'Aproval Form',
            'body' => 'Please Check Submit Form',
            'no_cust' => $no_cust,
            'nama' => $kd03->short_name,
            // 'status' => $sts
        ];

        $cc = ['suryana@luckytex.com', 'fajar_singgih@luckytex.com', 'alvin.fadhilah03@gmail.com'];
        if ($kd03->status_form == 'inputted') {
            if ($request->status_form == 'finished') {
                $created = $kd03->created_by;
                $createdDate = $kd03->created_date;
                $submit = $kd03->submitted_by;
                $submit_date =  $kd03->submited_date;
                $acknow = $kd03->acknowledged_by;
                $ackDate = $kd03->ack_date;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = $kd03->aprv1_date;
                $apprv2 = $kd03->aprv2_by;
                $aprv2Date = $kd03->aprv2_date;
                $inputted = $kd03->inputted_by;
                $inputDate = $kd03->inputed_date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = Auth()->user()->employee_name;;
                $finishedDate = $now;
            } elseif ($request->status_form == 'rejected') {
                $created = $kd03->created_by;
                $createdDate = NULL;
                $submit = $kd03->submitted_by;
                $submit_date =  NULL;
                $acknow = $kd03->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd03->aprv2_by;
                $aprv2Date = NULL;
                $inputted = $kd03->inputted_by;
                $inputDate = $kd03->inputed_date;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $now;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd03->status_form == 'aprv 2') {
            if ($request->status_form == 'inputted') {
                $created = $kd03->created_by;
                $createdDate = $kd03->created_date;
                $submit = $kd03->submitted_by;
                $submit_date =  $kd03->submited_date;
                $acknow = $kd03->acknowledged_by;
                $ackDate = $kd03->ack_date;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = $kd03->aprv1_date;
                $apprv2 = $kd03->aprv2_by;
                $aprv2Date = $kd03->aprv2_date;
                $inputted = Auth()->user()->employee_name;
                $inputDate = $inputted2;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                $created = $kd03->created_by;
                $createdDate = NULL;
                $submit = $kd03->submitted_by;
                $submit_date =  NULL;
                $acknow = $kd03->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd03->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $now;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd03->status_form == 'aprv 1') {
            if ($request->status_form == 'aprv 2') {
                $created = $kd03->created_by;
                $createdDate = $kd03->created_date;
                $submit = $kd03->submitted_by;
                $submit_date =  $kd03->submited_date;
                $acknow = $kd03->acknowledged_by;
                $ackDate = $kd03->ack_date;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = $kd03->aprv1_date;
                $apprv2 = Auth()->user()->employee_name;
                $aprv2Date = $aprv22;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                $created = $kd03->created_by;
                $createdDate = NULL;
                $submit = $kd03->submitted_by;
                $submit_date =  NULL;
                $acknow = $kd03->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $now;
            }
        }
        if ($kd03->status_form == 'acknowledged') {
            if ($request->status_form == 'aprv 1') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
                $created = $kd03->created_by;
                $createdDate = $kd03->created_date;
                $submit = $kd03->submitted_by;
                $submit_date =  $kd03->submited_date;
                $acknow = $kd03->acknowledged_by;
                $ackDate = $kd03->ack_date;
                $apprv1 = Auth()->user()->employee_name;
                $aprv1Date = $aprv12;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
                $created = $kd03->created_by;
                $createdDate = NULL;
                $submit = $kd03->submitted_by;
                $submit_date = NULL;
                $acknow = $kd03->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $now;
            }
        }
        if ($kd03->status_form == 'submitted') {
            if ($request->status_form == 'acknowledged') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
                $created = $kd03->created_by;
                $createdDate = $kd03->created_date;
                $submit = $kd03->submitted_by;
                $submit_date = $kd03->submited_date;
                $acknow = Auth()->user()->employee_name;
                $ackDate = $ack;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                $submit = $kd03->submitted_by;
                $submit_date = NULL;
                Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
                $created = $kd03->created_by;
                $createdDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $now;
            }
        }
        if ($kd03->status_form == 'created') {
            if ($request->status_form == 'submitted') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
                $created = $kd03->created_by;
                $createdDate = $kd03->created_date;
                $submit = Auth()->user()->employee_name;
                $submit_date = $submit2;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
                $created = $kd03->created_by;
                $createdDate = NULL;
                $submit = NULL;
                $submit_date = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $now;
            }
        }
        if ($kd03->status_form == '') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
                $created = Auth()->user()->employee_name;
                $createdDate = $now;
                $submit = NULL;
                $submit_date = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
                $created = NULL;
                $createdDate = NULL;
                $submit = NULL;
                $submit_date = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $now;
            }
        }
        if ($kd03->status_form == 'rejected') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new FormSubmitEmail($details));
                $created = Auth()->user()->employee_name;
                $createdDate = $now;
                $submit = NULL;
                $submit_date = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                $created = NULL;
                $createdDate = NULL;
                $submit = NULL;
                $submit_date = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = Null;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = $now;
            }
        }
        Kd03::where('no_cust', $no_cust)->update([
            'status_form' => $request->input('status_form'),
            'created_by' => $created,
            'created_date' => $createdDate,
            'submitted_by' => $submit,
            'submited_date' => $submit_date,
            'rejectted_by' => $reject,
            'reject_reason' => $request->input('reject_reason'),
            'reject_date' => $rejectDate,
            'aprv1_by' => $apprv1,
            'aprv1_date' => $aprv1Date,
            'aprv2_by' => $apprv2,
            'inputted_by' => $inputted,
            'finished_by' => $finished,
            'finished_date' => $finishedDate,
            'acknowledged_by' => $acknow,
            'ack_date' => $ackDate,
            'aprv2_date' => $aprv2Date,
            'inputed_date' => $inputDate,

            // 'no' => $no_cust
        ]);
        Kd04::where('kd4no_cust', $request->no_cust)->update(['status_form' => $request->input('status_form')]);
        Kd05::where('no_cust1', $request->no_cust)->update(['status_form' => $request->input('status_form')]);
        Kd06::where('kd6no_cust', $request->no_cust)->update(['status_form' => $request->input('status_form')]);
        Kd11::where('kd11no_cust', $request->no_cust)->update(['status_form' => $request->input('status_form')]);
        Kd14::where('kd14no_cust', $request->no_cust)->update(['status_form' => $request->input('status_form')]);
        // dd($request);
        return redirect('/kd3/outindex')->with('success', 'New Form Input Customer Has Been Updated!');
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
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $tax = Tax::all();
        $kd3 = Kd03::findOrFail($id);
        return view('dashboard.salesFolder.Kd3.edit', [
            'kd03' => $kd3,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'taxs' => $tax,
        ]);
    }


    public function editkd5($no_cust1)
    {
        $title = Tittle::all();
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $tax = Tax::all();
        $kd3 = Kd05::findOrFail($no_cust1);
        return view('dashboard.salesFolder.Kd3.edit', [
            'kd03' => $kd3,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'taxs' => $tax,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kd03 $kd3)
    {
        
        $validated = $request->validate([
            'class' => 'required',
            'no_cust' => 'required',
            'title' => 'required',
            // 'kode_cust' => 'required',
            'kode_county' => 'required',
            'kota' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'npwp' => 'required',
            'short_name' => 'required',
            'nama1' => 'required',
            'nama2' => 'nullable',
            'street' => 'required',
            'negara' => 'required',
            'addit' => 'nullable',
            'postal_code' => 'required',
            'po_box' => 'nullable',
            'tax' => 'nullable',
            'mobile' => 'nullable',
            'home' => 'nullable',
            'fax' => 'nullable',
            'status' => 'required',
            'ktp_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'npwp_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'old_ktp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'old_npwp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);

        // dd($kd3->npwp_image);
        // $kd03 = Kd03::where('id', $id)->first();
        
        if ($file = $request->file('ktp_image')) {
            $month = Carbon::now()->format('m');
                $year = Carbon::now()->format('y');
                $no = $request->no_cust;
                $image_name = strtolower($file->getClientOriginalName());
                $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
                $upload_path = 'Kd03-ktp/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $image_full_name);
                $image = $image_url;
                $validated['ktp_image'] = $image;
        }else {
            $validated['ktp_image'] = $kd3->ktp_image;
        }
        
        
        if ($files = $request->file('npwp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($files->getClientOriginalName());
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-npwp/';
            $image_url = $upload_path . $image_full_name;
            $files->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['npwp_image'] = $image;
        }else {
            $validated['npwp_image'] = $kd3->npwp_image;
        }

        
        

        if ($request->status == '2') {
            Kd04::where('kd4no_cust', $request->no_cust)->update(['status' => '2']);
            Kd05::where('no_cust1', $request->no_cust)->update(['status' => '2']);
            Kd06::where('kd6no_cust', $request->no_cust)->update(['status' => '2']);
            Kd11::where('kd11no_cust', $request->no_cust)->update(['status1' => '2']);
            Kd14::where('kd14no_cust', $request->no_cust)->update(['status' => '2']);
        } elseif ($request->status == '1') {
            Kd04::where('kd4no_cust', $request->no_cust)->update(['status' => '1']);
            Kd05::where('no_cust1', $request->no_cust)->update(['status' => '1']);
            Kd06::where('kd6no_cust', $request->no_cust)->update(['status' => '1']);
            Kd11::where('kd11no_cust', $request->no_cust)->update(['status1' => '1']);
            Kd14::where('kd14no_cust', $request->no_cust)->update(['status' => '1']);
        }


        Kd03::where('id', $kd3->id)->update($validated);


        return redirect('/dashboard/salesFolder/kd2')->with('success', 'Kd03 Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd03::destroy($id);
        return redirect('/dashboard/salesFolder/kd3')->with('success', 'Kd03 Has Been Deleted!');
    }

    public function destroyAll($no_cust)
    {
        DB::table("kd03")->where('no_cust', $no_cust)->delete();
        DB::table("kd04")->where('kd4no_cust', $no_cust)->delete();
        DB::table("kd05")->where('no_cust1', $no_cust)->delete();
        DB::table("kd06")->where('kd6no_cust', $no_cust)->delete();
        DB::table("kd11")->where('kd11no_cust', $no_cust)->delete();
        DB::table("kd14")->where('kd14no_cust', $no_cust)->delete();


        return redirect('/dashboard/salesFolder/kd3')->with('success', 'Customer Data Has Been Deleted!');
    }

    public function importKd03(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd03Data', $namafile);


        Excel::import(new Kd03Import, \public_path('/Kd03Data/' . $namafile));

        return redirect('/dashboard/salesFolder/kd2')->with('success', 'KD03 Telah Di Tambahkan!');
    }

    public function sendEmail()
    {
        $details = [
            'title' => 'Aproval Form',
            'body' => 'Please Check Submit Form',

        ];

        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'DM FABRIC SALES') {
            Mail::to('suryana@luckytex.com')->send(new FormSubmitEmail($details));
        } elseif (auth()->user()->division == 'SALES' && auth()->user()->position_job_name == 'GM COMMERCIAL FABRIC SALES & MARKETING') {
            Mail::to('bettalistiwa@gmail.com')->send(new FormSubmitEmail($details));
        } else {
            # code...
        }

        // dd("Check Your Email");
        return redirect('/kd3/outindex')->with('success', 'New Form Input Customer Has Been Updated!');
    }

    public function belumSubmit()
    {
        $kd03fix = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();


        $kd03 = $kd03fix->unique('no_cust');
        $kd03->all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd03Outs = $kd03->where('status_form', '==', '')->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd03Outs = $kd03->where('status_form', '==', '');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd03Outs = $kd03->where('status_form', '==', '');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd03Outs = $kd03->where('status_form', '==', '');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd03Outs = $kd03->where('status_form', '==', '');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd03Outs = $kd03->where('status_form', '==', '');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = $kd03->where('status_form', '==', '');
        } else {
            "Anda Tidak Memiliki Akses Customer Data";
        }

        return view('dashboard.salesFolder.Kd3.belumSubmit', [
            'kd03' => $kd03Outs,
        ]);
    }

    public function needDMSales()
    {
        $kd03fix = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();

        $kd03 = $kd03fix->unique('no_cust');
        $kd03->all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd03Outs = $kd03->where('status_form', '==', 'created')->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd03Outs = $kd03->where('status_form', '==', 'created');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd03Outs = $kd03->where('status_form', '==', 'created');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd03Outs = $kd03->where('status_form', '==', 'created');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd03Outs = $kd03->where('status_form', '==', 'created');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd03Outs = $kd03->where('status_form', '==', 'created');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = $kd03->where('status_form', '==', 'created');
        } else {
            "Anda Tidak Memiliki Akses Customer Data";
        }

        return view('dashboard.salesFolder.Kd3.dmSalesSubmit', [
            'kd03' => $kd03Outs,
        ]);
    }

    public function needGMSales()
    {
        $kd03fix = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();

        $kd03 = $kd03fix->unique('no_cust');
        $kd03->all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd03Outs = $kd03->where('status_form', '==', 'submitted')->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd03Outs = $kd03->where('status_form', '==', 'submitted');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd03Outs = $kd03->where('status_form', '==', 'submitted');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd03Outs = $kd03->where('status_form', '==', 'submitted');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd03Outs = $kd03->where('status_form', '==', 'submitted');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd03Outs = $kd03->where('status_form', '==', 'submitted');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = $kd03->where('status_form', '==', 'submitted');
        } else {
            "Anda Tidak Memiliki Akses Customer Data";
        }

        return view('dashboard.salesFolder.Kd3.gmSalesSubmit', [
            'kd03' => $kd03Outs,
        ]);
    }

    public function needDMFinance()
    {
        $kd03fix = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();

        $kd03 = $kd03fix->unique('no_cust');
        $kd03->all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd03Outs = $kd03->where('status_form', '==', 'acknowledged')->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd03Outs = $kd03->where('status_form', '==', 'acknowledged');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd03Outs = $kd03->where('status_form', '==', 'acknowledged');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd03Outs = $kd03->where('status_form', '==', 'acknowledged');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd03Outs = $kd03->where('status_form', '==', 'acknowledged');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd03Outs = $kd03->where('status_form', '==', 'acknowledged');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = $kd03->where('status_form', '==', 'acknowledged');
        } else {
            "Anda Tidak Memiliki Akses Customer Data";
        }

        return view('dashboard.salesFolder.Kd3.dmFinanceSubmit', [
            'kd03' => $kd03Outs,
        ]);
    }

    public function needGMFinance()
    {
        $kd03fix = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();

        $kd03 = $kd03fix->unique('no_cust');
        $kd03->all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 1')->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 1');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 1');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 1');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 1');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 1');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 1');
        } else {
            "Anda Tidak Memiliki Akses Customer Data";
        }

        return view('dashboard.salesFolder.Kd3.gmFinanceSubmit', [
            'kd03' => $kd03Outs,
        ]);
    }

    public function needDocControl()
    {
        $kd03fix = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();

        $kd03 = $kd03fix->unique('no_cust');
        $kd03->all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 2')->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 2');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 2');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 2');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 2');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 2');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = $kd03->where('status_form', '==', 'aprv 2');
        } else {
            "Anda Tidak Memiliki Akses Customer Data";
        }

        return view('dashboard.salesFolder.Kd3.docControl', [
            'kd03' => $kd03Outs,
        ]);
    }

    public function needFinish()
    {
        $kd03fix = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();

        $kd03 = $kd03fix->unique('no_cust');
        $kd03->all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd03Outs = $kd03->where('status_form', '==', 'inputted')->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd03Outs = $kd03->where('status_form', '==', 'inputted');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd03Outs = $kd03->where('status_form', '==', 'inputted');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd03Outs = $kd03->where('status_form', '==', 'inputted');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd03Outs = $kd03->where('status_form', '==', 'inputted');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd03Outs = $kd03->where('status_form', '==', 'inputted');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = $kd03->where('status_form', '==', 'inputted');
        } else {
            "Anda Tidak Memiliki Akses Customer Data";
        }

        return view('dashboard.salesFolder.Kd3.finish', [
            'kd03' => $kd03Outs,
        ]);
    }

    public function reject()
    {
        $kd03fix = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();

        $kd03 = $kd03fix->unique('no_cust');
        $kd03->all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd03Outs = $kd03->where('status_form', '==', 'rejected')->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd03Outs = $kd03->where('status_form', '==', 'rejected');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd03Outs = $kd03->where('status_form', '==', 'rejected');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd03Outs = $kd03->where('status_form', '==', 'rejected');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd03Outs = $kd03->where('status_form', '==', 'rejected');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd03Outs = $kd03->where('status_form', '==', 'rejected');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = $kd03->where('status_form', '==', 'rejected');
        } else {
            "Anda Tidak Memiliki Akses Customer Data";
        }

        return view('dashboard.salesFolder.Kd3.reject', [
            'kd03' => $kd03Outs,
        ]);
    }
}
