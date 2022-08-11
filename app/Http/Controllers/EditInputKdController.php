<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kd03UpdateRequest;
use App\Http\Requests\Kd04UpdateRequest;
use App\Http\Requests\Kd05UpdateRequest;
use App\Http\Requests\Kd06UpdateRequest;
use App\Http\Requests\Kd11UpdateRequest;
use App\Http\Requests\Kd14UpdateRequest;
use App\Http\Requests\kd5UpdateRequest;
use App\Models\Agent;
use App\Models\Assignment;
use App\Models\BizType;
use App\Models\BlockReason;
use App\Models\ClmAsi;
use App\Models\CreditLimit;
use App\Models\DelCon;
use App\Models\Kd03;
use App\Models\Kd04;
use App\Models\Kd05;
use App\Models\Kd06;
use App\Models\Kd11 as ModelsKd11;
use App\Models\Kd14;
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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kd11;

class EditInputKdController extends Controller
{
    public function editKd4($id)
    {
        $kd04 = Kd04::findOrFail($id);
        $credit = CreditLimit::all();
        $block = BlockReason::all();
        return view('dashboard.salesFolder.Inputan.editKd4', [
            'credits' => $credit,
            'kd04' => $kd04,
            'blocks' => $block
        ]);
    }

    public function updateKd4(Kd04UpdateRequest $request, $id)
    {

        $reqkd04 = $request->validated();

        Kd04::where('id', $id)->update($reqkd04);
        return redirect()->route('inputan.edit', ['inputan' => $id])->with('success', 'New Form Input Customer Has Been Updated!');
        // return redirect()->route('editkd03', ['no_cust' => $inputan]'))
        // ->with('success', 'New Form Input Customer Has Been Added!');
    }

    public function createkd5($no_cust1)
    {
        $title = Tittle::all();
        $tax = Tax::all();
        $negara = Negara::all();
        // $kd03 = Kd03::all();
        $kodeCountry = KodeCountry::all();
        // $kd05 = Kd05::findOrFail($no_cust1)->where($no_cust1, '==', Kd03::where('no_cust', $kd03->no_cust))->get();
        // $kd05 = Kd05::all()->where('no_cust1=', Kd03::all()->get('no_cust'));
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
    public function insertkd5(Kd05UpdateRequest $request, $id)
    {
        $updateKd5 = $request->validated();
        Kd05::create($updateKd5);
        return redirect()->route('inputan.edit', ['inputan' => $id])->with('success', 'New Form Input Customer Has Been Added!');
    }

    public function editKd5($id)
    {
        $title = Tittle::all();
        $tax = Tax::all();
        $negara = Negara::all();
        $kd03 = Kd03::all();
        $kodeCountry = KodeCountry::all();
        // $kd05 = Kd05::findOrFail($no_cust1)->where($no_cust1, '==', Kd03::where('no_cust', $kd03->no_cust))->get();
        // $kd05 = Kd05::all()->where('no_cust1=', Kd03::all()->get('no_cust'));
        $kd05 = Kd05::findOrFail($id);
        return view('dashboard.salesFolder.Inputan.editKd5', [
            'titles' => $title,
            'taxs' => $tax,
            'negaras' => $negara,
            'kodeCountries' => $kodeCountry,
            'kd05' => $kd05
        ]);
    }

    public function updateKd5(Kd05UpdateRequest $request, $id)
    {
        $updateKd5 = $request->validated();
        Kd05::where('id', $id)->update($updateKd5);
        return redirect()->route('inputan.edit', ['inputan' => $id])->with('success', 'New Form Input Customer Has Been Updated!');
    }

    public function editKd6($id)
    {
        $user = User::all()->where('division', '==',  'FABRIC SALES');
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
        $agent = Agent::all();
        $clm = ClmAsi::all();
        // Flight::where('number', 'FR 900')->first();
        // $kd06 = Kd06::where('no_cust=', Kd03::all()->get('no_cust'));
        $kd06 = Kd06::findOrFail($id);
        return view('dashboard.salesFolder.Inputan.editKd6', [
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
            'kd06' => $kd06,
            'clms' => $clm
        ]);
    }

    public function updatekd6(Kd06UpdateRequest $request, $id)
    {
        $updateKd6 = $request->validated();
        // dd($updateKd6);
        Kd06::where('id', $id)->update($updateKd6);
        return redirect()->route('inputan.edit', ['inputan' => $id])->with('success', 'New Form Input Customer Has Been Updated!');
    }

    public function editKd11($id)
    {
        $sd = Sd::all();
        $sg = Sg::all();
        $kd11 = ModelsKd11::findOrFail($id);
        $assoc = DB::table('assiociations')->distinct('assoc')->get('assoc');
        return view('dashboard.salesFolder.Inputan.editKd11', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd11' => $kd11,
            'assocs' => $assoc
        ]);
    }

    public function updateKd11(Kd11UpdateRequest $request, $id)
    {
        $updateKd5 = $request->validated();
        // dd($updateKd5);
        ModelsKd11::where('id', $id)->update($updateKd5);
        return redirect()->route('inputan.edit', ['inputan' => $id])->with('success', 'New Form Input Customer Has Been Updated!');
    }

    public function editKd14($id)
    {
        $kd14 = Kd14::findOrFail($id);
        $sd = Sd::all();
        $sg = Sg::all();
        $kd05 = Kd05::all();
        return view('dashboard.salesFolder.Inputan.editKd14', [
            'sds' => $sd,
            'sgs' => $sg,
            'kd14' => $kd14,
            'kd05' => $kd05
        ]);
    }

    public function updateKd14(Kd14UpdateRequest $request, $id)
    {
        $updateKd5 = $request->validated();
        // dd($updateKd5);
        Kd14::where('id', $id)->update($updateKd5);
        return redirect()->route('inputan.edit', ['inputan' => $id])->with('success', 'New Form Input Customer Has Been Updated!');
    }
}
