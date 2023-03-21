<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Inventory;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Inventory\VehicleSetupController;

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


// Inventory

// Route::prefix('Inventory')->group( function() {
  Route::group(['middleware' => ['auth'],'prefix' =>'Inventory'], function(){

  Route::get('/dashboard', [Inventory::class, 'index'])->name('invent.home');

  Route::get('/inventory-manager', [Inventory::class, 'inventory_manager'])->name('inventory.inventory-manager');

  Route::get('/Vehicle-stock', [Inventory::class, 'vehicle_stock'])->name('inventory.vehicle_stock');

  Route::get('/vehicle-correction-price-update', [Inventory::class, 'update_vehicle_price'])->name('inventory.vehicle-correction-price-update');

  Route::get('/new-pre-order', [Inventory::class, 'new_pre_order'])->name('inventory.new-pre-order');

  Route::get('/new-vehical-transfer', [Inventory::class, 'new_vehical_transfer'])->name('inventory.new-vehical-transfer');

  Route::get('/Vehicle(s)-Transfarred-From-Other-Showrooms', [Inventory::class, 'list_vehicale_transfer_showroom'])->name('inventory.list-vehicale-transfer-showroom');

  Route::get('/Return-Vehicle-from-Workshop', [Inventory::class, 'list_return_vehicle_workshop'])->name('inventory.list-return-vehicle-workshop');

  Route::get('/Vehicle-Transferred-to-Other-Showroom', [Inventory::class, 'list_vehicle_transfer_other_shoroom'])->name('inventory.list_vehicle_transfer_other_shoroom');

  Route::get('/Window-Sticker-List', [Inventory::class, 'list_windows_sticker'])->name('inventory.list_windows_sticker');

  Route::get('/Vehicle(s)-Inspection-List', [Inventory::class, 'list_vehicle_inspection'])->name('inventory.list_vehicle_inspection');

  Route::get('/Workshop-Transfer-Process-Incomplete-List', [Inventory::class, 'list_workshop_transfer_incomplete'])->name('inventory.list_workshop_transfer_incomplete');

  Route::get('/Vehicle-in-Workshop', [Inventory::class, 'list_vehicle_workshop'])->name('inventory.list_vehicle_workshop');

  Route::get('/Incompleted Showroom Transfer', [Inventory::class, 'list_incomplete_showroom_transfer'])->name('inventory.list_incomplete_showroom_transfer');

  Route::get('/Issue Information', [Inventory::class, 'new_issue_information'])->name('inventory.new_issue_information');

  Route::get('/Issue List', [Inventory::class, 'list_issue_information'])->name('inventory.list_issue_information');

  Route::get('/Approved Issue List', [Inventory::class, 'approve_issue_information'])->name('inventory.approve_issue_information');
  
  Route::get('/Review Issue List', [Inventory::class, 'review_issue_information'])->name('inventory.review_issue_information');

  Route::get('/Window Sticker Information', [Inventory::class, 'new_window_sticker'])->name('inventory.new_windows_sticker');

  Route::get('/Spare Parts Stock', [Inventory::class, 'list_spare_parts_stock'])->name('inventory.list_spare_parts_stock');

  Route::get('/New-Dealer', [Inventory::class, 'new_dealer'])->name('inventory.new_dealer');

  Route::get('/New-Supplier', [Inventory::class, 'new_supplier'])->name('inventory.new_supplier');

  Route::get('/List-Supplier', [Inventory::class, 'list_supplier'])->name('inventory.list_supplier');

  Route::get('/New-Business-Partner', [Inventory::class, 'new_business_partner'])->name('inventory.new_business_partner');

  Route::get('/List-Business-Partner', [Inventory::class, 'list_business_partner'])->name('inventory.list_business_partner');

  
  Route::get('/New-Warehouse-Showrrom', [Inventory::class, 'new_warehouse_showroom'])->name('inventory.new_warehouse_showroom');

  Route::get('/List-Warehouse-Showrrom', [Inventory::class, 'list_warehouse_showroom'])->name('inventory.list_warehouse_showroom');

  Route::get('/New-Spare-Parts', [Inventory::class, 'new_spare_parts'])->name('inventory.new_spare_parts');

  Route::get('/List-Spare-Parts', [Inventory::class, 'list_spare_parts'])->name('inventory.list_spare_parts');

  Route::get('/Update-Vehicle-Inspection', [Inventory::class, 'edit_vehicle_inspection'])->name('inventory.edit_vehicle_inspection');

  Route::get('/New-Vehicle-Inspection', [Inventory::class, 'new_vehicle_inspection'])->name('inventory.new_vehicle_inspection');

  Route::get('/Vehicle-Recondation', [Inventory::class, 'vehicle_recondition'])->name('inventory.vehicle_recondition');

  Route::get('/Vehicle-Transfer', [Inventory::class, 'vehicle_transfer'])->name('inventory.vehicle_transfer');

  Route::get('/Temporary-Delivery-Challan', [Inventory::class, 'temporary_challan'])->name('inventory.temporary_challan');

  // Vehicle Setup
//Rajesh--------------------
  Route::get('/Vehicle-Category', [VehicleSetupController::class, 'add_vehicle_category'])->name('inventory.add_vehicle_category');
  Route::post('/vehicle-category-store', [VehicleSetupController::class, 'vehicle_category_save'])->name('vehicle-category.store');
  Route::get('/vehicle-category-edit/{id}', [VehicleSetupController::class, 'vehicle_category_edit'])->name('inventory.vehicle_category_edit');
  Route::post('/vehicle-category-update', [VehicleSetupController::class, 'vehicle_category_update'])->name('inventory.vehicle_category_update');
  Route::get('/vehicle-category-delete/{id}', [VehicleSetupController::class, 'vehicle_category_delete'])->name('inventory.vehicle_category_delete');

  Route::get('/Vehicle-Manufacture', [VehicleSetupController::class, 'add_vehicle_manufacture'])->name('inventory.add_vehicle_manufacture');
  Route::post('/Vehicle-Manufacture-save', [VehicleSetupController::class, 'mnaufacture_save'])->name('inventory.mnaufacture_save');
  Route::get('/Vehicle-Manufacture-Edit/{id}', [VehicleSetupController::class, 'mnaufacture_edit'])->name('inventory.mnaufacture_edit');
  Route::post('/Vehicle-Manufacture-update', [VehicleSetupController::class, 'mnaufacture_update'])->name('inventory.mnaufacture_update');
  Route::get('/Vehicle-Manufacture-Delete/{id}', [VehicleSetupController::class, 'mnaufacture_delete'])->name('inventory.mnaufacture_delete');


  Route::get('/Vehicle-Model', [VehicleSetupController::class, 'model_index'])->name('inventory.add_vehicle_model');
  Route::post('/Vehicle-Model-Save', [VehicleSetupController::class, 'model_save'])->name('inventory.model_save');
  Route::get('/Vehicle-Model-edit/{id}', [VehicleSetupController::class, 'model_edit'])->name('inventory.model_edit');
  Route::get('/Vehicle-Model-delete/{id}', [VehicleSetupController::class, 'model_delete'])->name('inventory.model_delete');

  Route::get('/Body Type/ Type', [Inventory::class, 'add_vehicle_bodytype'])->name('inventory.add_vehicle_bodytype');

  Route::get('/Vehicle-Chassis-code', [Inventory::class, 'add_vehicle_chassis_code'])->name('inventory.add_vehicle_chassis_code');

  Route::get('/Vehicle-Package-Trim', [Inventory::class, 'add_vehicle_package'])->name('inventory.add_vehicle_package');

  Route::get('/Vehicle-Fuel-Type', [Inventory::class, 'add_vehicle_fuel'])->name('inventory.add_vehicle_fuel');

  Route::get('/Vehicle-Door', [Inventory::class, 'add_vehicle_door'])->name('inventory.add_vehicle_door');

  Route::get('/Vehicle-Transmission', [Inventory::class, 'add_vehicle_transmission'])->name('inventory.add_vehicle_transmission');

  Route::get('/Vehicle-Gears', [Inventory::class, 'add_vehicle_gear'])->name('inventory.add_vehicle_gear');

  Route::get('/Drive-System', [Inventory::class, 'add_vehicle_drive_system'])->name('inventory.add_vehicle_drive_system');

  Route::get('/Loading-Capacity', [Inventory::class, 'add_vehicle_loading_capacity'])->name('inventory.add_vehicle_loading_capacity');

  Route::get('/Wheels', [Inventory::class, 'add_vehicle_wheel'])->name('inventory.add_vehicle_wheel');

  Route::get('/Interior-Color', [Inventory::class, 'add_vehicle_color_interior'])->name('inventory.add_vehicle_color_interior');

  Route::get('/Exterior-Color', [Inventory::class, 'add_vehicle_color_exterior'])->name('inventory.add_vehicle_color_exterior');

  Route::get('/Engine-CC', [Inventory::class, 'add_vehicle_engine_cc'])->name('inventory.add_vehicle_engine_cc');
  
  Route::get('/Seating-capacity', [Inventory::class, 'add_vehicle_seating_capacity'])->name('inventory.add_vehicle_seating_capacity');

  // Add vehicle  product

  Route::get('/Add-Passenger-Vehicle', [Inventory::class, 'add_vehicle_passenger'])->name('inventory.add_vehicle_passenger');

  Route::get('/Add-Commercial-Vehicle', [Inventory::class, 'add_vehicle_commercial'])->name('inventory.add_vehicle_commercial');

  Route::get('/Add-Bike', [Inventory::class, 'add_vehicle_bike'])->name('inventory.add_vehicle_bike');

  Route::get('/Vehicle-List', [Inventory::class, 'list_vehicle'])->name('inventory.list_vehicle');

  Route::get('/list-of-cost', [Inventory::class, 'list_of_cost'])->name('inventory.list_of_cost');

  

  // Route::get('/list-foregin-purchase', [Inventory::class, 'list_foregin_purchase'])->name('lc.list-foregin-purchase');


// });

  Route::get('/Under-Development',function() {
    return view('error.200');
  });

});



Route::fallback(function () {
   return view('error.404');

  });

// Route::get('/clear', function() { 
//     Artisan::call('cache:clear');
//     Artisan::call('config:cache');
//     Artisan::call('view:clear');
//     return "Cleared!";
    
// });