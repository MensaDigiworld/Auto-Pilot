<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Lcpurchase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Lc\PurchaseController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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



Auth::routes();

// Route::group(['middleware' => ['verified']], function(){

Route::get('/home', [HomeController::class, 'index'])->name('home');


// Lc & Purchase


Route::group(['middleware' => ['auth'], 'prefix' => 'Lc-Purchase'], function () {

    Route::get('/Dashboard', [Lcpurchase::class, 'index'])->name('lc.lc-home');

    Route::get('/LC-Manager', [Lcpurchase::class, 'lc_manager'])->name('lc.lc_manager');

    Route::get('/new-foregin-purchase', [Lcpurchase::class, 'new_foregin_purchase'])->name('lc.new-foregin-purchase');

    Route::get('/list-foregin-purchase', [Lcpurchase::class, 'list_foregin_purchase'])->name('lc.list-foregin-purchase');

    Route::get('/new-local-purchase', [PurchaseController::class, 'new_local_purchase'])->name('lc.new-local-purchase');
    // Route::post('/new-local-purchase/store', [PurchaseController::class,'store'])->name('lclocalpurchase.store');
    Route::post('/new-local-purchase/store', [PurchaseController::class, 'lcLocalpurchaseStore'])->name('lclocalpurchase.store');
    Route::post('/new-local-purchase/update', [PurchaseController::class, 'lcLocalpurchaseUpdate'])->name('lclocalpurchase.update');
    Route::post('/new-local-purchase/supplier/store', [PurchaseController::class, 'lcSuppliersStore'])->name('lc.suppliers.store');

    Route::get('/incomplete-local-purchase', [PurchaseController::class, 'incompleteLocalPurchase'])->name('lc.in-local-purchase');
    Route::get('/incomplete-local-purchase/edit/{id}', [PurchaseController::class, 'edit'])->name('lc.in-local-purchase-edit');
    Route::get('/incomplete-local-purchase/destroy/{id}', [PurchaseController::class, 'lcpurchaseDelete'])->name('lc.in-local-purchase-destroy');

    Route::get('/complete-local-purchase', [Lcpurchase::class, 'complete_local_purchase'])->name('lc.co-local-purchase');

    Route::get('/new-proforma-invoice', [Lcpurchase::class, 'new_proforma_invoice'])->name('lc.new-proforma-invoice');

    Route::get('/edit-proforma-invoice', [Lcpurchase::class, 'edit_proforma_invoice'])->name('lc.edit_proforma_invoice');

    Route::get('/Amend-proforma-invoice-list', [Lcpurchase::class, 'list_amend_proforma_invoice'])->name('lc.list_amend_proforma_invoice');

    Route::get('/Amend-proforma-insurance-list', [Lcpurchase::class, 'list_amend_proforma_insurance'])->name('lc.list_amend_proforma_insurance');

    Route::get('/list-proforma-invoice', [Lcpurchase::class, 'list_proforma_invoice'])->name('lc.list-proforma-invoice');

    Route::get('/list-cargo-insurance', [Lcpurchase::class, 'list_cargo_insurance'])->name('lc.list-cargo-insurance');

    Route::get('/list-letter-credit', [Lcpurchase::class, 'list_letter_credit'])->name('lc.list-letter-credit');

    Route::get('/list-amend_letter-credit', [Lcpurchase::class, 'list_amend_letter_credit'])->name('lc.list_amend_letter_credit');

    Route::get('/list-bill-lading', [Lcpurchase::class, 'list_bill_lading'])->name('lc.list-bill-lading');

    Route::get('/new-bill-lading', [Lcpurchase::class, 'new_bill_lading'])->name('lc.new_bill_lading');

    Route::get('/new-bill-duty', [Lcpurchase::class, 'new_bill_duty'])->name('lc.new_bill_duty');

    Route::get('/list-bill-custom-duty', [Lcpurchase::class, 'list_bill_custom_duty'])->name('lc.list_bill_custom_duty');

    Route::get('/Add New Bill of Entry', [Lcpurchase::class, 'new_bill_entry'])->name('lc.new_bill_entry');

    Route::get('/list-bill-entry', [Lcpurchase::class, 'list_bill_entry'])->name('lc.list-bill-entry');

    Route::get('/list-approve-costing', [Lcpurchase::class, 'list_approve_costing'])->name('lc.list-approve-costing');

    Route::get('/new-spare-parts-purchase', [Lcpurchase::class, 'new_spare_parts'])->name('lc.new-spare-parts-purchase');

    Route::get('/list-incomplete-spare-parts', [Lcpurchase::class, 'list_in_spare_parts'])->name('lc.list-in-spare-parts');

    Route::get('/list-complete-spare-parts', [Lcpurchase::class, 'list_com_spare_parts'])->name('lc.list-com-spare-parts');

    Route::get('/lc-purchase-report', [Lcpurchase::class, 'lc_purchase_report'])->name('lc.lc-purchase-report');

    Route::get('/Add-New-Insurance', [Lcpurchase::class, 'new_insurance'])->name('lc.new_insurance');

    Route::get('/List-of-Insurance', [Lcpurchase::class, 'list_insurance'])->name('lc.list_insurance');

    Route::get('/Add-New-LC', [Lcpurchase::class, 'new_lc'])->name('lc.new_lc');

    Route::get('/Local-Purchase-Manager', [Lcpurchase::class, 'local_purchase_manager'])->name('lc.local_purchase_manager');

    Route::get('/New-Costing', [Lcpurchase::class, 'new_costing'])->name('lc.new_costing');

    Route::get('/Edit-Local-Purchase', [Lcpurchase::class, 'edit_local_purchase'])->name('lc.edit_local_purchase');

    Route::get('/Vehicle-Track', [Lcpurchase::class, 'vehicle_track'])->name('lc.vehicle_track');

    Route::get('/List-Pending-Purchase', [Lcpurchase::class, 'list_pending_purchase'])->name('lc.list_pending_purchase');

    Route::get('/List-Pending-Import', [Lcpurchase::class, 'list_pending_import'])->name('lc.list_pending_import');

    Route::get('/List-Pending-Insurance', [Lcpurchase::class, 'list_pending_insurance'])->name('lc.list_pending_insurance');

    Route::get('/List-Pending-LC', [Lcpurchase::class, 'list_pending_lc'])->name('lc.list_pending_lc');

    Route::get('/List-Pending-BL', [Lcpurchase::class, 'list_pending_bl'])->name('lc.list_pending_bl');

    Route::get('/List-Pending-BE', [Lcpurchase::class, 'list_pending_be'])->name('lc.list_pending_be');

    //----------Report------------------------//

    Route::get('/vehicle-wise-report', [Lcpurchase::class, 'vehicle_wise_report'])->name('lc_purchase.vehicle_wise_report');
    Route::get('/pending-auction-list', [Lcpurchase::class, 'pending_auction_list'])->name('lc_purchase.pending_auction_list');
    Route::get('/report-lc-overview', [Lcpurchase::class, 'lc_overview'])->name('lc_purchase.lc_overview');
    Route::get('/bill-of-lading-list', [Lcpurchase::class, 'bill_of_lading_list'])->name('lc_purchase.bill_of_lading_list');
});

// Route::get('/Under-Development',function() {
//   return view('error.200');
// });




Route::fallback(function () {
    // return view('page.fallback-page', ['message' => $message]);

    return view('error.404');
});
