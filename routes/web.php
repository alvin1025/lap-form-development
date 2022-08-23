<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\AgentKindController;
use App\Http\Controllers\AgentMasterController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AssiociationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BciToQard;
use App\Http\Controllers\BizTypeController;
use App\Http\Controllers\BlockReasonController;
use App\Http\Controllers\CaraPembayaranController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClmAsiController;
use App\Http\Controllers\ComplainServiceKantinController;
use App\Http\Controllers\CreditLimitBaruController;
use App\Http\Controllers\CreditLimitController;
use App\Http\Controllers\CuttingController;
use App\Http\Controllers\DaftarKebutuhanMaterialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPrimaryController;
use App\Http\Controllers\DelConController;
use App\Http\Controllers\DeliveryTermSLController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DevReportQard;
use App\Http\Controllers\EditInputKdController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FormDevSales;
use App\Http\Controllers\FormRequest;
use App\Http\Controllers\FormRequestQard;
use App\Http\Controllers\InputCustomer;
use App\Http\Controllers\JenisBisnisController;
use App\Http\Controllers\KD02;
use App\Http\Controllers\Kd03ReqController;
use App\Http\Controllers\Kd04RequestController;
use App\Http\Controllers\Kd05ReqController;
use App\Http\Controllers\Kd06ReqController;
use App\Http\Controllers\Kd11ReqController;
use App\Http\Controllers\Kd11Split;
use App\Http\Controllers\Kd14ReqController;
use App\Http\Controllers\Kd14Split;
use App\Http\Controllers\Kd3Split;
use App\Http\Controllers\Kd4Split;
use App\Http\Controllers\Kd5Split;
use App\Http\Controllers\Kd6Split;
use App\Http\Controllers\KepemilikanKantorController;
use App\Http\Controllers\KeyAccController;
use App\Http\Controllers\KodeCountryController;
use App\Http\Controllers\KursController;
use App\Http\Controllers\LanguageMarkController;
use App\Http\Controllers\LaporanKecelakaanKerjaController;
use App\Http\Controllers\MasterDevReportQardController;
use App\Http\Controllers\MeninggalkanTempatKerjaController;
use App\Http\Controllers\MenueGroupController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\OrientasiMarketController;
use App\Http\Controllers\PackingController;
use App\Http\Controllers\PaymentTermMasterController;
use App\Http\Controllers\PaymetKindController;
use App\Http\Controllers\PayTermController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PembuatanKartuPengenalController;
use App\Http\Controllers\PengantarKaryawanBaruController;
use App\Http\Controllers\PermintaanInputCustController;
use App\Http\Controllers\PermintaanInputCustomerController;
use App\Http\Controllers\PermohonanPerubahanCreditController;
use App\Http\Controllers\PermohonanPromosiController;
use App\Http\Controllers\Pr03Controller;
use App\Http\Controllers\Pr04Controller;
use App\Http\Controllers\Pr06Controller;
use App\Http\Controllers\QardRequestToBciController;
use App\Http\Controllers\QuantityUnitController;
use App\Http\Controllers\RencanaAnggaranBiayaController;
use App\Http\Controllers\RequestChangeKdController;
use App\Http\Controllers\SalesGradeController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\SDController;
use App\Http\Controllers\SerahTerimaMaintenanceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SgController;
use App\Http\Controllers\ShipmentKindController;
use App\Http\Controllers\ShipmentKindManagementController;
use App\Http\Controllers\StdSampleController;
use App\Http\Controllers\SubmitReqController;
use App\Http\Controllers\SuratDendaController;
use App\Http\Controllers\SuratPemanggilanKaryawanController;
use App\Http\Controllers\SuratPengantarBerobatController;
use App\Http\Controllers\SuratPengantarPemeriksaanDokterController;
use App\Http\Controllers\SuratPeringatanController;
use App\Http\Controllers\SuratPerintahKerjaController;
use App\Http\Controllers\SurchargeTypeController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\TipePerusahaanController;
use App\Http\Controllers\TittleController;
use App\Http\Controllers\TukarShiftController;
use App\Http\Controllers\UndanganHubunganKerjaController;
use App\Http\Controllers\UndanganInstrukturTrainingController;
use App\Http\Controllers\UserGroupController;
use App\Http\Controllers\Users;
use App\Http\Controllers\VA03Controller;
use App\Http\Controllers\Vs04Controller;
use App\Http\Controllers\Ws03Controller;
use App\Http\Controllers\Ws05Controller;
use App\Mail\FormSubmitEmail;
use App\Models\AgentMaster;
use App\Models\JenisBisnis;
use App\Models\MasterDevReportQard;
use App\Models\Pr04;
use App\Models\QardRequestToBci;
use App\Models\UndanganInstrukturTraining;
use App\Models\Vs04;
use App\Models\Ws03;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/templates', function () {
    return view('template');
});

Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboardPrimary')->middleware('auth');
Route::get('/dashboardUtama', [DashboardController::class, 'indexUtama'])->name('dashboardUtama')->middleware('auth');




