<?php

namespace App\Http\Controllers;

use App\Models\AgentMaster;
use App\Models\Assignment;
use App\Models\BizType;
use App\Models\BlockReason;
use App\Models\Classes;
use App\Models\ClmAsi;
use App\Models\CreditLimit;
use App\Models\DelCon;
use App\Models\Kd03;
use App\Models\Kd03Req;
use App\Models\Kd04;
use App\Models\Kd04Request;
use App\Models\Kd05;
use App\Models\Kd05Req;
use App\Models\Kd06;
use App\Models\Kd06Req;
use App\Models\Kd11;
use App\Models\Kd11Req;
use App\Models\Kd14;
use App\Models\Kd14Req;
use App\Models\KodeCountry;
use App\Models\Kurs;
use App\Models\Negara;
use App\Models\PayTerm;
use App\Models\Satuan;
use App\Models\Sd;
use App\Models\Sg;
use App\Models\Tax;
use App\Models\Tittle;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestChangeKdController extends Controller
{
    public function change()
    {
        $kd03 = Kd03::all();
        $kd03req = Kd03::all()->where('n');
        return view('dashboard.salesFolder.request.dashboardrequest', [
            'kd03s' => $kd03
        ]);
    }

    public function showkd3($id)
    {
        $kd3 = Kd03::find($id);
        $title = Tittle::all();
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $tax = Tax::all();
        return view('dashboard.salesFolder.request.kd3ReqShow', [
            'kd03' => $kd3,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'taxs' => $tax,
        ]);
    }

    public function editkd03($id)
    {
        $title = Tittle::all();
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $tax = Tax::all();
        $kd03Req = Kd03Req::findOrFail($id);
        return view('dashboard.salesFolder.request.editkd03', [
            'kd03' => $kd03Req,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'taxs' => $tax,
        ]);
    }

    public function updatekd03(Request $request, $kd03)
    {
        // dd($request);
        $validated = $request->validate([
            'class' => 'nullable',
            'no_cust' => 'nullable',
            'title' => 'nullable',
            // 'kode_cust' => 'nullable',
            'kode_county' => 'nullable',
            'kota' => 'nullable',
            'email' => 'nullable',
            'telp' => 'nullable',
            'npwp' => 'nullable',
            'short_name' => 'nullable',
            'nama1' => 'nullable',
            'nama2' => 'nullable',
            'street' => 'nullable',
            'negara' => 'nullable',
            'addit' => 'nullable',
            'postal_code' => 'nullable',
            'po_box' => 'nullable',
            'tax' => 'nullable',
            'mobile' => 'nullable',
            'home' => 'nullable',
            'fax' => 'nullable',
            'status' => 'nullable',
            // new
            'class_old' => 'nullable',
            'status_old' => 'nullable',
            'title_old' => 'nullable',
            'negara_old' => 'nullable',
            'kode_county_old' => 'nullable',
            'kota_old' => 'nullable',
            'email_old' => 'nullable',
            'telp_old' => 'nullable',
            'npwp_old' => 'nullable',
            'short_name_old	' => 'nullable',
            'nama1_old' => 'nullable',
            'nama2_old' => 'nullable',
            'street_old' => 'nullable',
            'addit_old' => 'nullable',
            'postal_code_old' => 'nullable',
            'po_box_old' => 'nullable',
            'tax_old' => 'nullable',
            'mobile_old' => 'nullable',
            'home_old' => 'nullable',
            'fax_old' => 'nullable',
            'ktp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'npwp_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($file = $request->file('ktp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($file->getClientOriginalName());
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-ktpReq/';
            $image_url = $upload_path . $image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['ktp_image'] = $image;
        }else {
            $validated['ktp_image'] = $kd03->ktp_image;
        }
        
        // dd($kd03->ktp_image);
        if ($files = $request->file('npwp_image')) {
            $month = Carbon::now()->format('m');
            $year = Carbon::now()->format('y');
            $no = $request->no_cust;
            $image_name = strtolower($files->getClientOriginalName());
            $image_full_name = 'Kd03' . $year . $month . $no . rand(1, 50) . "." . $image_name;
            $upload_path = 'Kd03-npwpReq/';
            $image_url = $upload_path . $image_full_name;
            $files->move($upload_path, $image_full_name);
            $image = $image_url;
            $validated['npwp_image'] = $image;
        }else {
            $validated['npwp_image'] = $kd03->npwp_image;
        }



        Kd03Req::where('id', $kd03->id)->update($validated);
        return redirect('/dashboard/salesFolder/change/request/submit/indexkd3')->with('success', 'Kd03 Request Has Been Updated!');
    }

    public function showkd4($id)
    {
        $kd4 = Kd04::find($id);
        $credit = CreditLimit::all();
        $block = BlockReason::all();
        return view('dashboard.salesFolder.request.kd4ReqShow', [
            'kd04' => $kd4,
            'credits' => $credit,
            'blocks' => $block,
        ]);
    }

    public function showkd5($no_cust)
    {
        $kd5 = Kd05::find($no_cust);
        $title = Tittle::all();
        $tax = Tax::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        return view('dashboard.salesFolder.request.kd5ReqShow', [
            'titles' => $title,
            'taxs' => $tax,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kd05' => $kd5,
        ]);
    }

    public function addressNew($no_cust){
        $kd5 = Kd05::find($no_cust);
        $title = Tittle::all();
        $tax = Tax::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        return view('dashboard.salesFolder.request.kd5createSame', [
            'titles' => $title,
            'taxs' => $tax,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kd05' => $kd5,
            'no_cust1' => $no_cust
        ]);
    }

    public function showkd6($id)
    {
        $kd6 = Kd06::find($id);
        $user = User::all()->where('division', '==',  'FABRIC SALES')->where('jabatan', '==', 'Sub Division Manager');
        $sd = Sd::all();
        $sg = Sg::all();
        $pays = PayTerm::all();
        $bizType = BizType::all();
        $tax = Tax::all();
        $assignment = Assignment::all();
        $delCon = DelCon::all();
        $kurs = Kurs::all();
        $satuan = Satuan::all();
        $negara = Negara::all();
        $agent = AgentMaster::all();
        $clm = ClmAsi::all();
        return view('dashboard.salesFolder.request.kd6ReqShow', [
            'sds' => $sd,
            'sgs' => $sg,
            'agents' => $agent,
            'users' => $user,
            'bizTypes' => $bizType,
            'taxs' => $tax,
            'assignments' => $assignment,
            'delCons' => $delCon,
            'kurses' => $kurs,
            'satuans' => $satuan,
            'pays' => $pays,
            'negaras' => $negara,
            'kd06' => $kd6,
            'clms' => $clm
        ]);
    }

    public function createNewKd6($kd6no_cust)
    {
        // $kd6 = ModelsKd06::all();
        $user = auth()->user()->employee_name;
        $sd = Sd::all();
        $sg = Sg::all();
        $pays = PayTerm::all();
        $bizType = BizType::all();
        $tax = Tax::all();
        $assignment = Assignment::all();
        $delCon = DelCon::all();
        $kurs = Kurs::all();
        $satuan = Satuan::all();
        $negara = Negara::all();
        $agent = AgentMaster::all();
        $clm = ClmAsi::all();
        return view('dashboard.salesFolder.request.kd6createNewKd6', [
            'sds' => $sd,
            'sgs' => $sg,
            'agents' => $agent,
            'users' => $user,
            'bizTypes' => $bizType,
            'taxs' => $tax,
            'assignments' => $assignment,
            'delCons' => $delCon,
            'kurses' => $kurs,
            'satuans' => $satuan,
            'pays' => $pays,
            'negaras' => $negara,
            // 'kd06' => $kd6,
            'clms' => $clm,
            'kd6no_cust' => $kd6no_cust
        ]);
    }

    public function showkd11($id)
    {
        $kd11 = Kd11::find($id);
        $kd6 = Kd06::where('kd6no_cust', $kd11->kd11no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $kd06 = $kd6->distinct('kd6sg')->get('kd6sg');
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');

        return view('dashboard.salesFolder.request.kd11ReqShow', [
            'sds' => $sd,
            // 'sgs' => $sg,
            'kd11' => $kd11,
            'assocs' => $assoc,
            'kd06' => $kd06
        ]);
    }

    public function createNewKd11($kd11no_cust)
    {
        $kd11 = Kd11::all();
        $kd6 = Kd06::where('kd6no_cust', $kd11no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');
        return view('dashboard.salesFolder.request.kd11createNewKd11', [
            'sds' => $sd,
            'kd06' => $sg,
            'kd11' => $kd11,
            'assocs' => $assoc,
            'kd11no_cust' => $kd11no_cust,
            // 'kd06' => $kd06
        ]);
    }

    public function createNewKd14($kd14no_cust)
    {
        $kd14 = Kd14::all();
        $s = Kd05::where('no_cust1', $kd14no_cust);
        $kd6 = Kd06::where('kd6no_cust', $kd14no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $kd05 = $s->distinct('addresscode1')->get('addresscode1');
        return view('dashboard.salesFolder.request.kd14createNewKd14', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14,
            'kd05' => $kd05,
            'kd14no_cust' => $kd14no_cust
        ]);
    }

    public function showkd14($reqkd14)
    {
        $kd14 = Kd14::find($reqkd14);
        $s = Kd05::where('no_cust1', $kd14->kd14no_cust);
        $kd6 = Kd06::where('kd6no_cust', $kd14->kd14no_cust);

        $sd = $kd6->distinct('sd')->get('sd');
        $sg = $kd6->distinct('kd6sg')->get('kd6sg');
        $kd05 = $s->distinct('addresscode1')->get('addresscode1');

        return view('dashboard.salesFolder.request.kd14ReqShow', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14,
            'kd05' => $kd05
        ]);
    }

    public function kd3reqindex()
    {
        $kd03I = Kd03Req::all()->sortByDesc('id');
            $sdm = $kd03I->where('emailUser', auth()->user()->email)->count();
            $dm = $kd03I->where('status_form', 'created')->count();
            $gm = $kd03I->where('status_form', 'aprv 1')->count();
            $doc = $kd03I->where('status_form', 'aprv 2')->count();
            $mis = $kd03I->count();

        $kd3 = Kd03::all()->where('status_form', 'finished');
        return view('dashboard.salesFolder.request.kd3ReqIndex', [
            'kd03' => $kd3,
            'sdm' => $sdm,
            'dm' => $dm,
            'gm' => $gm,
            'doc' => $doc,
            'mis' => $mis,
        ]);
    }

    public function kd4reqindex()
    {
        $kd04A = Kd04Request::all()->sortByDesc('id');
            $sdm = $kd04A->where('status_form', '!=', 'inputted')->where('emailUser', auth()->user()->email)->count();
            $dm = $kd04A->where('status_form', 'created')->count();
            $gm = $kd04A->where('status_form', 'submitted')->count();
            $dmFin = $kd04A->where('status_form', 'acknowledged')->count();
            $gmFin = $kd04A->where('status_form', 'aprv 1')->count();
            $doc = $kd04A->where('status_form', 'aprv 2')->count();
            $mis = $kd04A->where('status_form', '!=', 'inputted')->count();
        
        $kd4 = Kd04::all()->where('status_form', 'finished');
        return view('dashboard.salesFolder.request.kd4ReqIndex', [
            'kd04' => $kd4,
            'sdm' => $sdm,
            'dm' => $dm,
            'gm' => $gm,
            'dmFin' => $dmFin,
            'gmFin' => $gmFin,
            'doc' => $doc,
            'mis' => $mis,
        ]);
    }

    public function kd5reqindex()
    {

        $kd05A = Kd05Req::all()->sortByDesc('id');
        // dd($kd05A);
            $sdm = $kd05A->where('status_form', '!=', 'inputted')->where('emailUser', auth()->user()->email)->count();
            $dm = $kd05A->where('status_form', 'created')->count();
            $gm = $kd05A->where('status_form', 'aprv 1')->count();
            $doc = $kd05A->where('status_form', 'aprv 2')->count();
            $mis = $kd05A->where('status_form', '!=', 'inputted')->count();
        

        $kd5 = DB::table('kd05')
            ->leftJoin('kd03', 'kd05.no_cust1', '=', 'kd03.no_cust')
            ->get();
        if (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd05Outs = $kd5;
        } else {
            $kd05Outs = $kd5->where('status_form', 'finished');
        }

        $kd05 = Kd05::all()->where('status_form', 'finished');
        return view('dashboard.salesFolder.request.kd5ReqIndex', [
            'kd05' => $kd05,
            'sdm' => $sdm,
            'dm' => $dm,
            'gm' => $gm,
            'doc' => $doc,
            'mis' => $mis,
        ]);
    }

    public function kd6reqindex()
    {
        $kd06A = Kd06Req::all();
            $sdm = $kd06A->where('status_form', '!=', 'inputted')->where('emailUser', auth()->user()->email)->count();
            $dm = $kd06A->where('status_form', 'created')->count();
            $gm = $kd06A->where('status_form', 'submitted')->count();
            $dmFin = $kd06A->where('status_form', 'acknowledged')->count();
            $gmFin = $kd06A->where('status_form', 'aprv 1')->count();
            $doc = $kd06A->where('status_form', 'aprv 2')->count();
            $mis = $kd06A->where('status_form', '!=', 'inputted')->count();

        $kd6 = DB::table('kd06')
            ->leftJoin('kd03', 'kd06.kd6no_cust', '=', 'kd03.no_cust')
            ->get();


        if (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd06Outs = $kd6;
        } else {
            $kd06Outs = $kd6->where('status_form', 'finished');
        }

        $kd06 = Kd06::all()->where('status_form', 'finished');
        return view('dashboard.salesFolder.request.kd6ReqIndex', [
            'kd06' => $kd06,
            'sdm' => $sdm,
            'dm' => $dm,
            'gm' => $gm,
            'dmFin' => $dmFin,
            'gmFin' => $gmFin,
            'doc' => $doc,
            'mis' => $mis,
        ]);
    }

    public function kd11reqindex()
    {
        $kd11A = Kd11Req::all();
            $sdm = $kd11A->where('status_form', '!=', 'inputted')->where('emailUser', auth()->user()->email)->count();
            $dm = $kd11A->where('status_form', 'created')->count();
            $gm = $kd11A->where('status_form', 'aprv 1')->count();
            $doc = $kd11A->where('status_form', 'aprv 2')->count();
            $mis = $kd11A->where('status_form', '!=', 'inputted');
        
        $kd11 = Kd11::all()->where('status_form', 'finished');

        return view('dashboard.salesFolder.request.kd11ReqIndex', [
            'kd11' => $kd11,
            'sdm' => $sdm,
            'dm' => $dm,
            'gm' => $gm,
            'doc' => $doc,
            'mis' => $mis,
        ]);
    }

    public function kd14reqindex()
    {
        $kd14A = Kd14Req::all();
            $sdm = $kd14A->where('status_form', '!=', 'inputted')->where('emailUser', auth()->user()->email)->count();
            $dm = $kd14A->where('status_form', 'created')->count();
            $gm = $kd14A->where('status_form', 'aprv 1')->count();
            $doc = $kd14A->where('status_form', 'aprv 2')->count();
            $mis = $kd14A->where('status_form', '!=', 'finished')->count();
        

        $kd14 = Kd14::all()->where('status_form', 'finished');
        return view('dashboard.salesFolder.request.kd14ReqIndex', [
            'kd14' => $kd14,
            'sdm' => $sdm,
            'dm' => $dm,
            'gm' => $gm,
            'doc' => $doc,
            'mis' => $mis,
        ]);
    }





    public function storeKd3(Request $request)
    {
        $validated = $request->validate([
            'class' => 'nullable',
            'no_cust' => 'nullable',
            'title' => 'nullable',
            'kode_cust' => 'nullable',
            'kode_county' => 'nullable',
            'kota' => 'nullable',
            'email' => 'nullable',
            'telp' => 'nullable',
            'npwp' => 'nullable',
            'short_name' => 'nullable',
            'nama1' => 'nullable',
            'nama2' => 'nullable',
            'street' => 'nullable',
            'negara' => 'nullable',
            'addit' => 'nullable',
            'postal_code' => 'nullable',
            'po_box' => 'nullable',
            'tax' => 'nullable',
            'mobile' => 'nullable',
            'home' => 'nullable',
            'fax' => 'nullable',
            'status' => 'nullable',
            'created_by' => 'nullable',
            'submitted_by' => 'nullable',
            'status_form' => 'nullable',
            'aprv1_by' => 'nullable',
            'aprv2_by' => 'nullable',
            'inputted_by' => 'nullable',
            'finished_by' => 'nullable',
            'rejectted_by' => 'nullable',
            'reject_reason' => 'nullable',
            'status_form' => 'nullable',
            'status_old' => 'nullable',
        ]);
        Kd03Req::create($validated);
        return redirect('/dashboard/salesFolder/kd03request')->with('success', 'Kd03 Request Has Been Updated!');
    }
}
