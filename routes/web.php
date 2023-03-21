<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Business\BusinessSetup\BusinessSetupController;
use App\Http\Controllers\Business\BusinessSetup\SalesAndServiceController;
use App\Http\Controllers\Business\BusinessSetup\MembershipController;
use App\Http\Controllers\Business\BusinessSetup\LatterHeadController;
use App\Http\Controllers\Business\Analytics\VehicleDocumentController;
use App\Http\Controllers\Business\Analytics\VehicleLicenseController;
use App\Http\Controllers\Business\BranchSetupController;
use App\Http\Controllers\Business\EmployeeInfoController;
use App\Http\Controllers\Business\DesignationController;
use App\Http\Controllers\Business\DepartmentController;
use App\Http\Controllers\Business\UserRoleController;
use App\Http\Controllers\Business\Location\CountryController;
use App\Http\Controllers\Business\Location\CityController;
use App\Http\Controllers\Business\Location\StateController;

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


// Business Setup

Route::prefix('Business-Setup')->group( function() {
// Route::group(['middleware' => ['auth'],'prefix' =>'Business-Setup'], function(){
  
Route::resource('/business', BusinessSetupController::class);

Route::get('/configuration-information', [HomeController::class, 'configuration_information'])->name('configuration_information');

Route::get('/vat-setup', [HomeController::class, 'vat_setup'])->name('vat-setup');
Route::post('/vat-setup-store', [HomeController::class, 'vat_setup_store'])->name('vat-setup.store');

Route::get('/financial-year', [HomeController::class, 'financial_year'])->name('financial-year');

Route::get('/after-sales', [HomeController::class, 'after_sales'])->name('after-sales');
Route::post('/salse-after-service-store', [SalesAndServiceController::class, 'store'])->name('salesandservices.store');
Route::get('/salse-after-service-delete/{id}', [SalesAndServiceController::class, 'destroy'])->name('salse-after-service-delete');
Route::get('/edit-after-sales-service/{id}', [SalesAndServiceController::class, 'edit'])->name('edit_after_sales_service.edit');
Route::post('/update-after-sales-service/{id}', [SalesAndServiceController::class, 'update'])->name('edit_after_sales_service.update');

Route::get('/list-after-sales', [HomeController::class, 'list_after_sales'])->name('list-after-sales');

Route::resource('/memberships', MembershipController::class);

Route::resource('/latterheads', LatterHeadController::class);


// Branch Setup
Route::get('/list-branch', [BranchSetupController::class, 'index'])->name('list-branch');
Route::get('/add-branch', [BranchSetupController::class, 'create'])->name('add-branch');
Route::post('/add-branch-store', [BranchSetupController::class, 'store'])->name('add-branch.store');
Route::get('/branch-edit/{id}', [BranchSetupController::class, 'edit'])->name('branch.edit');
Route::post('/branch-update/{id}', [BranchSetupController::class, 'update'])->name('branch.update');
Route::get('/delete-branch/{id}', [BranchSetupController::class, 'destroy'])->name('branch.delete');


// Employee Information
Route::get('/list-employee', [EmployeeInfoController::class, 'index'])->name('list-employee');
Route::get('/add-employee', [EmployeeInfoController::class, 'create'])->name('add-employee');
Route::post('/add-employee-store', [EmployeeInfoController::class, 'store'])->name('add-employee.store');
Route::get('/edit-employee/{id}', [EmployeeInfoController::class, 'edit'])->name('employee.edit');
Route::post('/Update-employee/{id}', [EmployeeInfoController::class, 'update'])->name('employee.update');
Route::get('/employee-delete/{id}', [EmployeeInfoController::class, 'destroy'])->name('employee.delete');

// Designation
Route::get('/list-designation', [DesignationController::class, 'index'])->name('list-designation');
Route::get('/add-designation', [DesignationController::class, 'create'])->name('add-designation');
Route::post('/designation-store', [DesignationController::class, 'store'])->name('designation.store');
Route::get('/designation-edit/{id}', [DesignationController::class, 'edit'])->name('designation.edit');
Route::post('/designation-update/{id}', [DesignationController::class, 'update'])->name('designation.update');
Route::get('/designation-delete/{id}', [DesignationController::class, 'destroy'])->name('designation.delete');

// Department
Route::get('/list-department', [DepartmentController::class, 'index'])->name('list-department');
Route::get('/add-department', [DepartmentController::class, 'create'])->name('add-department');
Route::post('/store-department', [DepartmentController::class, 'store'])->name('department.store');
Route::get('/edit-department/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
Route::post('/update-department/{id}', [DepartmentController::class, 'update'])->name('department.update');
Route::get('/delete-department/{id}', [DepartmentController::class, 'destroy'])->name('department.delete');


// User Role & Permission
Route::get('/list-user-role', [UserRoleController::class, 'index'])->name('list-user-role');
Route::get('/add-user-role', [UserRoleController::class, 'create'])->name('add-user-role');
Route::post('/add-user-role-store', [UserRoleController::class, 'store'])->name('add-user-role-store');
Route::get('/edit-user-roll/{id}', [UserRoleController::class, 'edit'])->name('userroll.edit');
Route::post('/update-user-roll/{id}', [UserRoleController::class, 'update'])->name('userroll.update');
Route::get('/delete-user-role/{id}', [UserRoleController::class, 'destroy'])->name('userroll.delete');



//  User Information

Route::get('/add-user', [HomeController::class, 'add_user'])->name('add-user');
Route::get('/list-user', [HomeController::class, 'list_user'])->name('list-user');

// Terms & condition setup

Route::get('/add-terms-condition', [HomeController::class, 'add_terms_condition'])->name('add-terms-condition');
Route::get('/list-terms-condition', [HomeController::class, 'list_terms_condition'])->name('list-terms-condition');

// Location Information

Route::get('/list-country', [CountryController::class, 'index'])->name('list-country');
Route::get('/add-country', [CountryController::class, 'create'])->name('add-country');
Route::post('/store-country', [CountryController::class, 'store'])->name('country.store');
Route::get('/edit-country/{id}', [CountryController::class, 'edit'])->name('country.edit');
Route::post('/update-country/{id}', [CountryController::class, 'update'])->name('country.update');
Route::get('/delete-country/{id}', [CountryController::class, 'destroy'])->name('country.destroy');

Route::get('/list-city', [CityController::class, 'index'])->name('list-city');
Route::get('/add-city', [CityController::class, 'create'])->name('add-city');
Route::post('/store-city', [CityController::class, 'store'])->name('store-city');
Route::get('/edit-city/{id}', [CityController::class, 'edit'])->name('city.edit');
Route::post('/update-city/{id}', [CityController::class, 'update'])->name('city.update');
Route::get('/delete-city/{id}', [CityController::class, 'destroy'])->name('city.delete');

Route::get('/list-area', [StateController::class, 'index'])->name('list-area');
Route::get('/add-area', [StateController::class, 'create'])->name('add-area');
Route::post('/store-area', [StateController::class, 'store'])->name('area.store');
Route::get('/edit-area/{id}', [StateController::class, 'edit'])->name('area.edit');
Route::post('/update-area/{id}', [StateController::class, 'update'])->name('area.update');
Route::get('/delete-area/{id}', [StateController::class, 'destroy'])->name('area.delete');


// Vehicle import setup

Route::get('/add-irc', [HomeController::class, 'add_irc'])->name('add-irc');

Route::get('/list-irc', [HomeController::class, 'list_irc'])->name('list-irc');

Route::get('/add-lc-charge', [HomeController::class, 'add_lc_charge'])->name('add-lc-charge');

Route::get('/list-lc-charge', [HomeController::class, 'list_lc_charge'])->name('list-lc-charge');

Route::get('/add-carrier', [HomeController::class, 'add_carrier'])->name('add-carrier');

Route::get('/list-carrier', [HomeController::class, 'list_carrier'])->name('list-carrier');

Route::get('/add-port-loading', [HomeController::class, 'add_port_loading'])->name('add-port-loading');

Route::get('/list-port-loading', [HomeController::class, 'list_port_loading'])->name('list-port-loading');

Route::get('/add-port-landing', [HomeController::class, 'add_port_landing'])->name('add-port-landing');

Route::get('/list-port-landing', [HomeController::class, 'list_port_landing'])->name('list-port-landing');

Route::get('/add-destination', [HomeController::class, 'add_destination'])->name('add-destination');

Route::get('/list-destination', [HomeController::class, 'list_destination'])->name('list-destination');

Route::get('/add-custom-office', [HomeController::class, 'add_custom_office'])->name('add-custom-office');

Route::get('/list-custom-office', [HomeController::class, 'list_custom_office'])->name('list-custom-office');

Route::get('/add-declarant', [HomeController::class, 'add_declarant'])->name('add-declarant');

Route::get('/list-declarant', [HomeController::class, 'list_declarant'])->name('list-declarant');

Route::get('/add-hs-code', [HomeController::class, 'add_hs_code'])->name('add-hs-code');

Route::get('/list-hs-code', [HomeController::class, 'list_hs_code'])->name('list-hs-code');

// Opening Stock & Balance

Route::get('/add-vehicle-open-stock', [HomeController::class, 'add_vehicle_open_stock'])->name('add_vehicle_open_stock');

Route::get('/list-vehicle-open-stock', [HomeController::class, 'list_vehicle_open_stock'])->name('list_vehicle_open_stock');

Route::get('/approve-vehicle-open-stock', [HomeController::class, 'approve_vehicle_open_stock'])->name('approve-vehicle-open-stock');

Route::get('/list-spare-parts-open-stock', [HomeController::class, 'list_spare_parts_open_stock'])->name('list-spare-parts-open-stock');

Route::get('/add-spare-parts-open-stock', [HomeController::class, 'add_spare_parts_open_stock'])->name('add-spare-parts-open-stock');

Route::get('/list-opening-blance', [HomeController::class, 'list_opening_blance'])->name('list-opening-blance');

Route::get('/add-opening-blance', [HomeController::class, 'add_opening_blance'])->name('add-opening-blance');

Route::get('/costing', [HomeController::class, 'add_costing_void'])->name('add_costing_void');

Route::get('/spare-parts-costing', [HomeController::class, 'add_spare_parts_costing_void'])->name('add_spare_parts_costing_void');

Route::get('/spare-sales-costing', [HomeController::class, 'add_sales_costing_void'])->name('add_sales_costing_void');

Route::get('/spare-parts-sales-costing', [HomeController::class, 'add_spare_parts_sales_costing_void'])->name('add_spare_parts_sales_costing_void');

Route::get('/renewed-document-list', [HomeController::class, 'renewed_document_list'])->name('analytics.renewed_document_list');
Route::get('/upcoming-reminder-setup', [HomeController::class, 'upcoming_reminder_setup'])->name('analytics.upcoming_reminder_setup');

Route::get('/vehicle-document-add', [VehicleDocumentController::class, 'index'])->name('analytics.add_vehical_document');
Route::post('/vehicle-document-store', [VehicleDocumentController::class, 'store'])->name('vehicle-document.store');

Route::get('/license-document-add', [VehicleLicenseController::class, 'index'])->name('analytics.add_license_document');
Route::post('/license-document-store', [VehicleLicenseController::class, 'store'])->name('analytics.license_document.store');

Route::get('/reminder-setup', [HomeController::class, 'reminder_setup'])->name('business_setup.reminder_setup');
Route::get('/wharfrent-charge-setup', [HomeController::class, 'wharfrent_charge_setup'])->name('business_setup.wharfrent_charge_setup');

// Route::fallback(function () {
//    // return view('page.fallback-page', ['message' => $message]);

//    return view('error.404');

//   });

});

// });



// Route::get('/clear', function() { 
//     Artisan::call('cache:clear');
//     Artisan::call('config:cache');
//     Artisan::call('view:clear');
//     return "Cleared!";
    
// });