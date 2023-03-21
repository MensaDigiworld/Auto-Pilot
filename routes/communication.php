<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Communication;
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


// Communication

Route::group(['middleware' => ['auth'],'prefix' =>'Communication'], function(){

  Route::get('/Dashboard', [Communication::class, 'dashboard'])->name('communication.dashboard');

  Route::get('/active-lead', [Communication::class, 'add_active_lead'])->name('communication.add_active_lead');

  Route::get('/cancelled-deal', [Communication::class, 'list_cancelled_deal'])->name('communication.list_cancelled_deal');

  Route::get('/closed-deal', [Communication::class, 'list_closed_deal'])->name('communication.list_closed_deal');
  
  Route::get('/initiated-lead', [Communication::class, 'list_initiated_lead'])->name('communication.list_initiated_lead');

  Route::get('/customer-communication-previous-action', [Communication::class, 'list_customer_communication_previous'])->name('communication.list_customer_communication_previous');

  Route::get('/customer-communication', [Communication::class, 'list_customer_communication'])->name('communication.list_customer_communication');


  Route::get('/vehicle-service-action', [Communication::class, 'list_service'])->name('communication.list_service');

  Route::get('/vehicle-service-previous-action', [Communication::class, 'list_service_previous'])->name('communication.list_service_previous');

  Route::get('/vehicle-document', [Communication::class, 'list_document'])->name('communication.list_document');

  Route::get('/vehicle-document-previous-action', [Communication::class, 'list_document_previous'])->name('communication.list_document_previous');

  Route::get('/lead-manager', [Communication::class, 'list_lead_manager'])->name('communication.list_lead_manager');

  

});
