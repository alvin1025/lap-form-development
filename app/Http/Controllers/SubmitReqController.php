<?php

namespace App\Http\Controllers;

use App\Mail\Kd11ReqMail;
use App\Mail\Kd14ReqMail;
use App\Mail\Kd3ReqMail;
use App\Mail\Kd4ReqMail;
use App\Mail\Kd5ReqMail;
use App\Mail\Kd6ReqMail;
use App\Models\Kd03;
use App\Models\Kd03Req;
use App\Models\Kd04;
use App\Models\Kd04Request;
use App\Models\Kd05Req;
use App\Models\Kd06;
use App\Models\Kd06Req;
use App\Models\Kd11Req;
use App\Models\Kd14Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class SubmitReqController extends Controller
{
    public function OutReqKd3()
    {
        $kd03I = Kd03Req::all()->sortByDesc('id');
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd03 = $kd03I->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd03 = $kd03I->where('status_form', 'created');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd03 = $kd03I->where('status_form', 'aprv 1');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd03 = $kd03I->where('status_form', 'aprv 2');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03 = $kd03I->where('status_form', '!=', 'inputted');
        }
        return view('dashboard.salesFolder.request.submit.indexoutKd3', [
            'kd03' => $kd03
        ]);
    }

    public function OutReqKd4()
    {
        $kd04A = Kd04Request::all()->sortByDesc('id');
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd04 = $kd04A->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd04 = $kd04A->where('status_form', 'created');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd04 = $kd04A->where('status_form', 'submitted');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd04 = $kd04A->where('status_form', 'acknowledged');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd04 = $kd04A->where('status_form', 'aprv 1');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd04 = $kd04A->where('status_form', 'aprv 2');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd04 = $kd04A->where('status_form', '!=', 'inputted');
        }

        return view('dashboard.salesFolder.request.submit.indexoutKd4', [
            'kd04req' => $kd04
        ]);
    }

    public function OutReqKd5()
    {
        $kd05A = Kd05Req::all()->sortByDesc('id');
        // dd($kd05A);
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd05 = $kd05A->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd05 = $kd05A->where('status_form', 'created');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd05 = $kd05A->where('status_form', 'aprv 1');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd05 = $kd05A->where('status_form', 'aprv 2');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd05 = $kd05A;
        }

        return view('dashboard.salesFolder.request.submit.indexoutKd5', [
            'kd05' => $kd05
        ]);
    }

    public function OutReqKd6()
    {
        $kd06A = Kd06Req::all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd06 = $kd06A->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd06 = $kd06A->where('status_form', 'created');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd06 = $kd06A->where('status_form', 'submitted');
        } elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager') {
            $kd06 = $kd06A->where('status_form', 'acknowledged');
        } elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi') {
            $kd06 = $kd06A->where('status_form', 'aprv 1');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd06 = $kd06A->where('status_form', 'aprv 2');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd06 = $kd06A;
        }
        return view('dashboard.salesFolder.request.submit.indexoutKd6', [
            'kd06' => $kd06
        ]);
    }

    public function OutReqKd11()
    {
        $kd11A = Kd11Req::all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd11 = $kd11A->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd11 = $kd11A->where('status_form', 'created');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd11 = $kd11A->where('status_form', 'aprv 1');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd11 = $kd11A->where('status_form', 'aprv 2');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd11 = $kd11A;
        }
        return view('dashboard.salesFolder.request.submit.indexoutKd11', [
            'kd11' => $kd11
        ]);
    }

    public function OutReqKd14()
    {
        $kd14A = Kd14Req::all();
        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE') {
            $kd14 = $kd14A->where('emailUser', auth()->user()->email);
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES") {
            $kd14 = $kd14A->where('status_form', 'created');
        } elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") {
            $kd14 = $kd14A->where('status_form', 'aprv 1');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT') {
            $kd14 = $kd14A->where('status_form', 'aprv 2');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd14 = $kd14A;
        }
        return view('dashboard.salesFolder.request.submit.indexoutKd14', [
            'kd14' => $kd14
        ]);
    }


    public function submitReqKd3($id)
    {
        $kd3 = Kd03Req::find($id);
        $kd03 = Kd03::all()->where('no_cust', '=', 'no_cust');
        return view('dashboard.salesFolder.request.submit.submitkd3Req', [
            'kd3' => $kd3,
            'kd03' => $kd03
        ]);
    }

    public function submitReqKd4($id)
    {
        $kd04 = Kd04Request::find($id);
        return view('dashboard.salesFolder.request.submit.submitkd4Req', [
            'kd04' => $kd04
        ]);
    }

    public function submitReqKd5($id)
    {
        $kd05 = Kd05Req::find($id);
        return view('dashboard.salesFolder.request.submit.submitkd5Req', [
            'kd05' => $kd05
        ]);
    }

    public function submitReqKd6($id)
    {
        $kd06 = Kd06Req::find($id);
        return view('dashboard.salesFolder.request.submit.submitkd6Req', [
            'kd06' => $kd06
        ]);
    }

    public function submitReqKd11($id)
    {
        $kd11 = Kd11Req::find($id);
        return view('dashboard.salesFolder.request.submit.submitkd11Req', [
            'kd11' => $kd11
        ]);
    }

    public function submitReqKd14($id)
    {
        $kd14 = Kd14Req::find($id);
        return view('dashboard.salesFolder.request.submit.submitkd14Req', [
            'kd14' => $kd14
        ]);
    }

    public function updateReqKd3(Request $request, $id)
    {
        $kd03 = Kd03Req::where('id', $id)->first();

        $date = Carbon::today()->format('Y-m-d');
        $kd3 = [
            'title' => 'Aproval Form',
            'body' => 'Please Check Submit Form',
            'no_cust' => $kd03->no_cust,
            'nama' => $kd03->short_name,
            // 'status' => $sts
        ];
        // dd($kd3);
        if ($kd03->status_form == 'rejected') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputtedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = NULL;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputtedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd03->status_form == '') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = Auth()->user()->employee_name;
                $createdDate = $date;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputtedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = NULL;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputtedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd03->status_form == 'created') {
            if ($request->status_form == 'aprv 1') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = $kd03->created_by;
                $createdDate = $kd03->created_date;
                $apprv1 = Auth()->user()->employee_name;
                $aprv1Date = $date;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputtedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = $kd03->created_by;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputtedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd03->status_form == 'aprv 1') {
            if ($request->status_form == 'aprv 2') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = $kd03->created_by;
                $createdDate = $kd03->created_date;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = $kd03->aprv1_date;
                $apprv2 = Auth()->user()->employee_name;
                $aprv2Date = $date;
                $inputted = NULL;
                $inputtedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = $kd03->created_by;
                $createdDate = NULL;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputtedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd03->status_form == 'aprv 2') {
            if ($request->status_form == 'inputted') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = $kd03->created_by;
                $createdDate = $kd03->created_date;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = $kd03->aprv1_date;
                $apprv2 = $kd03->aprv2_by;
                $aprv2Date = $kd03->aprv2_date;
                $inputted = Auth()->user()->employee_name;
                $inputtedDate = $date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = $kd03->created_by;
                $createdDate = NULL;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd03->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputtedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd03->status_form == 'inputted') {
            if ($request->status_form == 'finished') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = $kd03->created_by;
                $createdDate = $kd03->created_date;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = $kd03->aprv1_date;
                $apprv2 = $kd03->aprv2_by;
                $aprv2Date = $kd03->aprv2_date;
                $inputted = $kd03->inputted_by;
                $inputtedDate = $kd03->inputed_date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = Auth()->user()->employee_name;
                $finishedDate = $date;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd3ReqMail($kd3));
                $created = $kd03->created_by;
                $createdDate = NULL;
                $apprv1 = $kd03->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd03->aprv2_by;
                $aprv2Date = NULL;
                $inputted = $kd03->inputted_by;
                $inputtedDate = $kd03->inputed_date;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        Kd03Req::where('id', $id)->update([
            'status_form' => $request->input('status_form'),
            'created_by' => $created,
            'reject_reason' => $request->input('reject_reason'),
            'rejectted_by' => $reject,
            'aprv1_by' => $apprv1,
            'aprv2_by' => $apprv2,
            'inputted_by' => $inputted,
            'inputed_date' => $inputtedDate,
            'reject_date' => $rejectDate,
            'created_date' => $createdDate,
            'aprv1_date' => $aprv1Date,
            'aprv2_date' => $aprv2Date,
            'finished_by' => $finished,
            'finished_date' => $finishedDate,
        ]);

        return redirect('/dashboard/salesFolder/change/request/submit/indexkd3')->with('success', 'KD03 Request Has Been Updated!');
    }

    public function updateReqKd4(Request $request, $id)
    {
        $kd04 = Kd04Request::where('id', $id)->first();

        $date = Carbon::today()->format('Y-m-d');

        $kd4 = [
            'title' => 'Aproval Form',
            'body' => 'Please Check Submit Form',
            'no_cust' => $kd04->kd4no_cust,
            'nama' => $kd04->credit_line_check,
            // 'status' => $sts
        ];
        if ($kd04->status_form == 'inputted') {
            if ($request->status_form == 'finished') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = $kd04->created_date;
                $submit = $kd04->submitted_by;
                $submitDate = $kd04->submited_date;
                $acknow = $kd04->acknowledged_by;
                $ackDate = $kd04->ack_date;
                $apprv1 = $kd04->aprv1_by;
                $aprv1Date = $kd04->aprv1_date;
                $apprv2 = $kd04->aprv2_by;
                $aprv2Date = $kd04->aprv2_date;
                $inputted = $kd04->	inputted_by;
                $inputedDate = $kd04->inputed_date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = Auth()->user()->employee_name;
                $finishedDate = $date;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = NULL;
                $submit = $kd04->submitted_by;
                $submitDate = NULL;
                $acknow = $kd04->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = $kd04->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd04->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd04->status_form == 'aprv 2') {
            if ($request->status_form == 'inputted') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = $kd04->created_date;
                $submit = $kd04->submitted_by;
                $submitDate = $kd04->submited_date;
                $acknow = $kd04->acknowledged_by;
                $ackDate = $kd04->ack_date;
                $apprv1 = $kd04->aprv1_by;
                $aprv1Date = $kd04->aprv1_date;
                $apprv2 = $kd04->aprv2_by;
                $aprv2Date = $kd04->aprv2_date;
                $inputted = Auth()->user()->employee_name;
                $inputedDate = $date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = NULL;
                $submit = $kd04->submitted_by;
                $submitDate = NULL;
                $acknow = $kd04->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = $kd04->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd04->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd04->status_form == 'aprv 1') {
            if ($request->status_form == 'aprv 2') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = $kd04->created_date;
                $submit = $kd04->submitted_by;
                $submitDate = $kd04->submited_date;
                $acknow = $kd04->acknowledged_by;
                $ackDate = $kd04->ack_date;
                $apprv1 = $kd04->aprv1_by;
                $aprv1Date = $kd04->aprv1_date;
                $apprv2 = Auth()->user()->employee_name;
                $aprv2Date = $date;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = NULL;
                $submit = $kd04->submitted_by;
                $submitDate = NULL;
                $acknow = $kd04->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = $kd04->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
            }
        }
        if ($kd04->status_form == 'acknowledged') {
            if ($request->status_form == 'aprv 1') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = $kd04->created_date;
                $submit = $kd04->submitted_by;
                $submitDate = $kd04->submited_date;
                $acknow = $kd04->acknowledged_by;
                $ackDate = $kd04->ack_date;
                $apprv1 = Auth()->user()->employee_name;
                $aprv1Date = $date;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;

            $creditlimit = ($kd04->credit_limit == null) ? $kd04->credit_limit_old : $kd04->credit_limit;
            $nodebtor = ($kd04->no_debitor == null) ? $kd04->no_debitor_old : $kd04->no_debitor;
            $nocredtor = ($kd04->no_creditor == null) ? $kd04->no_creditor_old  : $kd04->no_creditor;
            $nogroup = ($kd04->no_group_cust == null) ? $kd04->no_group_cust_old  : $kd04->no_group_cust;
            $credcust = ($kd04->credit_cust == null) ? $kd04->credit_cust_old  : $kd04->credit_cust;
            $credfrom = ($kd04->credit_from == null) ? $kd04->credit_from_old  : $kd04->credit_from;
            $credto = ($kd04->credit_to == null) ? $kd04->credit_to_old  : $kd04->credit_to;
            $credline = ($kd04->credit_line_check == null) ? $kd04->credit_line_check_old  : $kd04->credit_line_check;
            $blockdel = ($kd04->block_delivery == null) ? $kd04->block_delivery_old  : $kd04->block_delivery;
            $block = ($kd04->block == null) ? $kd04->block_old  : $kd04->block;
            $blockres = ($kd04->block_reason == null) ? $kd04->block_reason_old  : $kd04->block_reason;
            // dd($credcust);
            
            Kd04::where('kd4no_cust', $kd04->kd4no_cust)->update([
                'credit_limit' => $creditlimit,
                'no_debitor' => $nodebtor,
                'no_creditor' => $nocredtor,
                'no_group_cust' => $nogroup,
                'credit_cust' => $credcust,
                'credit_from' => $credfrom,
                'credit_to' => $credto,
                'credit_line_check' => $credline,
                'block_delivery' => $blockdel,
                'block' => $block,
                'block_reason' => $blockres,
            ]);

            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = NULL;
                $submit = $kd04->submitted_by;
                $submitDate = NULL;
                $acknow = $kd04->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
            }
        }
        if ($kd04->status_form == 'submitted') {
            if ($request->status_form == 'acknowledged') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = $kd04->created_date;
                $submit = $kd04->submitted_by;
                $submitDate = $kd04->submited_date;
                $acknow = Auth()->user()->employee_name;
                $ackDate = $date;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = NULL;
                $submit = $kd04->submitted_by;
                $submitDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
            }
        }
        if ($kd04->status_form == 'created') {
            if ($request->status_form == 'submitted') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = $kd04->created_date;
                $submit = Auth()->user()->employee_name;
                $submitDate = $date;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = $kd04->created_by;
                $createdDate = NULL;
                $submit = NULL;
                $submitDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
            }
        }
        if ($kd04->status_form == '') {
            Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
            if ($request->status_form == 'created') {
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $submit = NULL;
                $submitDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = NULL;
                $createdDate = NULL;
                $submit = NULL;
                $submitDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
            }
        }

        if ($kd04->status_form == 'rejected') {
            Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
            if ($request->status_form == 'created') {
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $submit = NULL;
                $submitDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd4ReqMail($kd4));
                $created = NULL;
                $createdDate = NULL;
                $submit = NULL;
                $submitDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
            }
        }

        Kd04Request::where('id', $id)->update([
            'status_form' => $request->input('status_form'),
            'created_by' => $created,
            'submitted_by' => $submit,
            'rejected_by' => $reject,
            'reject_reason' => $request->input('reject_reason'),
            'aprv1_by' => $apprv1,
            'aprv2_by' => $apprv2,
            'inputted_by' => $inputted,
            'finished_by' => $finished,
            'finished_date' => $finishedDate,
            'acknowledged_by' => $acknow,
            // 'reject_reason' => $request->input('reject_reason'),

            'reject_date' => $rejectDate,
            'created_date' => $createdDate,
            'submited_date' => $submitDate,
            'ack_date' => $ackDate,
            'aprv1_date' => $aprv1Date,
            'aprv2_date' => $aprv2Date,
            'inputed_date' => $inputedDate

        ]);
        
        // dd($request);
        return redirect('/dashboard/salesFolder/change/request/index/kd4')->with('success', 'KD04 Request Customer Has Been Updated!');
    }

    public function updateReqKd5(Request $request, $id)
    {
        $kd05 = Kd05Req::where('id', $id)->first();

        $date = Carbon::today()->format('Y-m-d');

        $kd5 = [
            'title' => 'Aproval Form',
            'body' => 'Please Check Submit Form',
            'no_cust' => $kd05->no_cust1,
            'nama' => $kd05->addresscode1,
            // 'status' => $sts
        ];

        if ($kd05->status_form == 'rejected') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = NULL;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd05->status_form == '') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = NULL;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd05->status_form == 'created') {
            if ($request->status_form == 'aprv 1') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = $kd05->created_by;
                $createdDate = $kd05->created_date;
                $apprv1 = Auth()->user()->employee_name;
                $aprv1Date = $date;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = $kd05->created_by;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputedDate = NULL;
                $inputted = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd05->status_form == 'aprv 1') {
            if ($request->status_form == 'aprv 2') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = $kd05->created_by;
                $createdDate = $kd05->created_date;
                $apprv1 = $kd05->aprv1_by;
                $aprv1Date = $kd05->aprv1_date;
                $apprv2 = Auth()->user()->employee_name;
                $aprv2Date = $date;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = $kd05->created_by;
                $createdDate = NULL;
                $apprv1 = $kd05->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd05->status_form == 'aprv 2') {
            if ($request->status_form == 'inputted') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = $kd05->created_by;
                $createdDate = $kd05->created_date;
                $apprv1 = $kd05->aprv1_by;
                $aprv1Date = $kd05->aprv1_date;
                $apprv2 = $kd05->aprv2_by;
                $aprv2Date = $kd05->aprv2_date;
                $inputted = Auth()->user()->employee_name;
                $inputedDate = $date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = $kd05->created_by;
                $createdDate = NULL;
                $apprv1 = $kd05->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd05->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd05->status_form == 'inputted') {
            if ($request->status_form == 'finished') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = $kd05->created_by;
                $createdDate = $kd05->created_date;
                $apprv1 = $kd05->aprv1_by;
                $aprv1Date = $kd05->aprv1_date;
                $apprv2 = $kd05->aprv2_by;
                $aprv2Date = $kd05->aprv2_date;
                $inputted = $kd05->inputed_date;
                $inputedDate = $date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = Auth()->user()->employee_name;
                $finishedDate = $date;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd5ReqMail($kd5));
                $created = $kd05->created_by;
                $createdDate = NULL;
                $apprv1 = $kd05->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd05->aprv2_by;
                $aprv2Date = NULL;
                $inputted = $kd05->inputted_by;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        Kd05Req::where('id', $id)->update([
            'status_form' => $request->input('status_form'),
            'created_by' => $created,
            'rejectted_by' => $reject,
            'aprv1_by' => $apprv1,
            'aprv2_by' => $apprv2,
            'inputted_by' => $inputted,
            'reject_reason' => $request->input('reject_reason'),
            'reject_date' => $rejectDate,
            'created_date' => $createdDate,
            'aprv1_date' => $aprv1Date,
            'aprv2_date' => $aprv2Date,
            'inputed_date' => $inputedDate,
            'finished_by' => $finished,
            'finished_date' => $finishedDate,
    
        ]);

        return redirect('/dashboard/salesFolder/change/request/index/kd5')->with('success', 'KD05 Request Has Been Updated!');
    }

    public function updateReqKd6(Request $request, $id)
    {

        $kd06 = Kd06Req::where('id', $id)->first();

        $date = Carbon::today()->format('Y-m-d');
        $kd6 = [
            'title' => 'Aproval Form',
            'body' => 'Please Check Submit Form',
            'no_cust' => $kd06->kd6no_cust,
            'nama' => $kd06->sd,
            'sg' => $kd06->kd6sg
            // 'status' => $sts
        ];
        if ($kd06->status_form == 'inputted') {
            if ($request->status_form == 'finished') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = $kd06->created_date;
                $submit = $kd06->submitted_by;
                $submitedDate = $kd06->submited_date;
                $acknow = $kd06->acknowledged_by;
                $ackDate = $kd06->ack_date;
                $apprv1 = $kd06->aprv1_by;
                $aprv1Date = $kd06->aprv1_date;
                $apprv2 = $kd06->aprv2_by;
                $aprv2Date = $kd06->aprv2_date;
                $inputted = $kd06->inputted_by;
                $inputedDate = $kd06->inputed_date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = Auth()->user()->employee_name;
                $finishedDate = $date;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = NULL;
                $submit = $kd06->submitted_by;
                $submitedDate = NULL;
                $acknow = $kd06->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = $kd06->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd06->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd06->status_form == 'aprv 2') {
            if ($request->status_form == 'inputted') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = $kd06->created_date;
                $submit = $kd06->submitted_by;
                $submitedDate = $kd06->submited_date;
                $acknow = $kd06->acknowledged_by;
                $ackDate = $kd06->ack_date;
                $apprv1 = $kd06->aprv1_by;
                $aprv1Date = $kd06->aprv1_date;
                $apprv2 = $kd06->aprv2_by;
                $aprv2Date = $kd06->aprv2_date;
                $inputted = Auth()->user()->employee_name;
                $inputedDate = $date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = NULL;
                $submit = $kd06->submitted_by;
                $submitedDate = NULL;
                $acknow = $kd06->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = $kd06->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd06->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd06->status_form == 'aprv 1') {
            if ($request->status_form == 'aprv 2') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = $kd06->created_date;
                $submit = $kd06->submitted_by;
                $submitedDate = $kd06->submited_date;
                $acknow = $kd06->acknowledged_by;
                $ackDate = $kd06->ack_date;
                $apprv1 = $kd06->aprv1_by;
                $aprv1Date = $kd06->aprv1_date;
                $apprv2 = Auth()->user()->employee_name;
                $aprv2Date = $date;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = NULL;
                $submit = $kd06->submitted_by;
                $submitedDate = NULL;
                $acknow = $kd06->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = $kd06->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        // dm finance
        if ($kd06->status_form == 'acknowledged') {
            if ($request->status_form == 'aprv 1') {
                // Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = $kd06->created_date;
                $submit = $kd06->submitted_by;
                $submitedDate = $kd06->submited_date;
                $acknow = $kd06->acknowledged_by;
                $ackDate = $kd06->ack_date;
                $apprv1 = auth()->user()->employee_name;
                $aprv1Date = $date;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;

                $payterm = ($kd06->payterm == null) ? $kd06->payterm_old : $kd06->payterm;
            Kd06::where('kd6no_cust', $kd06->kd6no_cust)->where('sd', $kd06->sd_old)->where('kd6sg', $kd06->kd6sg_old)->update([
                'payterm' => $payterm,
            ]);
            } elseif ($request->status_form == 'rejected') {
                // Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = NULL;
                $submit = $kd06->submitted_by;
                $submitedDate = NULL;
                $acknow = $kd06->acknowledged_by;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        // gm
        if ($kd06->status_form == 'submitted') {
            if ($request->status_form == 'acknowledged') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = $kd06->created_date;
                $submit = $kd06->submitted_by;
                $submitedDate = $kd06->submited_date;
                $acknow = Auth()->user()->employee_name;
                $ackDate = $date;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = NULL;
                $submit = $kd06->submitted_by;
                $submitedDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        // dm
        if ($kd06->status_form == 'created') {
            if ($request->status_form == 'submitted') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = $kd06->created_by;
                $createdDate = $kd06->created_date;
                $submit = Auth()->user()->employee_name;
                $submitedDate = $date;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = NULL;
                $createdDate = NULL;
                $submit = NULL;
                $submitedDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        // sdm
        if ($kd06->status_form == '') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $submit = NULL;
                $submitedDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = NULL;
                $createdDate = NULL;
                $submit = NULL;
                $submitedDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd06->status_form == 'rejected') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $submit = NULL;
                $submitedDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd6ReqMail($kd6));
                $created = auth()->user()->employee_name;
                $createdDate = NULL;
                $submit = NULL;
                $submitedDate = NULL;
                $acknow = NULL;
                $ackDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        Kd06Req::where('id', $id)->update([
            'status_form' => $request->input('status_form'),
            'created_by' => $created,
            'submitted_by' => $submit,
            'rejected_by' => $reject,
            'reject_reason' => $request->input('reject_reason'),
            'aprv1_by' => $apprv1,
            'aprv2_by' => $apprv2,
            'inputted_by' => $inputted,
            'acknowledged_by' => $acknow,
            'reject_date' => $rejectDate,
            'created_date' => $createdDate,
            'submited_date' => $submitedDate,
            'ack_date' => $ackDate,
            'aprv1_date' => $aprv1Date,
            'aprv2_date' => $aprv2Date,
            'inputed_date' => $inputedDate,
            'finished_by' => $finished,
            'finished_date' => $finishedDate,

        ]);
        // dd($request);
        return redirect('/dashboard/salesFolder/change/request/index/kd6')->with('success', 'KD06 Request Customer Has Been Updated!');
    }

    public function updateReqKd11(Request $request, $id)
    {
        $kd011 = Kd11Req::where('id', $id)->first();

        $date = Carbon::today()->format('Y-m-d');

        $kd11 = [
            'title' => 'Aproval Form',
            'body' => 'Please Check Submit Form',
            'no_cust' => $kd011->kd11no_cust,
            'nama' => $kd011->association_no1,
            // 'status' => $sts
        ];
        if ($kd011->status_form == 'rejected') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = NULL;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        if ($kd011->status_form == '') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = NULL;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        if ($kd011->status_form == 'created') {
            if ($request->status_form == 'aprv 1') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = $kd011->created_by;
                $createdDate = $kd011->created_date;
                $apprv1 = Auth()->user()->employee_name;
                $aprv1Date = $date;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = $kd011->created_by;;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        if ($kd011->status_form == 'aprv 1') {
            if ($request->status_form == 'aprv 2') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = $kd011->created_by;
                $createdDate = $kd011->created_date;
                $apprv1 = $kd011->aprv1_by;
                $aprv1Date = $kd011->aprv1_date;
                $apprv2 = Auth()->user()->employee_name;
                $aprv2Date = $date;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = $kd011->created_by;
                $createdDate = NULL;
                $apprv1 = $kd011->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        if ($kd011->status_form == 'aprv 2') {
            if ($request->status_form == 'inputted') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = $kd011->created_by;
                $createdDate = $kd011->created_date;
                $apprv1 = $kd011->aprv1_by;
                $aprv1Date = $kd011->aprv1_date;
                $apprv2 = $kd011->aprv2_by;
                $aprv2Date = $kd011->aprv2_date;
                $inputted = Auth()->user()->employee_name;
                $inputedDate = $date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = $kd011->created_by;
                $createdDate = NULL;
                $apprv1 = $kd011->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd011->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        if ($kd011->status_form == 'inputted') {
            if ($request->status_form == 'finished') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = $kd011->created_by;
                $createdDate = $kd011->created_date;
                $apprv1 = $kd011->aprv1_by;
                $aprv1Date = $kd011->aprv1_date;
                $apprv2 = $kd011->aprv2_by;
                $aprv2Date = $kd011->aprv2_date;
                $inputted = $kd011->inputted_by;
                $inputedDate = $kd011->inputed_date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = Auth()->user()->employee_name;
                $finishedDate = $date;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd11ReqMail($kd11));
                $created = $kd011->created_by;
                $createdDate = NULL;
                $apprv1 = $kd011->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd011->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        Kd11Req::where('id', $id)->update([
            'status_form' => $request->input('status_form'),
            'created_by' => $created,
            'rejectted_by' => $reject,
            'aprv1_by' => $apprv1,
            'aprv2_by' => $apprv2,
            'inputted_by' => $inputted,
            'reject_reason' => $request->input('reject_reason'),
            'reject_date' => $rejectDate,
            'created_date' => $createdDate,
            'aprv1_date' => $aprv1Date,
            'aprv2_date' => $aprv2Date,
            'inputed_date' => $inputedDate,
            'finished_by' => $finished,
            'finished_date' => $finishedDate,
        ]);

        return redirect('/dashboard/salesFolder/change/request/index/kd11')->with('success', 'KD11 Request Has Been Updated!');
    }

    public function updateReqKd14(Request $request, $id)
    {
        $kd14 = Kd14Req::where('id', $id)->first();

        $date = Carbon::today()->format('Y-m-d');

        $kd014 = [
            'title' => 'Aproval Form',
            'body' => 'Please Check Submit Form',
            'no_cust' => $kd14->kd14no_cust,
            'nama' => $kd14->cp1,
            // 'status' => $sts
        ];
        if ($kd14->status_form == 'rejected') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = NULL;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        if ($kd14->status_form == '') {
            if ($request->status_form == 'created') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = auth()->user()->employee_name;
                $createdDate = $date;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = NULL;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }

        if ($kd14->status_form == 'created') {
            if ($request->status_form == 'aprv 1') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = $kd14->created_by;
                $createdDate = $kd14->created_date;
                $apprv1 = Auth()->user()->employee_name;
                $aprv1Date = $date;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = $kd14->created_by;
                $createdDate = NULL;
                $apprv1 = NULL;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd14->status_form == 'aprv 1') {
            if ($request->status_form == 'aprv 2') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = $kd14->created_by;
                $createdDate = $kd14->created_date;
                $apprv1 = $kd14->aprv1_by;
                $aprv1Date = $kd14->aprv1_date;
                $apprv2 = Auth()->user()->employee_name;
                $aprv2Date = $date;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = $kd14->created_by;
                $createdDate = NULL;
                $apprv1 = $kd14->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = NULL;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd14->status_form == 'aprv 2') {
            if ($request->status_form == 'inputted') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = $kd14->created_by;
                $createdDate = $kd14->created_date;
                $apprv1 = $kd14->aprv1_by;
                $aprv1Date = $kd14->aprv1_date;
                $apprv2 = $kd14->aprv2_by;
                $aprv2Date = $kd14->aprv2_date;
                $inputted = Auth()->user()->employee_name;
                $inputedDate = $date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = NULL;
                $finishedDate = NULL;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = $kd14->created_by;
                $createdDate = NULL;
                $apprv1 = $kd14->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd14->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        if ($kd14->status_form == 'inputted') {
            if ($request->status_form == 'finished') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = $kd14->created_by;
                $createdDate = $kd14->created_date;
                $apprv1 = $kd14->aprv1_by;
                $aprv1Date = $kd14->aprv1_date;
                $apprv2 = $kd14->aprv2_by;
                $aprv2Date = $kd14->aprv2_date;
                $inputted = $kd14->aprv2_date;
                $inputedDate = $kd14->aprv2_date;
                $reject = NULL;
                $rejectDate = NULL;
                $finished = Auth()->user()->employee_name;
                $finishedDate = $date;
            } elseif ($request->status_form == 'rejected') {
                Mail::to('alvin.fadhilah03@gmail.com')->send(new Kd14ReqMail($kd014));
                $created = $kd14->created_by;
                $createdDate = NULL;
                $apprv1 = $kd14->aprv1_by;
                $aprv1Date = NULL;
                $apprv2 = $kd14->aprv2_by;
                $aprv2Date = NULL;
                $inputted = NULL;
                $inputedDate = NULL;
                $reject = Auth()->user()->employee_name;
                $rejectDate = $date;
                $finished = NULL;
                $finishedDate = NULL;
            }
        }
        Kd14Req::where('id', $id)->update([
            'status_form' => $request->input('status_form'),
            'created_by' => $created,
            'rejectted_by' => $reject,
            'aprv1_by' => $apprv1,
            'aprv2_by' => $apprv2,
            'inputted_by' => $inputted,
            'reject_reason' => $request->input('reject_reason'),
            'reject_date' => $rejectDate,
            'created_date' => $createdDate,
            'aprv1_date' => $aprv1Date,
            'aprv2_date' => $aprv2Date,
            'inputed_date'=> $inputedDate,
            'finished_by' => $finished,
            'finished_date' => $finishedDate,
        ]);

        return redirect('/dashboard/salesFolder/change/request/index/kd14')->with('success', 'KD14 Request Has Been Updated!');
    }
}