Route::resource('/dashboard/register', Users::class);

//Route Sales
Route::resource('/dashboard/sales', FormDevSales::class)->middleware('auth');
Route::resource('/dashboard/salesFolder/credit', PermohonanPerubahanCreditController::class)->middleware('auth');
Route::resource('/dashboard/salesFolder/creditBaru', CreditLimitBaruController::class)->middleware('auth');
Route::resource('/dashboard/salesFolder/customer', PermintaanInputCustomerController::class)->middleware('auth');

// Route Sales per Database
Route::resource('/dashboard/salesFolder/inputan', InputCustomer::class)->middleware('auth');
Route::get('/outindex', [InputCustomer::class, 'OutIndex'])->name('outindex');
Route::get('/dashboard/salesFolder/inputan/{id}/btsubmit', [InputCustomer::class, 'btsubmit'])->name('btsubmit');
Route::get('/dashboard/salesFolder/inputan/{id}/btlastsubmit', [InputCustomer::class, 'btlastsubmit'])->name('btlastsubmit');
Route::put('/dashboard/salesFolder/inputan/kd03/{id}', [InputCustomer::class, 'updatekd3'])->name('update.Kd03');

// kd04
Route::get('/dashboard/salesFolder/inputan/{id}/editkd4', [EditInputKdController::class, 'editKd4'])->name('editkd04');
Route::put('/dashboard/salesFolder/inputan/kd04/{id}', [EditInputKdController::class, 'updateKd4'])->name('update.Kd04');

// Kd05
Route::get('/dashboard/salesFolder/inputan/new/{id}/editkd5', [EditInputKdController::class, 'editKd5'])->name('editkd5');
Route::put('/dashboard/salesFolder/inputan/new/kd05/{id}', [EditInputKdController::class, 'updateKd5'])->name('update.Kd5');
Route::get('/dashboard/salesFolder/kd5/newKd5/{no_cust1}', [EditInputKdController::class, 'createkd5'])->name('createkd5');
Route::post('/dashboard/salesFolder/kd5/newKd5/{no_cust1}', [EditInputKdController::class, 'insertkd5'])->name('insertkd5');



// Kd06
Route::get('/dashboard/salesFolder/inputan/{id}/editkd6', [EditInputKdController::class, 'editKd6'])->name('editkd6');
Route::put('/dashboard/salesFolder/inputan/kd06/{id}', [EditInputKdController::class, 'updatekd6'])->name('updatekd6');

// kd11
Route::get('/dashboard/salesFolder/inputan/{id}/editkd11', [EditInputKdController::class, 'editKd11'])->name('editkd11');
Route::put('/dashboard/salesFolder/inputan/kd11/{id}', [EditInputKdController::class, 'updateKd11'])->name('update.Kd11');

// kd14
Route::get('/dashboard/salesFolder/inputan/{id}/editkd14', [EditInputKdController::class, 'editKd14'])->name('editkd14');
Route::put('/dashboard/salesFolder/inputan/kd14/{id}', [EditInputKdController::class, 'updateKd14'])->name('update.kd14');

// kd14
Route::get('/settings/{id}/edit', [SettingsController::class, 'edit'])->name('edit.settings');
Route::put('/settings/{id}', [SettingsController::class, 'update'])->name('update.settings');


//Kd Split
Route::get('/dashboard/salesFolder/kd2', [KD02::class, 'index'])->middleware('auth')->name('kd2.index');
Route::get('/dashboard/salesFolder/kd2/new/{no_cust}', [KD02::class, 'indexkd3'])->middleware('auth')->name('indexkd3');
Route::get('/dashboard/salesFolder/kd2/new/kd4/{no_cust}', [KD02::class, 'indexkd4'])->middleware('auth')->name('indexkd4');
Route::get('/dashboard/salesFolder/kd2/new/kd5/{no_cust}', [KD02::class, 'indexkd5'])->middleware('auth')->name('indexkd5');
Route::get('/dashboard/salesFolder/kd2/new/kd6/{no_cust}', [KD02::class, 'indexkd6'])->middleware('auth')->name('indexkd6');
Route::get('/dashboard/salesFolder/kd2/new/kd11/{no_cust}', [KD02::class, 'indexkd11'])->middleware('auth')->name('indexkd11');
Route::get('/dashboard/salesFolder/kd2/new/kd14/{no_cust}', [KD02::class, 'indexkd14'])->middleware('auth')->name('indexkd14');
Route::get('/dashboard/salesFolder/info/kd2', [KD02::class, 'info'])->middleware('auth')->name('kd2.info');
Route::get('/dashboard/salesFolder/kd2/info/{no_cust}', [KD02::class, 'infoDetail'])->middleware('auth')->name('kd2.detail');

