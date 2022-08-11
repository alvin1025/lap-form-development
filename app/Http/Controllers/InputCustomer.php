<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kd03StoreRequest;
use App\Http\Requests\Kd03UpdateRequest;
use App\Imports\Kd03Import;
use App\Imports\Kd04Import;
use App\Imports\Kd05Import;
use App\Imports\Kd06Import;
use App\Imports\Kd11Import;
use App\Imports\Kd14Import;
use App\Models\Agent;
use App\Models\Assignment;
use App\Models\Assiociation;
use App\Models\BizType;
use App\Models\BlockReason;
use App\Models\Classes;
use App\Models\ClmAsi;
use App\Models\CreditLimit;
use App\Models\Cutting;
use App\Models\DelCon;
use App\Models\JenisBisnis;
use App\Models\Kd03;
use App\Models\Kd04;
use App\Models\Kd05;
use App\Models\Kd06;
use App\Models\Kd11;
use App\Models\Kd14;
use App\Models\KepemilikanKantor;
use App\Models\KodeCountry;
use App\Models\Kurs;
use App\Models\Negara;
use App\Models\OrientasiMarket;
use App\Models\Packing;
use App\Models\PayTerm;
use App\Models\PermintaanInputCustomer;
use App\Models\Satuan;
use App\Models\Sd;
use App\Models\Sg;
use App\Models\StdSample;
use App\Models\Tax;
use App\Models\TipePerusahaan;
use App\Models\Tittle;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

use function GuzzleHttp\Promise\all;

