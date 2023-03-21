<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Sales;
use App\Http\Controllers\HomeController;

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


Route::get('/home', [HomeController::class, 'index'])->name('home');


// Sales

Route::group(['middleware' => ['auth'],'prefix' =>'Sales'], function(){

  Route::get('/Dashboard', [Sales::class, 'dashboard'])->name('sales.dashboard');

  Route::get('/incomplete-sales-list', [Sales::class, 'incomplete_sales'])->name('sales.incomplete_sales');

  Route::get('/confirmed-sales-list', [Sales::class, 'confirmed_sales'])->name('sales.confirmed_sales');

  Route::get('/confirmed-vehicle-delivery-list', [Sales::class, 'confirmed_delivery'])->name('sales.confirmed_delivery');

  Route::get('/pending-vehicle-delivery-list', [Sales::class, 'pending_delivery'])->name('sales.pending_delivery');

  Route::get('/new-pre-order', [Sales::class, 'new_pre_order'])->name('sales.new_pre_order');

  Route::get('/pre-order-list', [Sales::class, 'list_pre_order'])->name('sales.list_pre_order');

  Route::get('/customer-loan-manager', [Sales::class, 'list_loan_manager'])->name('sales.list_loan_manager');

  Route::get('/add-loan-information', [Sales::class, 'add_loan_information'])->name('sales.add_loan_information');

  Route::get('/new-loan-information', [Sales::class, 'new_loan_information'])->name('sales.new_loan_information');

  Route::get('/incomplete-booking-list', [Sales::class, 'list_incomplete_booking'])->name('sales.list_incomplete_booking');

  Route::get('/incomplete-parts-sales-list', [Sales::class, 'list_incomplete_parts_sales'])->name('sales.list_incomplete_parts_sales');

  Route::get('/confirmed-parts-sales-list', [Sales::class, 'list_confirmed_parts_sales'])->name('sales.list_confirmed_parts_sales');

  Route::get('/edit-proforma-invoice', [Sales::class, 'edit_proforma_invoice'])->name('sales.edit_proforma_invoice');

  Route::get('/active-pre-order', [Sales::class, 'list_active_pre_order'])->name('sales.list_active_pre_order');

  Route::get('/active-booking-list', [Sales::class, 'list_active_booking'])->name('sales.list_active_booking');

  Route::get('/incomplete-after-sales-list', [Sales::class, 'list_incom_after_sales'])->name('sales.list_incom_after_sales');

  Route::get('/new-customer', [Sales::class, 'add_customer'])->name('sales.add_customer');

  Route::get('/customer-list', [Sales::class, 'list_customer'])->name('sales.list_customer');

  Route::get('/quotation-list', [Sales::class, 'list_quotation'])->name('sales.list_quotation');

  Route::get('/booked-services', [Sales::class, 'booked_services'])->name('sales.booked_services');

  Route::get('/add-vechicle-registration-list', [Sales::class, 'add_vehicle_registration'])->name('sales.add_vehicle_registration');
  
  Route::get('/vechicle-registration-list', [Sales::class, 'vehicle_registration'])->name('sales.vehicle_registration');

  Route::get('/booking', [Sales::class, 'booking'])->name('sales.booking');

  Route::get('/booking-list', [Sales::class, 'list_booking'])->name('sales.list_booking');
  
  Route::get('/new-quotation', [Sales::class, 'add_quotation'])->name('sales.add_quotation');

  Route::get('/new--generate-quotation', [Sales::class, 'add_generate_quotation'])->name('sales.add_generate_quotation');

  Route::get('/general-quotation-list', [Sales::class, 'list_general_quotation'])->name('sales.list_general_quotation');

  Route::get('/new-spare-parts-sales', [Sales::class, 'add_spare_parts_sales'])->name('sales.add_spare_parts_sales');

  Route::get('/new-dealership-sales', [Sales::class, 'add_dealer_sales'])->name('sales.add_dealer_sales');

  Route::get('/list-after-sales-manager', [Sales::class, 'list_after_sales_manager'])->name('sales.list_after_sales_manager');

  Route::get('/after-sales-manager', [Sales::class, 'add_after_sales_manager'])->name('sales.add_after_sales_manager');

  Route::get('/new-vehicle-sales-booking', [Sales::class, 'new_vehicle_sales_booking'])->name('sales.new_vehicle_sales_booking');

   Route::get('/report-sales', [Sales::class, 'report_sales'])->name('sales.report_sales');

//-------------------------Calculator------------------------//

  Route::get('/Vehicle-loan-calculator', [Sales::class, 'loan_calculator'])->name('sales.loan_calculator');
  Route::get('/Vehicle-lookup', [Sales::class, 'vehicle_lookup'])->name('sales.vehicle_lookup');

//---------------------------Reports-----------------------//

  Route::get('/report-booking-list', [Sales::class, 'report_booking_list'])->name('sales.report_booking_list');
  Route::get('/date-wise-sales-details', [Sales::class, 'date_wise_sales_details'])->name('sales.date_wise_sales_details');
  Route::get('/date-wise-sales-summary', [Sales::class, 'date_wise_sales_summary'])->name('sales.date_wise_sales_summary');
  Route::get('/monthly-sales-details', [Sales::class, 'monthly_sales_details'])->name('sales.monthly_sales_details');
  Route::get('/monthly-sales-summary', [Sales::class, 'monthly_sales_summary'])->name('sales.monthly_sales_summary');
  Route::get('/vehicle-delivery-report', [Sales::class, 'vehicle_delivery_report'])->name('sales.vehicle_delivery_report');
  Route::get('/key-register-report', [Sales::class, 'key_register_report'])->name('sales.key_register_report');
  Route::get('/pending-delivery-list', [Sales::class, 'pending_delivery_list'])->name('sales.pending_delivery_list');
  Route::get('/sales-pre-order-list-report', [Sales::class, 'pre_order_list_report'])->name('sales.pre_order_list_report');
  Route::get('/pending-pre-order-list-report', [Sales::class, 'pending_pre_order_list_report'])->name('sales.pending_pre_order_list_report');
  Route::get('/sales-customer-loan-report', [Sales::class, 'customer_loan_report'])->name('sales.customer_loan_report');
  Route::get('/stock-transfer-report', [Sales::class, 'stock_transfer_report'])->name('sales.stock_transfer_report');
  Route::get('/registration-pending-list-report', [Sales::class, 'registration_pending_list_report'])->name('sales.registration_pending_list_report');

 
  
  

});