Route::get('getAlloq/{agent}', [AgentMasterController::class, 'getAlloq'])->name('getAlloq');
Route::get('getAllow/{agent}', function ($agent) {
    $getAgent = AgentMaster::where('name1', $agent)->first();
    // dd($getAgent);
    $agentAlloq = Vs04::where('agent', $getAgent->agent)->get();
    // dd($agentAlloq);
    return response()->json($agentAlloq);
})->name('getAllow');


// kd3
Route::resource('/dashboard/salesFolder/kd3', Kd3Split::class)->middleware('auth');
Route::get('/dashboard/salesFolder/kd3/new/{no_cust}/submit', [Kd3Split::class, 'submit'])->middleware('auth')->name('submit');
Route::put('/dashboard/salesFolder/kd3/new/{no_cust}', [Kd3Split::class, 'updateSubmit'])->name('updateSubmit');
Route::delete('/dashboard/salesFolder/kd3/delete/{no_cust}', [Kd3Split::class, 'destroyAll'])->name('destroyAll');
Route::get('/kd3/outindex', [Kd3Split::class, 'OutIndex'])->name('kd3outindex');
Route::get('/kd3/inputted/', [Kd3Split::class, 'InputtedIndex'])->name('kd3inputted');
Route::get('/kd3/reject', [Kd3Split::class, 'rejectIndex'])->name('kd3reject');
Route::get('/kd3/outindex/belumSelesai', [Kd3Split::class, 'belumSubmit'])->name('belumSelesai');
Route::get('/kd3/outindex/submitDM', [Kd3Split::class, 'needDMSales'])->name('submitDM');
Route::get('/kd3/outindex/submitGM', [Kd3Split::class, 'needGMSales'])->name('submitGM');
Route::get('/kd3/outindex/submitDMFinance', [Kd3Split::class, 'needDMFinance'])->name('submitDMFinance');
Route::get('/kd3/outindex/submitGMFinance', [Kd3Split::class, 'needGMFinance'])->name('submitGMFinance');
Route::get('/kd3/outindex/submitDocControl', [Kd3Split::class, 'needDocControl'])->name('submitDocControl');
Route::get('/kd3/outindex/needFinish', [Kd3Split::class, 'needFinish'])->name('submitFinish');
Route::get('/kd3/outindex/reject', [Kd3Split::class, 'reject'])->name('reject');
Route::get('/kd3/outindex/finished', [Kd3Split::class, 'finishedIndex'])->name('finishedIndex');

Route::get('/dashboard/salesFolder/change/request', [RequestChangeKdController::class, 'change'])->middleware('auth')->name('request');
Route::get('/dashboard/salesFolder/change/request/index', [RequestChangeKdController::class, 'kd3reqindex'])->middleware('auth')->name('kd3reqindex');
Route::get('/dashboard/salesFolder/change/request/show/{id}', [RequestChangeKdController::class, 'showkd3'])->middleware('auth')->name('showkd3');
Route::post('/dashboard/salesFolder/change/request/store', [RequestChangeKdController::class, 'storeKd3'])->middleware('auth')->name('storeKd3Req');
Route::get('/dashboard/salesFolder/change/request/submit/indexkd3', [SubmitReqController::class, 'OutReqKd3'])->middleware('auth')->name('OutReqKd3');
Route::get('/dashboard/salesFolder/change/request/submit/{id}/submit', [SubmitReqController::class, 'submitReqKd3'])->middleware('auth')->name('submitReqKd3');
Route::put('/dashboard/salesFolder/change/request/submit/{id}', [SubmitReqController::class, 'updateReqKd3'])->middleware('auth')->name('updateReqKd3');

Route::get('/editkd03/request/{kd03}/edit', [RequestChangeKdController::class, 'editkd03'])->middleware('auth')->name('editkd03');
Route::put('/request/xyz/{kd03}', [RequestChangeKdController::class, 'updatekd03'])->middleware('auth')->name('updatereq.kd03');

// kd4req
Route::get('/dashboard/salesFolder/change/request/index/kd4', [RequestChangeKdController::class, 'kd4reqindex'])->middleware('auth')->name('kd4reqindex');
Route::get('/dashboard/salesFolder/change/request/show/kd4/{id}', [RequestChangeKdController::class, 'showkd4'])->middleware('auth')->name('showkd4');
Route::get('/dashboard/salesFolder/change/request/submit/indexkd4', [SubmitReqController::class, 'OutReqKd4'])->middleware('auth')->name('OutReqKd4');
Route::get('/dashboard/salesFolder/change/request/kd4/{id}/submit', [SubmitReqController::class, 'submitReqKd4'])->middleware('auth')->name('submitReqKd4');
Route::put('/dashboard/salesFolder/change/request/submit/kd4/{id}', [SubmitReqController::class, 'updateReqKd4'])->middleware('auth')->name('updateReqKd4');

