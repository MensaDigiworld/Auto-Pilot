<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Inventory;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Inventory\BankController;
use App\Http\Controllers\Inventory\BodyTypeController;
use App\Http\Controllers\Inventory\BusinessPartnerController;
use App\Http\Controllers\Inventory\CostTypeController;
use App\Http\Controllers\Inventory\DisplacementEngineController;
use App\Http\Controllers\Inventory\DriveSystemController;
use App\Http\Controllers\Inventory\ExteriorColorController;
use App\Http\Controllers\Inventory\FuelTypeController;
use App\Http\Controllers\Inventory\GearController;
use App\Http\Controllers\Inventory\InteriorColorController;
use App\Http\Controllers\Inventory\LoadingCapacityController;
use App\Http\Controllers\Inventory\PackageTrimVariantController;
use App\Http\Controllers\Inventory\ProductController;
use App\Http\Controllers\Inventory\SeatingCapacityController;
use App\Http\Controllers\Inventory\ShowroomController;
use App\Http\Controllers\Inventory\SparePartController;
use App\Http\Controllers\Inventory\SupplierController;
use App\Http\Controllers\Inventory\TransmissionController;
use App\Http\Controllers\Inventory\VehicleChassisCodeController;
use App\Http\Controllers\Inventory\VehicleDoorController;
use App\Http\Controllers\Inventory\VehicleSetupController;
use App\Http\Controllers\Inventory\WheelController;
use App\Models\DriveSystem;

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
Route::group(['middleware' => ['auth'], 'prefix' => 'Inventory'], function () {

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

    // Supplier
    Route::post('/supplier/search', [SupplierController::class, 'supplierSearch'])->name('supllier.search');
    Route::post('/supplier/status', [SupplierController::class, 'supplierStatus'])->name('supllier.status');
    Route::post('/bank/store', [SupplierController::class, 'bankStore'])->name('bank.store');
    Route::resource('/suppliers', SupplierController::class);
    Route::get('/New-Supplier', [Inventory::class, 'new_supplier'])->name('inventory.new_supplier');

    Route::get('/List-Supplier', [Inventory::class, 'list_supplier'])->name('inventory.list_supplier');

    // Banks

    // Route::resource('/banks', BankController::class);

    // business parter
    Route::post('/businessPartner/status', [BusinessPartnerController::class, 'searchType'])->name('businessPartner.type');
    Route::post('/businessPartner/status/category', [BusinessPartnerController::class, 'searchCategory'])->name('businessPartner.search.category');
    Route::post('/businessPartner/search', [BusinessPartnerController::class, 'searchBusinessPartner'])->name('businessPartner.search');
    Route::resource('businessPartners', BusinessPartnerController::class);

    // Route::get('/New-Business-Partner', [Inventory::class, 'new_business_partner'])->name('inventory.new_business_partner');

    // Route::get('/List-Business-Partner', [Inventory::class, 'list_business_partner'])->name('inventory.list_business_partner');

    // Showroom

    Route::post('/showroom/status', [ShowroomController::class, 'showroomStatus'])->name('showroom.search');
    Route::post('/showroom/status/type', [ShowroomController::class, 'search'])->name('showroom.search.type');
    Route::resource('/showrooms', ShowroomController::class);


    Route::get('/New-Spare-Parts', [Inventory::class, 'new_spare_parts'])->name('inventory.new_spare_parts');

    Route::get('/List-Spare-Parts', [Inventory::class, 'list_spare_parts'])->name('inventory.list_spare_parts');
    // spare Parts

    Route::post('/spare/parts/type/search', [SparePartController::class, 'typeSearch'])->name('spare.parts.type.search');
    Route::post('/spare/parts/type/search/like', [SparePartController::class, 'typeSearchlike'])->name('spare.parts.type.search.word');
    Route::resource('spareparts', SparePartController::class);


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
    Route::post('/Vehicle-Model-update', [VehicleSetupController::class, 'model_update'])->name('inventory.model_update');
    Route::get('/Vehicle-Model-delete/{id}', [VehicleSetupController::class, 'model_delete'])->name('inventory.model_delete');

    // Body Type
    Route::resource('bodyTypes', BodyTypeController::class);
    // Route::get('/Body_Type/Type', [Inventory::class, 'add_vehicle_bodytype'])->name('inventory.add_vehicle_bodytype');

    // Vehicle Chassis Code
    Route::resource('vehicleChassisCodes', VehicleChassisCodeController::class);
    // Route::get('/Vehicle-Chassis-code', [Inventory::class, 'add_vehicle_chassis_code'])->name('inventory.add_vehicle_chassis_code');

    // Vehicle Package Trim

    Route::resource('packageTrimVariants', PackageTrimVariantController::class);
    // Route::get('/Vehicle-Package-Trim', [Inventory::class, 'add_vehicle_package'])->name('inventory.add_vehicle_package');

    // Fuel Type
    Route::resource('fuelTypes', FuelTypeController::class);
    // Route::get('/Vehicle-Fuel-Type', [Inventory::class, 'add_vehicle_fuel'])->name('inventory.add_vehicle_fuel');

    // Vehicle  Door
    Route::resource('vehicleDoors', VehicleDoorController::class);
    // Route::get('/Vehicle-Door', [Inventory::class, 'add_vehicle_door'])->name('inventory.add_vehicle_door');

    // Transmission
    Route::resource('transmissions', TransmissionController::class);
    // Route::get('/Vehicle-Transmission', [Inventory::class, 'add_vehicle_transmission'])->name('inventory.add_vehicle_transmission');

    // Gears
    Route::resource('gears', GearController::class);
    Route::get('/Vehicle-Gears', [Inventory::class, 'add_vehicle_gear'])->name('inventory.add_vehicle_gear');

    // Drive Systems
    Route::resource('driveSystems', DriveSystemController::class);
    // Route::get('/Drive-System', [Inventory::class, 'add_vehicle_drive_system'])->name('inventory.add_vehicle_drive_system');


    // loading Capacity

    Route::resource('loadingCapacities', LoadingCapacityController::class);
    // Route::get('/Loading-Capacity', [Inventory::class, 'add_vehicle_loading_capacity'])->name('inventory.add_vehicle_loading_capacity');

    // Wheels
    Route::resource('wheels', WheelController::class);
    // Route::get('/Wheels', [Inventory::class, 'add_vehicle_wheel'])->name('inventory.add_vehicle_wheel');

    Route::post('/exteriorcolor/update', [ExteriorColorController::class, 'exteriorcolorUpdate'])->name('exteriorcolor.update');
    Route::resource('exteriorclors', ExteriorColorController::class);
    Route::post('/interiorcolor/update', [InteriorColorController::class, 'interiorcolorUpdate'])->name('interiorcolor.update');
    Route::resource('interiorcolors', InteriorColorController::class);
    // Route::get('/Interior-Color', [Inventory::class, 'add_vehicle_color_interior'])->name('inventory.add_vehicle_color_interior');

    // Route::get('/Exterior-Color', [Inventory::class, 'add_vehicle_color_exterior'])->name('inventory.add_vehicle_color_exterior');

    // Displacement / Endgine CC
    Route::resource('displacementEngines', DisplacementEngineController::class);
    // Route::get('/Engine-CC', [Inventory::class, 'add_vehicle_engine_cc'])->name('inventory.add_vehicle_engine_cc');

    // Seating Capacity
    Route::resource('seatingCapacities', SeatingCapacityController::class);
    Route::get('/Seating-capacity', [Inventory::class, 'add_vehicle_seating_capacity'])->name('inventory.add_vehicle_seating_capacity');


    // Ajax Data Fetch

    // Route::get('/get-man-data', [ProductController::class, 'manufacturer'])->name('get.data.man');
    Route::get('/get-man-data/{id}', [ProductController::class, 'manufacturer'])->name('get.data.man');
    Route::get('/get-model-data/{id}', [ProductController::class, 'model'])->name('get.data.model');
    Route::get('/get-chasis-data/{id}', [ProductController::class, 'chasis'])->name('get.data.chasis');
    Route::get('/get-engine-data/{id}', [ProductController::class, 'engine'])->name('get.data.engine');
    Route::get('/get-seat-data/{id}', [ProductController::class, 'seatingCap'])->name('get.data.seat');
    Route::get('/get-trans-data/{id}', [ProductController::class, 'transmission'])->name('get.data.trans');
    Route::get('/get-drive-data/{id}', [ProductController::class, 'driveSystem'])->name('get.data.drive');

    // Add vehicle  product


    Route::post('/product-update', [ProductController::class, 'productUpdate'])->name('product.update');
    Route::post('/product-manufacture-search', [ProductController::class, 'manSelectSearch'])->name('product.man.select.search');
    Route::post('/product-model-search', [ProductController::class, 'modelSelectSearch'])->name('product.model.select.search');
    Route::post('/product-chasis-search', [ProductController::class, 'chasisSelectSearch'])->name('product.chasis.select.search');
    Route::post('/product-search-word', [ProductController::class, 'searchByWord'])->name('product.search.word');

    Route::get('/product-edit-commercial/{product}', [ProductController::class, 'editCommercial'])->name('product.edit.commercial');
    Route::post('/product-manufacture-commercial-search', [ProductController::class, 'commanSelectSearch'])->name('product.man.select.csearch');
    Route::post('/product-model-commercial-search', [ProductController::class, 'commodelSelectSearch'])->name('product.model.select.csearch');
    Route::post('/product-chasis-commercial-search', [ProductController::class, 'comchasisSelectSearch'])->name('product.chasis.select.csearch');
    Route::post('/product-search-commercial-word', [ProductController::class, 'comsearchByWord'])->name('product.search.cword');

    Route::get('/product-edit-bike/{product}', [ProductController::class, 'editBike'])->name('product.edit.bike');
    Route::post('/product-edit-update', [ProductController::class, 'updateBike'])->name('product.updateBike');
    Route::post('/product-manufacture-bike-search', [ProductController::class, 'bikemanSelectSearch'])->name('product.man.select.bsearch');
    Route::post('/product-model-bike-search', [ProductController::class, 'bikemodelSelectSearch'])->name('product.model.select.bsearch');
    Route::post('/product-search-bike-word', [ProductController::class, 'bikesearchByWord'])->name('product.search.bword');
    Route::post('/Bike-store', [ProductController::class, 'storeBike'])->name('bike.store');

    Route::resource('products', ProductController::class);

    Route::get('/Add-Passenger-Vehicle', [ProductController::class, 'index'])->name('inventory.add_vehicle_passenger');

    Route::get('/Add-Commercial-Vehicle', [ProductController::class, 'addComercialv'])->name('inventory.add_vehicle_commercial');

    Route::get('/Add-Bike', [ProductController::class, 'addBike'])->name('inventory.add_vehicle_bike');

    Route::get('/Vehicle-List', [Inventory::class, 'list_vehicle'])->name('inventory.list_vehicle');



    Route::get('/cost-type-add', [CostTypeController::class, 'create'])->name('inventory.cost_type_add');
    Route::get('/cost-type-edit/{costType}', [CostTypeController::class, 'edit'])->name('inventory.cost_type_edit');
    Route::post('/cost-type-update', [CostTypeController::class, 'update'])->name('inventory.cost_type_update');
    Route::post('/cost-type-store', [CostTypeController::class, 'store'])->name('inventory.cost_type_store');
    Route::post('/cost-type-delete', [CostTypeController::class, 'destroy'])->name('inventory.cost_type_delete');
    Route::get('/list-of-cost', [CostTypeController::class, 'index'])->name('inventory.list_of_cost');



    // Route::get('/list-foregin-purchase', [Inventory::class, 'list_foregin_purchase'])->name('lc.list-foregin-purchase');


    // });

    Route::get('/Under-Development', function () {
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
