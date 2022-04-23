<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BciToQard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPrimaryController;
use App\Http\Controllers\DevReportQard;
use App\Http\Controllers\FormDevSales;
use App\Http\Controllers\FormRequest;
use App\Http\Controllers\FormRequestQard;
use App\Http\Controllers\MasterDevReportQardController;
use App\Http\Controllers\QardRequestToBciController;
use App\Http\Controllers\Users;
use App\Http\Controllers\Ws03Controller;
use App\Http\Controllers\Ws05Controller;
use App\Models\MasterDevReportQard;
use App\Models\QardRequestToBci;
use App\Models\Ws03;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function(){
//     return view('auth.login');
// });

Route::get('/', function () {
    return redirect(route('login'));
});

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboardPrimary')->middleware('auth');
// Route::resource('/dashboard/internal', FormRequestQard::class)->middleware('auth');
// Route::get('/dashboard/formrequest/showSales', FormRequest::class, 'showSales')->name('showSales')->middleware('auth');
Route::resource('/dashboard/register', Users::class);

//Route Sales
Route::resource('/dashboard/sales', FormDevSales::class)->middleware('isSales');


//RouteGroup
Route::group(['middleware' => ['isMis', 'isQard']], function () {
});

//Route Marketing
Route::resource('/dashboard/formrequest', FormRequest::class)->middleware(['isMarketing', 'isMis']);
Route::get('/dashboard/formrequest/sales/{id}', [FormRequest::class, 'showSales']);
Route::get('/dashboard/formrequest/sales/{id}/edit', [FormRequest::class, 'editSales']);
Route::post('/dashboard/formrequest/sales/{id}', [FormRequest::class, 'updateSales'])->name('update.sales');
Route::get('/export-pdf-marketing', [FormRequest::class, 'exportDevMarketing'])->name('DevelopmentMarketing');


//Route Bci
Route::resource('/dashboard/bci', BciToQard::class)->middleware('isBci');

//Route QARD
Route::resource('/dashboard/qard', MasterDevReportQardController::class)->middleware('isQard');
Route::resource('/dashboard/ws03', Ws03Controller::class)->middleware('isQard');
Route::resource('/dashboard/ws05', Ws05Controller::class)->middleware('isQard');
Route::resource('/dashboard/test-benang', QardRequestToBciController::class)->middleware('isQard');

// export import user
Route::post('/import-excel', [Users::class, 'importexcel'])->name('importexcel');
Route::get('/export-excel', [Users::class, 'exportexcel'])->name('exportexcel');
Route::get('/export-pdf', [Users::class, 'exportpdf'])->name('exportpdf');

//export import ws03
Route::post('/import-ws03', [Ws03Controller::class, 'importws03'])->name('importws03');

//export import ws05
Route::post('/import-ws05', [Ws05Controller::class, 'importws05'])->name('importws05');

Auth::routes();