// kd5req
Route::get('/dashboard/salesFolder/change/request/index/kd5', [RequestChangeKdController::class, 'kd5reqindex'])->middleware('auth')->name('kd5reqindex');
Route::get('/dashboard/salesFolder/change/request/show/kd5/{id}', [RequestChangeKdController::class, 'showkd5'])->middleware('auth')->name('showkd5');
Route::get('/newAdd/{id}', [RequestChangeKdController::class, 'addressNew'])->middleware('auth')->name('add');
Route::get('/kd6/req/add/{id}', [RequestChangeKdController::class, 'createNewKd6'])->middleware('auth')->name('addkd6');
Route::get('/kd11/req/add/kd11/{kd11no_cust}', [RequestChangeKdController::class, 'createNewKd11'])->middleware('auth')->name('addkd11');
Route::get('/kd14/req/add/kd14/{kd14no_cust}', [RequestChangeKdController::class, 'createNewKd14'])->middleware('auth')->name('addkd14');

Route::get('/dashboard/salesFolder/change/request/submit/indexkd5', [SubmitReqController::class, 'OutReqKd5'])->middleware('auth')->name('OutReqKd5');
Route::get('/dashboard/salesFolder/change/request/kd5/{id}/submit', [SubmitReqController::class, 'submitReqKd5'])->middleware('auth')->name('submitReqKd5');
Route::put('/dashboard/salesFolder/change/request/submit/kd5/{id}', [SubmitReqController::class, 'updateReqKd5'])->middleware('auth')->name('updateReqKd5');

// kd6req
Route::get('/dashboard/salesFolder/change/request/index/kd6', [RequestChangeKdController::class, 'kd6reqindex'])->middleware('auth')->name('kd6reqindex');
Route::get('/dashboard/salesFolder/change/request/show/kd6/{id}', [RequestChangeKdController::class, 'showkd6'])->middleware('auth')->name('showkd6');
Route::get('/dashboard/salesFolder/change/request/submit/indexkd6', [SubmitReqController::class, 'OutReqKd6'])->middleware('auth')->name('OutReqKd6');
Route::get('/dashboard/salesFolder/change/request/kd6/{id}/submit', [SubmitReqController::class, 'submitReqKd6'])->middleware('auth')->name('submitReqKd6');
Route::put('/dashboard/salesFolder/change/request/submit/kd6/{id}', [SubmitReqController::class, 'updateReqKd6'])->middleware('auth')->name('updateReqKd6');

// kd11req
Route::get('/dashboard/salesFolder/change/request/index/kd11', [RequestChangeKdController::class, 'kd11reqindex'])->middleware('auth')->name('kd11reqindex');
Route::get('/dashboard/salesFolder/change/request/show/kd11/{id}', [RequestChangeKdController::class, 'showkd11'])->middleware('auth')->name('showkd11');
Route::get('/dashboard/salesFolder/change/request/submit/indexkd11', [SubmitReqController::class, 'OutReqKd11'])->middleware('auth')->name('OutReqKd11');
Route::get('/dashboard/salesFolder/change/request/kd11/{id}/submit', [SubmitReqController::class, 'submitReqKd11'])->middleware('auth')->name('submitReqKd11');
Route::put('/dashboard/salesFolder/change/request/submit/kd11/{id}', [SubmitReqController::class, 'updateReqKd11'])->middleware('auth')->name('updateReqKd11');

// kd14req
Route::get('/dashboard/salesFolder/change/request/index/kd14', [RequestChangeKdController::class, 'kd14reqindex'])->middleware('auth')->name('kd14reqindex');
Route::get('/dashboard/salesFolder/change/request/show/kd14/{reqkd14}', [RequestChangeKdController::class, 'showkd14'])->middleware('auth')->name('showkd14');
Route::get('/dashboard/salesFolder/change/request/submit/indexkd14', [SubmitReqController::class, 'OutReqKd14'])->middleware('auth')->name('OutReqKd14');
Route::get('/dashboard/salesFolder/change/request/kd14/{id}/submit', [SubmitReqController::class, 'submitReqKd14'])->middleware('auth')->name('submitReqKd14');
Route::put('/dashboard/salesFolder/change/request/submit/kd14/{id}', [SubmitReqController::class, 'updateReqKd14'])->middleware('auth')->name('updateReqKd14');