class InputCustomer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kd03 = Kd03::all();
        $kd03 = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();

        $kd03Outs = Kd03::all()->where('status_form <>', 'created');
        $kd03OutFin = Kd03::all()->where('status_form', 'waiting fin approval');
        $kd03OutGm = Kd03::all()->where('status_form', 'waiting gm approval');
        $kd03OutDm = Kd03::all()->where('status_form', 'created');
        $kd04 = Kd04::all();
        $kd05 = Kd05::all();
        $kd06 = Kd06::all();
        $kd11 = Kd11::all();
        $kd14 = Kd14::all();
        return view('dashboard.salesFolder.Inputan.index', [
            'kd03' => $kd03,
            'kd04' => $kd04,
            'kd05' => $kd05,
            'kd06' => $kd06,
            'kd11' => $kd11,
            'kd14' => $kd14,
            'kd03Outs' => $kd03Outs,
            'kd03OutFin' => $kd03OutFin,
            'kd03OutGm' => $kd03OutGm,
            'kd03OutDm' => $kd03OutDm
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
        $kd05 = Kd05::all();
        $kd04 = Kd04::all();
        $kd06 = Kd06::all();
        $kd03 = Kd03::all();
        $kd11 = Kd11::all();
        $kd14 = Kd14::all();
        $user = User::all()->where('division', '==',  'FABRIC SALES');
        $customer = PermintaanInputCustomer::all();
        $title = Tittle::all();
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $sd = Sd::all();
        $sg = Sg::all();
        $bizType = BizType::all();
        $tax = Tax::all();
        $assignment = Assignment::all();
        $delCon = DelCon::all();
        $kurs = Kurs::all();
        $satuan = Satuan::all();
        $packing = Packing::all();
        $cutting = Cutting::all();
        $stdtSample = StdSample::all();
        $credit = CreditLimit::all();
        $pays = PayTerm::all();
        $orientasi = OrientasiMarket::all();
        $tipe = TipePerusahaan::all();
        $jenis = JenisBisnis::all();
        $milik = KepemilikanKantor::all();
        $agent = Agent::all();
        $block = BlockReason::all();
        $clm = ClmAsi::all();
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');

        return view('dashboard.salesFolder.Inputan.create', [
            'kd03' => $kd03,
            'kd05' => $kd05,
            'kd04' => $kd04,
            'kd06' => $kd06,
            'kd11' => $kd11,
            'kd14' => $kd14,
            'users' => $user,
            'blocks' => $block,
            'customers' => $customer,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'sds' => $sd,
            'sgs' => $sg,
            'bizTypes' => $bizType,
            'taxs' => $tax,
            'assignments' => $assignment,
            'delCons' => $delCon,
            'kurses' => $kurs,
            'satuans' => $satuan,
            'packings' => $packing,
            'cuttings' => $cutting,
            'stdSamples' => $stdtSample,
            'credits' => $credit,
            'pays' => $pays,
            'orientasis' => $orientasi,
            'tipes' => $tipe,
            'jenises' => $jenis,
            'kepemilikan' => $milik,
            'no' => $nomer,
            'agents' => $agent,
            'clms' => $clm,
            'assocs' => $assoc
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Kd03StoreRequest $request)
    {
        $kd04 = Kd04::all();
        $kd05 = Kd05::all();
        $kd06 = Kd06::all();
        $kd11 = Kd11::all();
        $kd14 = Kd14::all();
        // dd($request);
        // DB::beginTransaction();
        $validated = $request->validated();
        // try {
        // dd($validated);
        $kd03 = Kd03::create($validated);

        $kd04 = new Kd04();
        $kd04->id = $kd03->id;
        $kd04->credit_limit = $request->credit_limit;
        $kd04->credit_limit2 = $request->credit_limit2;
        $kd04->credit_limit3 = $request->credit_limit3;
        $kd04->credit_limit4 = $request->credit_limit4;
        $kd04->credit_limit5 = $request->credit_limit5;
        $kd04->payterm = $request->payterm;
        $kd04->alasan_perubahan = $request->alasan_perubahan;
        $kd04->history_pembayaran = $request->history_pembayaran;
        $kd04->kd4no_cust = $request->kd4no_cust;
        $kd04->no_debitor = $request->no_debitor;
        $kd04->no_creditor = $request->no_creditor;
        $kd04->no_group_cust = $request->no_group_cust;
        $kd04->credit_cust = $request->credit_cust;
        $kd04->credit_from = $request->credit_from;
        $kd04->credit_to = $request->credit_to;
        $kd04->credit_line_check = $request->credit_line_check;
        $kd04->block_delivery = $request->block_delivery;
        $kd04->block = $request->block;
        $kd04->block_reason = $request->block_reason;
        $kd04->save();


        $kd05 = new Kd05();
        $kd05->title1 = $request->title1;
        // $cust = $kd03->no_cust;
        // dd($cust);
        // $cust = max(['no_cust']);
        $kd05->no_cust1 = $request->no_cust1;
        $kd05->id = $kd03->id;
        // $address =$kd05->address_code1 = $request->address_code1;
        $kd05->kd5negara1 =  $request->kd5negara1;
        $kd05->kode_county1 = $request->kode_county1;
        $kd05->kota1 =  $request->kota1;
        $kd05->email1 =  $request->email1;
        $kd05->telp1 = $request->telp1;
        $kd05->npwp1 = $request->npwp1;
        // $shortname = $kd05->short_name1 = $request->short_name1;
        $kd05->nama11 = $request->nama11;
        $kd05->nama21 = $request->nama21;
        $kd05->street1 = $request->street1;
        $kd05->addit1 = $request->addit1;
        $kd05->postal_code1 = $request->postal_code1;
        $kd05->po_box1 = $request->po_box1;
        $kd05->tax1 = $request->tax1;
        $kd05->mobile1 = $request->mobile1;
        $kd05->home1 = $request->home1;
        $kd05->fax1 = $request->fax1;
        $kd05->addresscode1 = $request->addresscode1;
        // $i = 0;

        // foreach ($nama1 as $nama) {
        // dd($request);
        // $kd05 = Kd05::create([
        //     'no_cust1' => $request->no_cust1,
        //     'id' => $kd03->id,
        //     // 'address_code1' => $address,
        //     'kd5negara1' => $negara,
        //     'kode_county1' => $county,
        //     'kota1' => $kota,
        //     'email1' => $email,
        //     'telp1' => $telp,
        //     'npwp1' => $npwp,
        //     // 'short_name1' => $shortname,
        //     'nama11' => $nama1,
        //     'nama21' => $nama2,
        //     'street1' => $street,
        //     'addit1' => $addit,
        //     'postal_code1' => $poscod,
        //     'po_box1' => $pobox,
        //     'tax1' => $tax,
        //     'mobile1' => $mobile,
        //     'home1' => $home,
        //     'fax1' => $fax,
        //     'addresscode1' => $add,
        //     'title1' => $titles,
        // ]);
        $kd05->save();

        // }
        // relation kd06
        $kd06 = new Kd06();
        $kd06->id = $kd03->id;
        $kd06->kd6no_cust = $request->kd6no_cust;
        $kd06->sd = $request->sd;
        $kd06->biz_type_p1 = $request->biz_type_p1;
        $kd06->nama_agent1 = $request->nama_agent1;
        $kd06->nama_agent2 = $request->nama_agent2;
        $kd06->nama_agent3 = $request->nama_agent3;
        $kd06->nama_agent4 = $request->nama_agent4;
        $kd06->nama_agent5 = $request->nama_agent5;

        $kd06->kode_brand1 = $request->kode_brand1;
        $kd06->kode_brand2 = $request->kode_brand2;
        $kd06->kode_brand3 = $request->kode_brand3;
        $kd06->kode_brand4 = $request->kode_brand4;
        $kd06->kode_brand5 = $request->kode_brand5;

        $kd06->long_desc1 = $request->long_desc1;
        $kd06->long_desc2 = $request->long_desc2;
        $kd06->long_desc3 = $request->long_desc3;
        $kd06->long_desc4 = $request->long_desc4;
        $kd06->long_desc5 = $request->long_desc5;

        $kd06->negara1 = $request->negara1;
        $kd06->negara2 = $request->negara2;
        $kd06->negara3 = $request->negara3;
        $kd06->negara4 = $request->negara4;
        $kd06->negara5 = $request->negara5;

        $kd06->allowance_qty = $request->allowance_qty;
        $kd06->kd6tax = $request->kd6tax;
        $kd06->assigment = $request->assigment;
        $kd06->del_con = $request->del_con;
        $kd06->payterm = $request->payterm;
        $kd06->kurs = $request->kurs;
        $kd06->satuan = $request->satuan;
        $kd06->sales = $request->sales;
        $kd06->status = $request->status;
        $kd06->from = $request->from;
        $kd06->staff_member = $request->staff_member;
        $kd06->to = $request->to;
        $kd06->pc = $request->pc;
        $kd06->print = $request->print;
        $kd06->save();

        // relation kd11
        $kd11 = new Kd11();
        $kd11->id = $kd03->id;
        $kd11->kd11no_cust = $request->kd11no_cust;
        $kd11->sd1 = $request->sd1;
        $kd11->sg1 = $request->sg1;
        $kd11->association_no1 = $request->association_no1;
        $kd11->status1 = $request->status1;
        $kd11->validity_from1 = $request->validity_from1;
        $kd11->validity_to1 = $request->validity_to1;
        $kd11->central_regu1 = $request->central_regu1;
        $kd11->conditions1 = $request->conditions1;
        // 2
        $kd11->sd2 = $request->sd2;
        $kd11->sg2 = $request->sg2;
        $kd11->association_no2 = $request->association_no2;
        $kd11->status2 = $request->status2;
        $kd11->validity_from2 = $request->validity_from2;
        $kd11->validity_to2 = $request->validity_to2;
        $kd11->central_regu2 = $request->central_regu2;
        $kd11->conditions2 = $request->conditions2;
        // 3
        $kd11->sd3 = $request->sd3;
        $kd11->sg3 = $request->sg3;
        $kd11->association_no3 = $request->association_no3;
        $kd11->status3 = $request->status3;
        $kd11->validity_from3 = $request->validity_from3;
        $kd11->validity_to3 = $request->validity_to3;
        $kd11->central_regu3 = $request->central_regu3;
        $kd11->conditions3 = $request->conditions3;
        $kd11->save();


        // relation kd14
        $kd14 = new Kd14();
        $kd14->id = $kd03->id;

        $kd14->kd14no_cust = $request->kd14no_cust;

        $kd14->nama_cp1 = $request->nama_cp1;
        $kd14->nama_cp2 = $request->nama_cp2;
        $kd14->nama_cp3 = $request->nama_cp3;
        $kd14->jabatan_cp1 = $request->jabatan_cp1;
        $kd14->jabatan_cp2 = $request->jabatan_cp2;
        $kd14->jabatan_cp3 = $request->jabatan_cp3;
        $kd14->phone_cp1 = $request->phone_cp1;
        $kd14->phone_cp2 = $request->phone_cp2;
        $kd14->phone_cp3 = $request->phone_cp3;
        $kd14->email_cp1 = $request->email_cp1;
        $kd14->email_cp2 = $request->email_cp2;
        $kd14->email_cp3 = $request->email_cp3;
        $kd14->sd_cp1 = $request->sd_cp1;
        $kd14->sd_cp2 = $request->sd_cp2;
        $kd14->sd_cp3 = $request->sd_cp3;
        $kd14->sg_cp1 = $request->sg_cp1;
        $kd14->sg_cp2 = $request->sg_cp2;
        $kd14->sg_cp3 = $request->sg_cp3;
        $kd14->function_cp1 = $request->function_cp1;
        $kd14->function_cp2 = $request->function_cp2;
        $kd14->function_cp3 = $request->function_cp3;
        $kd14->role_cp1 = $request->role_cp1;
        $kd14->role_cp2 = $request->role_cp2;
        $kd14->role_cp3 = $request->role_cp3;
        $kd14->sinc_cp1 = $request->sinc_cp1;
        $kd14->sinc_cp2 = $request->sinc_cp2;
        $kd14->sinc_cp3 = $request->sinc_cp3;
        $kd14->add_addr_cp1 = $request->add_addr_cp1;
        $kd14->add_addr_cp2 = $request->add_addr_cp2;
        $kd14->add_addr_cp3 = $request->add_addr_cp3;
        $kd14->mobile_cp1 = $request->mobile_cp1;
        $kd14->mobile_cp2 = $request->mobile_cp2;
        $kd14->mobile_cp3 = $request->mobile_cp3;
        $kd14->cp1 = $request->cp1;
        $kd14->cp2 = $request->cp2;
        $kd14->cp3 = $request->cp3;
        $kd14->save();



        //     DB::commit();
        //     // all good
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     // something went wrong
        // }

        //relation kd04
        // $kd04 = new Kd04();
        // $kd04->id = $kd03->id;
        // $kd04->credit_limit = $request->credit_limit;
        // $kd04->payterm = $request->payterm;
        // $kd04->alasan_perubahan = $request->alasan_perubahan;
        // $kd04->history_pembayaran = $request->history_pembayaran;
        // $kd04->no_cust = $kd03->no_cust;
        // $kd04->no_debitor = $request->no_debitor;
        // $kd04->no_creditor = $request->no_creditor;
        // $kd04->no_group_cust = $request->no_group_cust;
        // $kd04->credit_cust = $request->credit_cust;
        // $kd04->credit_from = $request->credit_from;
        // $kd04->credit_to = $request->credit_to;
        // $kd04->credit_line_check = $request->credit_line_check;
        // $kd04->block_delivery = $request->block_delivery;
        // $kd04->block = $request->block;
        // $kd04->block_reason = $request->block_reason;
        // $kd04->save();


        // relation kd05

        // $request->validate([
        //     'moreFields.*.no_cust1' => 'nullable',
        //     'moreFields.*.address_code1' => 'nullable',
        //     'moreFields.*.negara1' => 'nullable',
        //     'moreFields.*.kode_county1' => 'nullable',
        //     'moreFields.*.kota1' => 'nullable',
        //     'moreFields.*.email1' => 'nullable',
        //     'moreFields.*.telp1' => 'nullable',
        //     'moreFields.*.npwp1' => 'nullable',
        //     'moreFields.*.short_name1' => 'nullable',
        //     'moreFields.*.postal_code1' => 'nullable',
        //     'moreFields.*.po_box1' => 'nullable',
        //     'moreFields.*.tax1' => 'nullable',
        //     'moreFields.*.mobile1' => 'nullable',
        //     'moreFields.*.home1' => 'nullable',
        //     'moreFields.*.fax1' => 'nullable',
        //     'moreFields.*.addresscode1' => 'nullable',
        // ]);
        // foreach ($request->moreFields as $key => $value) {
        //     Kd05::create($value);
        // }



        // $kd05->no_cust2 = $kd03->no_cust;
        // $kd05->no_cust3 = $kd03->no_cust;



        // 2
        // $kd05->address_code12 = $request->address_code12;
        // $kd05->title2 = $request->title2;
        // $kd05->negara2 = $request->negara2;
        // $kd05->kode_county2 = $request->kode_county2;
        // $kd05->kota2 = $request->kota2;
        // $kd05->email2 = $request->email2;
        // $kd05->telp2 = $request->telp2;
        // $kd05->npwp2 = $request->npwp2;
        // $kd05->short_name2 = $request->short_name2;
        // $kd05->nama12 = $request->nama12;
        // $kd05->nama22 = $request->nama22;
        // $kd05->street2 = $request->street2;
        // $kd05->addit2 = $request->addit2;
        // $kd05->postal_code2 = $request->postal_code2;
        // $kd05->po_box2 = $request->po_box2;
        // $kd05->tax2 = $request->tax2;
        // $kd05->mobile2 = $request->mobile2;
        // $kd05->home2 = $request->home2;
        // $kd05->fax2 = $request->fax2;
        // $kd05->addresscode2 = $request->addresscode2;

        // // 3
        // $kd05->address_code13 = $request->address_code13;
        // $kd05->title3 = $request->title3;
        // $kd05->negara3 = $request->negara3;
        // $kd05->kode_county3 = $request->kode_county3;
        // $kd05->kota3 = $request->kota3;
        // $kd05->email3 = $request->email3;
        // $kd05->telp3 = $request->telp3;
        // $kd05->npwp3 = $request->npwp3;
        // $kd05->short_name3 = $request->short_name3;
        // $kd05->nama13 = $request->nama13;
        // $kd05->nama23 = $request->nama23;
        // $kd05->street3 = $request->street3;
        // $kd05->addit3 = $request->addit3;
        // $kd05->postal_code3 = $request->postal_code3;
        // $kd05->po_box3 = $request->po_box3;
        // $kd05->tax3 = $request->tax3;
        // $kd05->mobile3 = $request->mobile3;
        // $kd05->home3 = $request->home3;
        // $kd05->fax3 = $request->fax3;
        // $kd05->addresscode3 = $request->addresscode3;
        $inputan = DB::table('kd03')->max('no_cust');
        // dd($inputan);
        // $inputan = Kd03::where('id', $kd03->id)->get();

        return redirect('/dashboard/salesFolder/inputan')->with('success', 'New Form Input Customer Has Been Added!');
        // return redirect()->route(''editkd03', ['no_cust' => $inputan]')
        // ->with('success', 'New Form Input Customer Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kd03 = Kd03::findOrFail($id);
        $kd04 = Kd04::findOrFail($id);
        $kd05 = Kd05::findOrFail($id);
        $kd06 = Kd06::findOrFail($id);
        $kd11 = Kd11::findOrFail($id);
        $kd14 = Kd14::findOrFail($id);
        return view('dashboard.salesFolder.Inputan.show', [
            'inputan' => $kd03,
            'kd04' => $kd04,
            'kd05' => $kd05,
            'kd06' => $kd06,
            'kd11' => $kd11,
            'kd14' => $kd14,
            'kd03' => $kd03,
        ]);
    }

    public function btsubmit($id)
    {
        $user = User::all();
        $kd03 = Kd03::findOrFail($id);
        $kd04 = Kd04::findOrFail($id);
        $kd05 = Kd05::findOrFail($id);
        $kd06 = Kd06::findOrFail($id);
        $kd11 = Kd11::findOrFail($id);
        $kd14 = Kd14::findOrFail($id);
        return view('dashboard.salesFolder.Inputan.submit', [
            'inputan' => $kd03,
            'kd04' => $kd04,
            'kd05' => $kd05,
            'kd06' => $kd06,
            'kd11' => $kd11,
            'kd14' => $kd14,
            'kd03' => $kd03,
            'user' => $user
        ]);
    }

    public function btlastsubmit($id)
    {
        $kd03 = Kd03::findOrFail($id);
        $kd04 = Kd04::findOrFail($id);
        $kd05 = Kd05::findOrFail($id);
        $kd06 = Kd06::findOrFail($id);
        $kd11 = Kd11::findOrFail($id);
        $kd14 = Kd14::findOrFail($id);
        return view('dashboard.salesFolder.Inputan.lastSubmit', [
            'inputan' => $kd03,
            'kd04' => $kd04,
            'kd05' => $kd05,
            'kd06' => $kd06,
            'kd11' => $kd11,
            'kd14' => $kd14,
            'kd03' => $kd03,
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
        $user = User::all();
        $sg = Sg::all();
        $customer = PermintaanInputCustomer::all();
        $title = Tittle::all();
        $class = Classes::all();
        $negara = Negara::all();
        $kodeCountry = KodeCountry::all();
        $sd = Sd::all();
        $bizType = BizType::all();
        $tax = Tax::all();
        $assignment = Assignment::all();
        $delCon = DelCon::all();
        $kurs = Kurs::all();
        $satuan = Satuan::all();
        $packing = Packing::all();
        $cutting = Cutting::all();
        $stdtSample = StdSample::all();
        $credit = CreditLimit::all();
        $pays = PayTerm::all();
        $orientasi = OrientasiMarket::all();
        $tipe = TipePerusahaan::all();
        $jenis = JenisBisnis::all();
        $milik = KepemilikanKantor::all();
        $kd03 = Kd03::findOrFail($id);
        $kd04 = Kd04::all()->where('kd4no_cust', '==', $kd03->no_cust);
        $kd05 = Kd05::all()->where('no_cust1', '==', $kd03->no_cust);
        // dd($kd05);
        $kd06 = Kd06::all()->where('kd6no_cust', '==', $kd03->no_cust);
        $kd11 = Kd11::all()->where('kd11no_cust', '==', $kd03->no_cust);
        $kd14 = Kd14::all()->where('kd14no_cust', '==', $kd03->no_cust);
        return view('dashboard.salesFolder.Inputan.edit', [
            'inputan' => $kd03,
            'kd04' => $kd04,
            'kd05' => $kd05,
            'kd06' => $kd06,
            'kd11' => $kd11,
            'kd14' => $kd14,
            'kd03' => $kd03,
            'user' => $user,
            'customers' => $customer,
            'titles' => $title,
            'classes' => $class,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'sds' => $sd,
            'sgs' => $sg,
            'bizTypes' => $bizType,
            'taxs' => $tax,
            'assignments' => $assignment,
            'delCons' => $delCon,
            'kurses' => $kurs,
            'satuans' => $satuan,
            'packings' => $packing,
            'cuttings' => $cutting,
            'stdSamples' => $stdtSample,
            'credits' => $credit,
            'pays' => $pays,
            'orientasis' => $orientasi,
            'tipes' => $tipe,
            'jenises' => $jenis,
            'kepemilikan' => $milik
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Kd03UpdateRequest $request, $id)
    {
        // dd($request);

        $kd04 = Kd04::findOrFail($id);
        $kd05 = Kd05::findOrFail($id);
        $kd06 = Kd06::findOrFail($id);
        $kd11 = Kd11::findOrFail($id);
        $kd14 = Kd14::findOrFail($id);
        // $validated = $request->validated();
        // Kd03::findOrFail($id)->get();
        Kd03::where('id', $id)->update([
            'class' => $request->input('class'),
            'title' => $request->input('title'),
            'kode_cust' => $request->input('kode_cust'),
            'negara' => $request->input('negara'),
            'kode_county' => $request->input('kode_county'),
            'kota' => $request->input('kota'),
            'email' => $request->input('email'),
            'telp' => $request->input('telp'),
            'npwp' => $request->input('npwp'),
            'short_name' => $request->input('short_name'),
            'nama1' => $request->input('nama1'),
            'nama2' => $request->input('nama2'),
            'street' => $request->input('street'),
            'addit' => $request->input('addit'),
            'addit' => $request->input('postal_code'),
            'po_box' => $request->input('po_box'),
            'mobile' => $request->input('mobile'),
            'home' => $request->input('home'),
            'fax' => $request->input('fax'),
            'status' => $request->input('status'),
        ]);
        return redirect('/dashboard/salesFolder/inputan')->with('success', 'New Form Input Customer Has Been Updated!');
    }

    public function updatekd3(Request $request, $id)
    {
        // dd($request);
        $kd03 = Kd03::findOrFail($id);

        if ($kd03->status_form == 'inputted') {
            if ($request->input('status_form') == 'finished') {
                $submit = $kd03->submitted_by;
                $apprv1 = $kd03->aprv1_by;
                $apprv2 = $kd03->aprv2_by;
                $inputted = $kd03->inputted_by;
                $finished = Auth()->user()->employee_name;
                $reject = NULL;
            } elseif ($request->input('status_form') == 'rejected') {
                $submit = $kd03->submitted_by;
                $apprv1 = $kd03->aprv1_by;
                $apprv2 = $kd03->aprv2_by;
                $inputted = $kd03->inputted_by;
                $finished = NULL;
                $reject = Auth()->user()->employee_name;
            }
        }
        if ($kd03->status_form == 'aprv 2') {
            if ($request->input('status_form') == 'inputted') {
                $submit = $kd03->submitted_by;
                $apprv1 = $kd03->aprv1_by;
                $apprv2 = $kd03->aprv2_by;
                $inputted = Auth()->user()->employee_name;
                $reject = NULL;
                $finished = NULL;
            } elseif ($request->input('status_form') == 'rejected') {
                $submit = $kd03->submitted_by;
                $apprv1 = $kd03->aprv1_by;
                $apprv2 = $kd03->aprv2_by;
                $inputted = NULL;
                $reject = Auth()->user()->employee_name;
                $finished = NULL;
            }
        }
        if ($kd03->status_form == 'aprv 1') {
            if ($request->input('status_form') == 'aprv 2') {
                $submit = $kd03->submitted_by;
                $apprv1 = $kd03->aprv1_by;
                $apprv2 = Auth()->user()->employee_name;
                $inputted = NULL;
                $finished = NULL;
                $reject = NULL;
            } elseif ($request->input('status_form') == 'rejected') {
                $submit = $kd03->submitted_by;
                $apprv1 = $kd03->aprv1_by;
                $apprv2 = NULL;
                $inputted = NULL;
                $finished = NULL;
                $reject = Auth()->user()->employee_name;
            }
        }
        if ($kd03->status_form == 'submitted') {
            if ($request->input('status_form') == 'aprv 1') {
                $submit = $kd03->submitted_by;
                $apprv1 = Auth()->user()->employee_name;
                $apprv2 = NULL;
                $inputted = NULL;
                $finished = NULL;
                $reject = NULL;
            } elseif ($request->input('status_form') == 'rejected') {
                $submit = $kd03->submitted_by;
                $apprv1 = NULL;
                $apprv2 = NULL;
                $inputted = NULL;
                $finished = NULL;
                $reject = Auth()->user()->employee_name;
            }
        }
        if ($kd03->status_form == 'created') {
            if ($request->input('status_form') == 'submitted') {
                $submit = Auth()->user()->employee_name;
                $apprv1 = NULL;
                $apprv2 = NULL;
                $inputted = NULL;
                $finished = NULL;
                $reject = NULL;
            } elseif ($request->input('status_form') == 'rejected') {
                $submit = NULL;
                $apprv1 = NULL;
                $apprv2 = NULL;
                $inputted = NULL;
                $finished = NULL;
                $reject = Auth()->user()->employee_name;
            }
        }
        Kd03::where('id', $id)->update([

            'status_form' => $request->input('status_form'),
            'created_by' => $request->input('created_by'),
            'submitted_by' => $submit,
            'rejectted_by' => $reject,
            'reject_reason' => $request->input('reject_reason'),
            'aprv1_by' => $apprv1,
            'aprv2_by' => $apprv2,
            'inputted_by' => $inputted,
            'finished_by' => $finished,

        ]);
        return redirect('/outindex')->with('success', 'New Form Input Customer Has Been Updated!');
    }


    public function OutIndex()
    {

        $kd03 = DB::table('kd03')
            ->leftJoin('kd06', 'kd03.no_cust', '=', 'kd06.kd6no_cust')
            ->get();

        if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Section Chief') {
            $kd03Outs = $kd03->where('status_form', '!=', 'inputted');
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager') {
            $kd03Outs = $kd03->where('status_form', 'created');
        } elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Division Manager') {
            $kd03Outs = $kd03->where('status_form', 'submitted');
        } elseif (auth()->user()->division == 'FINANCE') {
            $kd03Outs = $kd03->where('status_form', 'aprv 1');
        } elseif (auth()->user()->division == 'INTERNAL AUDIT' && auth()->user()->jabatan == 'Section Chief') {
            $kd03Outs = $kd03->where('status_form', 'aprv 2');
        } elseif (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
            $kd03Outs = $kd03->where('status_form', '!=', 'inputted');
        }



        return view('dashboard.salesFolder.Inputan.indexout', [
            'kd03' => $kd03Outs,
        ]);
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
        Kd04::destroy($id);
        Kd06::destroy($id);
        Kd05::destroy($id);
        Kd11::destroy($id);
        Kd14::destroy($id);
        return redirect('/dashboard/salesFolder/inputan')->with('success', 'New Form Input Customer Has Been Deleted!');
    }

    public function exportPDF()
    {

        $data = Kd03::all();

        $pdf = FacadePdf::loadView('pdfCust', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('Customer.pdf');
    }

    public function importKd03(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd03Data', $namafile);


        Excel::import(new Kd03Import, \public_path('/Kd03Data/' . $namafile));

        return redirect('/dashboard/salesFolder/inputan')->with('success', 'KD03 Telah Di Tambahkan!');
    }

    public function importKd04(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd04Data', $namafile);


        Excel::import(new Kd04Import, \public_path('/Kd04Data/' . $namafile));

        return redirect('/dashboard/salesFolder/inputan')->with('success', 'KD04 Telah Di Tambahkan!');
    }

    public function importKd05(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd05Data', $namafile);


        Excel::import(new Kd05Import, \public_path('/Kd05Data/' . $namafile));

        return redirect('/dashboard/salesFolder/inputan')->with('success', 'KD05 Telah Di Tambahkan!');
    }

    public function importKd06(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd06Data', $namafile);


        Excel::import(new Kd06Import, \public_path('/Kd06Data/' . $namafile));

        return redirect('/dashboard/salesFolder/inputan')->with('success', 'KD06 Telah Di Tambahkan!');
    }

    public function importKd11(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd11Data', $namafile);


        Excel::import(new Kd11Import, \public_path('/Kd11Data/' . $namafile));

        return redirect('/dashboard/salesFolder/inputan')->with('success', 'KD11 Telah Di Tambahkan!');
    }

    public function importKd14(Request $request)
    {
        $data = $request->file('excel');

        $namafile = $data->getClientOriginalName();
        $data->move('Kd14Data', $namafile);


        Excel::import(new Kd14Import, \public_path('/Kd14Data/' . $namafile));

        return redirect('/dashboard/salesFolder/inputan')->with('success', 'KD14 Telah Di Tambahkan!');
    }
}