Route::resource('/dashboard/salesFolder/kd03request', Kd03ReqController::class)->middleware('auth');
Route::put('/update/kd03req/{kd03request}', [Kd03ReqController::class, 'update2'])->middleware('auth')->name('kd3req.updt');
Route::get('/inputted/kd03req', [Kd03ReqController::class, 'inputted'])->middleware('auth')->name('kd3req.inputted');
Route::get('/finished/kd03req', [Kd03ReqController::class, 'finished'])->middleware('auth')->name('kd3req.finished');
Route::get('/reject/kd03req', [Kd03ReqController::class, 'reject'])->middleware('auth')->name('kd3req.reject');

Route::resource('/dashboard/salesFolder/kd04request', Kd04RequestController::class)->middleware('auth');
Route::get('/inputted/kd04req', [Kd04RequestController::class, 'inputted'])->middleware('auth')->name('kd4req.inputted');
Route::get('/finished/kd04req', [Kd04RequestController::class, 'finished'])->middleware('auth')->name('kd4req.finished');
Route::get('/reject/kd04req', [Kd04RequestController::class, 'reject'])->middleware('auth')->name('kd4req.reject');


Route::resource('/dashboard/salesFolder/kd05request', Kd05ReqController::class)->middleware('auth');
Route::get('/inputted/kd05req', [Kd05ReqController::class, 'inputted'])->middleware('auth')->name('kd5req.inputted');
Route::get('/finished/kd05req', [Kd05ReqController::class, 'finished'])->middleware('auth')->name('kd5req.finished');
Route::get('/reject/kd05req', [Kd05ReqController::class, 'reject'])->middleware('auth')->name('kd5req.reject');

Route::resource('/dashboard/salesFolder/kd06request', Kd06ReqController::class)->middleware('auth');
Route::get('/inputted/kd06req',[Kd06ReqController::class, 'inputted'])->middleware('auth')->name('kd6req.inputted');
Route::get('/finished/kd06req',[Kd06ReqController::class, 'finished'])->middleware('auth')->name('kd6req.finished');
Route::get('/reject/kd06req',[Kd06ReqController::class, 'reject'])->middleware('auth')->name('kd6req.reject');

Route::resource('/dashboard/salesFolder/kd11request', Kd11ReqController::class)->middleware('auth');
Route::get('/inputted/kd11req', [Kd11ReqController::class, 'inputted'])->middleware('auth')->name('kd11req.inputted');
Route::get('/finished/kd11req', [Kd11ReqController::class, 'finished'])->middleware('auth')->name('kd11req.finished');
Route::get('/reject/kd11req', [Kd11ReqController::class, 'reject'])->middleware('auth')->name('kd11req.reject');

Route::resource('/dashboard/salesFolder/kd14request', Kd14ReqController::class)->middleware('auth');
Route::get('/inputted/kd14req', [Kd14ReqController::class, 'inputted'])->middleware('auth')->name('kd14req.inputted');
Route::get('/finished/kd14req', [Kd14ReqController::class, 'finished'])->middleware('auth')->name('kd14req.finished');
Route::get('/reject/kd14req', [Kd14ReqController::class, 'reject'])->middleware('auth')->name('kd14req.reject');

Route::get('/kd3ReqPdf/{id}', [Kd03ReqController::class, 'pdfReqKd03'])->middleware('auth')->name('pdfKd3Req');
Route::get('/kd3ReqPdfFin/{id}', [Kd03ReqController::class, 'pdfReqKd03Fin'])->middleware('auth')->name('pdfReqKd03Fin');

Route::get('/kd4ReqPdf/{id}', [Kd04RequestController::class, 'kd04Pdf'])->middleware('auth')->name('kd04Pdf');
Route::get('/kd4ReqPdfFin/{id}', [Kd04RequestController::class, 'kd04PdfFin'])->middleware('auth')->name('kd04PdfFin');

Route::get('/kd5ReqPdf/{id}', [Kd05ReqController::class, 'pdfKd5Request'])->middleware('auth')->name('pdfKd5Request');
Route::get('/kd5ReqPdfFin/{id}', [Kd05ReqController::class, 'pdfKd5RequestFin'])->middleware('auth')->name('pdfKd5RequestFin');
Route::get('/kd5ReqPdf/add/{id}', [Kd05ReqController::class, 'pdfKd5RequestAdd'])->middleware('auth')->name('pdfKd5RequestAdd');
Route::get('/kd5ReqPdf/addFin/{id}', [Kd05ReqController::class, 'pdfKd5RequestAddFin'])->middleware('auth')->name('pdfKd5RequestAddFin');

Route::get('/kd6ReqPdf/{id}', [Kd06ReqController::class, 'pdfKd6Request'])->middleware('auth')->name('pdfKd6Request');
Route::get('/kd6ReqPdfFin/{id}', [Kd06ReqController::class, 'pdfKd6RequestFin'])->middleware('auth')->name('pdfKd6RequestFin');
Route::get('/kd6ReqPdf/add/{id}', [Kd06ReqController::class, 'pdfKd6RequestAdd'])->middleware('auth')->name('pdfKd6RequestAdd');
Route::get('/kd6ReqPdf/addFin/{id}', [Kd06ReqController::class, 'pdfKd6RequestAddFin'])->middleware('auth')->name('pdfKd6RequestAddFin');

Route::get('/kd11ReqPdf/{id}', [Kd11ReqController::class, 'pdfKd11Request'])->middleware('auth')->name('pdfKd11Request');
Route::get('/kd11ReqPdfFin/{id}', [Kd11ReqController::class, 'pdfKd11RequestFin'])->middleware('auth')->name('pdfKd11RequestFin');
Route::get('/kd11ReqPdf/add/{id}', [Kd11ReqController::class, 'pdfKd11RequestAdd'])->middleware('auth')->name('pdfKd11RequestAdd');
Route::get('/kd11ReqPdf/addFin/{id}', [Kd11ReqController::class, 'pdfKd11RequestAddFin'])->middleware('auth')->name('pdfKd11RequestAddFin');

Route::get('/kd14ReqPdf/{id}', [Kd14ReqController::class, 'pdfKd14Request'])->middleware('auth')->name('pdfKd14Request');
Route::get('/kd14ReqPdfFin/{id}', [Kd14ReqController::class, 'pdfKd14RequestFin'])->middleware('auth')->name('pdfKd14RequestFin');
Route::get('/kd14ReqPdf/add/{id}', [Kd14ReqController::class, 'pdfKd14RequestAdd'])->middleware('auth')->name('pdfKd14RequestAdd');
Route::get('/kd14ReqPdf/addFin/{id}', [Kd14ReqController::class, 'pdfKd14RequestAddFin'])->middleware('auth')->name('pdfKd14RequestAddFin');



Route::resource('/dashboard/salesFolder/kd4', Kd4Split::class)->middleware('auth');
Route::resource('/dashboard/salesFolder/kd5', Kd5Split::class)->middleware('auth');
Route::get('/dashboard/salesFolder/kd5/new/{no_cust1}', [Kd5Split::class, 'createSame'])->name('createSame');
Route::get('/dashboard/salesFolder/kd5/edit/{id}/edit', [Kd5Split::class, 'editReject'])->name('editReject');

Route::resource('/dashboard/salesFolder/kd6', Kd6Split::class)->middleware('auth');
Route::get('/dashboard/salesFolder/kd6/new/{kd6no_cust}', [Kd6Split::class, 'createNewKd6'])->name('newKd6');
Route::get('/dashboard/salesFolder/kd6/edit/{id}/edit', [Kd6Split::class, 'editReject'])->name('editRejectKd6');

Route::resource('/dashboard/salesFolder/kd11', Kd11Split::class)->middleware('auth');
Route::get('/dashboard/salesFolder/kd11/new/{kd11no_cust}', [Kd11Split::class, 'createNewKd11'])->name('newKd11')->middleware('auth');
Route::get('/dashboard/salesFolder/kd11/edit/{kd11}/edit', [Kd11Split::class, 'editReject'])->name('editRejectKd11')->middleware('auth');

Route::resource('/dashboard/salesFolder/kd14', Kd14Split::class)->middleware('auth');
Route::get('/dashboard/salesFolder/kd14/new/{kd14no_cust}', [Kd14Split::class, 'createNewKd14'])->middleware('auth')->name('NewKd14');
Route::get('/dashboard/salesFolder/kd14/edit/{kd14}/edit', [Kd14Split::class, 'editReject'])->middleware('auth')->name('editRejectKd14');


//RouteGroup
Route::group(['middleware' => ['isMis', 'isQard']], function () {
});

//Route Marketing
Route::resource('/dashboard/formrequest', FormRequest::class)->middleware(['auth']);
Route::get('/dashboard/formrequest/sales/{id}', [FormRequest::class, 'showSales']);
Route::get('/dashboard/formrequest/sales/{id}/edit', [FormRequest::class, 'editSales']);
Route::post('/dashboard/formrequest/sales/{id}', [FormRequest::class, 'updateSales'])->name('update.sales');
Route::get('/export-pdf-marketing', [FormRequest::class, 'exportDevMarketing'])->name('DevelopmentMarketing');


//Route Bci
Route::resource('/dashboard/bci', BciToQard::class)->middleware('auth');

//Route QARD
Route::resource('/dashboard/qard', MasterDevReportQardController::class)->middleware('auth');
Route::resource('/dashboard/ws03', Ws03Controller::class)->middleware('auth');
Route::resource('/dashboard/ws05', Ws05Controller::class)->middleware('auth');
Route::resource('/dashboard/test-benang', QardRequestToBciController::class)->middleware('auth');


//Route HR
Route::resource('/dashboard/hr/promosi', PermohonanPromosiController::class)->middleware('auth');
Route::resource('/dashboard/hr/kecelakaan', LaporanKecelakaanKerjaController::class)->middleware('auth');
Route::resource('/dashboard/hr/meninggalkan', MeninggalkanTempatKerjaController::class)->middleware('auth');
Route::resource('/dashboard/hr/kartu', PembuatanKartuPengenalController::class)->middleware('auth');
Route::resource('/dashboard/hr/shift', TukarShiftController::class)->middleware('auth');
Route::resource('/dashboard/hr/undangan', UndanganHubunganKerjaController::class)->middleware('auth');
Route::resource('/dashboard/hr/pemanggilan', SuratPemanggilanKaryawanController::class)->middleware('auth');
Route::resource('/dashboard/hr/peringatan', SuratPeringatanController::class)->middleware('auth');
Route::resource('/dashboard/hr/denda', SuratDendaController::class)->middleware('auth');
Route::resource('/dashboard/hr/dokter', SuratPengantarPemeriksaanDokterController::class)->middleware('auth');
Route::resource('/dashboard/hr/karyawanBaru', PengantarKaryawanBaruController::class)->middleware('auth');
Route::resource('/dashboard/hr/instruktur', UndanganInstrukturTrainingController::class)->middleware('auth');

//Route GA
Route::resource('/dashboard/ga/perintah', SuratPerintahKerjaController::class)->middleware('auth');
Route::resource('/dashboard/ga/anggaran', RencanaAnggaranBiayaController::class)->middleware('auth');
Route::resource('/dashboard/ga/kebutuhan', DaftarKebutuhanMaterialController::class)->middleware('auth');
Route::resource('/dashboard/ga/complain', ComplainServiceKantinController::class)->middleware('auth');
Route::resource('/dashboard/ga/berobat', SuratPengantarBerobatController::class)->middleware('auth');

//Route Maintenance
Route::resource('/dashboard/maintenance/serah-terima', SerahTerimaMaintenanceController::class)->middleware('auth');

//Mis
Route::resource('/dashboard/mis/settings/title', TittleController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/classes', ClassesController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/negara', NegaraController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/country', KodeCountryController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/sd', SDController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/bizType', BizTypeController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/tax', TaxController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/assignment', AssignmentController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/delcon', DelConController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/kurs', KursController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/satuan', SatuanController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/packing', PackingController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/cutting', CuttingController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/stdSample', StdSampleController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/payTerm', PayTermController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/jenisBisnis', JenisBisnisController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/orientasiMarket', OrientasiMarketController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/kepemilikanKantor', KepemilikanKantorController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/creditLimit', CreditLimitController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/caraPembayaran', CaraPembayaranController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/tipePerusahaan', TipePerusahaanController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/clm', ClmAsiController::class)->middleware('auth');

Route::resource('/dashboard/mis/settings/new/agent', AgentController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/agentmaster', AgentMasterController::class)->middleware('auth');

// Route::put('/dashboard/mis/settings/agent/{id}', [AgentController::class, 'updateAgent'])->name('updateAgent')->middleware('auth');
Route::resource('/dashboard/mis/settings/sg', SgController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/pr03', Pr03Controller::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/pr04', Pr04Controller::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/pr06', Pr06Controller::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/BReason', BlockReasonController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/assiociation', AssiociationController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/agentkind', AgentKindController::class)->middleware('auth');
//added
Route::resource('/dashboard/mis/settings/language', LanguageMarkController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/paykind', PaymetKindController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/departement', DepartementController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/userGroup', UserGroupController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/MenueGroup', MenueGroupController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/client', ClientController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/shipmentKind', ShipmentKindController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/delivTerm', DeliveryTermSLController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/quantity', QuantityUnitController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/surcharge', SurchargeTypeController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/shipmentKindManagement', ShipmentKindManagementController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/keyacc', KeyAccController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/va03', VA03Controller::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/salesGrade', SalesGradeController::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/vs04', Vs04Controller::class)->middleware('auth');
Route::resource('/dashboard/mis/settings/paymentmaster', PaymentTermMasterController::class)->middleware('auth');


Route::get('/sendSubmitAprovalForm', [Kd3Split::class, 'sendEmail'])->name('emailNotif');

// export import user
Route::post('/import-excel', [Users::class, 'importexcel'])->name('importexcel');
Route::get('/export-excel', [Users::class, 'exportexcel'])->name('exportexcel');
Route::get('/export-pdf', [Users::class, 'exportpdf'])->name('exportpdf');

Route::get('/exportCust/{no_cust}', [PDFController::class, 'generatePDF'])->name('exportCustPdf');
Route::get('/exportCustFin/{no_cust}', [PDFController::class, 'generatePDFFin'])->name('exportCustFinPdf');

Route::post('/import-sd', [SDController::class, 'importexcelSD'])->name('importSd');
Route::post('/import-sg', [SgController::class, 'importexcelSG'])->name('importSg');
Route::post('/import-title', [TittleController::class, 'importTitle'])->name('importTitle');
Route::post('/import-class', [ClassesController::class, 'importClass'])->name('importClass');
Route::post('/import-negara', [NegaraController::class, 'importexcelNegara'])->name('importNegara');
Route::post('/import-biztype', [BizTypeController::class, 'importexcelBiz'])->name('importBiz');
Route::post('/import-tax', [TaxController::class, 'importexcelTax'])->name('importTax');
Route::post('/import-assignment', [AssignmentController::class, 'importexcelAssignment'])->name('importAssignment');
Route::post('/import-delcon', [DelConController::class, 'importexcelDelcon'])->name('importDelcon');
Route::post('/import-kurs', [KursController::class, 'importexcelKurs'])->name('importKurs');
Route::post('/import-satuan', [SatuanController::class, 'importexcelSatuan'])->name('importSatuan');
Route::post('/import-payterm', [PayTermController::class, 'importexcelPayterm'])->name('importPayterm');
Route::post('/import-creditLimit', [CreditLimitController::class, 'importexcelCreditLimit'])->name('importCreditlimit');
Route::post('/import-jenisBisnis', [JenisBisnisController::class, 'importexcelJenisBisnis'])->name('importJenisBisnis');
Route::post('/import-orientasiMarket', [OrientasiMarketController::class, 'importexcelOrientasiMarket'])->name('importOrientasiMarket');
Route::post('/import-kepemilikanKantor', [KepemilikanKantorController::class, 'importexcelKepemilikanKantor'])->name('importKepemilikanKantor');
Route::post('/import-caraPembayaran', [CaraPembayaranController::class, 'importCaraPembayaran'])->name('importCaraPembayaran');
Route::post('/import-tipePerusahaan', [TipePerusahaanController::class, 'importTipePerusahaan'])->name('importTipePerusahaan');
Route::post('/import-kodeCounty', [KodeCountryController::class, 'importCounty'])->name('importCounty');
Route::post('/import-clm', [ClmAsiController::class, 'importClm'])->name('importClm');
Route::post('/import-agent', [AgentController::class, 'importAgent'])->name('importAgent');
Route::post('/import-pr03', [Pr03Controller::class, 'importPr03'])->name('importPr03');
Route::post('/import-pr04', [Pr04Controller::class, 'importPr04'])->name('importPr04');
Route::post('/import-pr06', [Pr06Controller::class, 'importPr06'])->name('importPr06');
Route::post('/import-block', [BlockReasonController::class, 'importBlockReason'])->name('importBlockReason');
Route::post('/import-assoc', [AssiociationController::class, 'importAssoc'])->name('importAssoc');
Route::post('/import-agentKind', [AgentKindController::class, 'importAgentKind'])->name('importAgentKind');
Route::post('/import-userGroup', [UserGroupController::class, 'importUserGroup'])->name('importUserGroup');
Route::post('/import-paymentKind', [PaymetKindController::class, 'importPaymentKind'])->name('importPaymentKind');
Route::post('/import-department', [DepartementController::class, 'importDepartment'])->name('importDepartment');
Route::post('/import-menueGroup', [MenueGroupController::class, 'importMenueGroup'])->name('importMenueGroup');
Route::post('/import-client', [ClientController::class, 'importClient'])->name('importClient');
Route::post('/import-surcharge', [SurchargeTypeController::class, 'importSurchargeType'])->name('importSurchargeType');
Route::post('/import-quantity', [QuantityUnitController::class, 'importQuantityUnit'])->name('importQuantityUnit');
Route::post('/import-vs04', [Vs04Controller::class, 'importVs04'])->name('importVs04');

// import kd
Route::post('/import-kd03', [InputCustomer::class, 'importKd03'])->name('importKd03');
Route::post('/import-kd04', [InputCustomer::class, 'importKd04'])->name('importKd04');
Route::post('/import-kd05', [InputCustomer::class, 'importKd05'])->name('importKd05');
Route::post('/import-kd06', [InputCustomer::class, 'importKd06'])->name('importKd06');
Route::post('/import-kd11', [InputCustomer::class, 'importKd11'])->name('importKd11');
Route::post('/import-kd14', [InputCustomer::class, 'importKd14'])->name('importKd14');

//export import ws03
Route::post('/import-ws03', [Ws03Controller::class, 'importws03'])->name('importws03');

//export import ws05
Route::post('/import-ws05', [Ws05Controller::class, 'importws05'])->name('importws05');


Auth::routes();
