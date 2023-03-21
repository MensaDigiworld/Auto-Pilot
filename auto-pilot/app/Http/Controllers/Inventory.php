<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inventory extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        return view('inventory.dashboard');
    }

    public function inventory_manager(){
        return view('inventory.inventory_manager');
    }
    public function vehicle_stock(){
        return view('inventory.vehicle_stock');
    }
    public function update_vehicle_price(){
        return view('inventory.edit_vehicle_correction_price');
    }
    public function new_pre_order(){
        return view('inventory.new_pre_order');
    }
    public function new_vehical_transfer(){
        return view('inventory.new_transfer_vehical');
    }
    public function list_vehicale_transfer_showroom(){
        return view('inventory.list_vehicale_transfer_showroom');
    }
    public function list_return_vehicle_workshop(){
        return view('inventory.list_return_vehicle_workshop');
    }
    public function list_vehicle_transfer_other_shoroom(){
        return view('inventory.list_vehicle_transfer_other_shoroom');
    }
    public function list_windows_sticker(){
        return view('inventory.list_windows_sticker');
    }
    public function list_vehicle_inspection(){
        return view('inventory.list_vehicle_inspection');
    }
    public function list_workshop_transfer_incomplete(){
        return view('inventory.list_workshop_transfer_incomplete');
    }
    public function list_vehicle_workshop(){
        return view('inventory.list_vehicle_workshop');
    }
    public function list_incomplete_showroom_transfer(){
        return view('inventory.list_incomplete_showroom_transfer');
    }
    public function new_issue_information(){
        return view('inventory.new_issue_information');
    }
    public function list_issue_information(){
        return view('inventory.list_issue_information');
    }
    public function approve_issue_information(){
        return view('inventory.approve_issue_information');
    }
    public function review_issue_information(){
        return view('inventory.review_issue_information');
    }
    public function new_window_sticker(){
        return view('inventory.new_window_sticker');
    }
    public function list_spare_parts_stock(){
        return view('inventory.list_spare_parts_stock');
    }
    public function new_dealer(){
        return view('inventory.new_dealer');
    }
    public function new_supplier(){
        return view('inventory.new_supplier');
    }
    public function list_supplier(){
        return view('inventory.list_supplier');
    }
    public function new_business_partner(){
        return view('inventory.new_business_partner');
    }
    public function list_business_partner(){
        return view('inventory.list_business_partner');
    }
    public function list_warehouse_showroom(){
        return view('inventory.list_warehouse_showroom');
    }
    public function new_warehouse_showroom(){
        return view('inventory.new_warehouse_showroom');
    }
    public function list_spare_parts(){
        return view('inventory.list_spare_parts');
    }
    public function new_spare_parts(){
        return view('inventory.new_spare_parts');
    }
    public function edit_vehicle_inspection(){
        return view('inventory.edit_vehicle_inspection');
    }
    public function new_vehicle_inspection(){
        return view('inventory.new_vehicle_inspection');
    }
    public function vehicle_recondition(){
        return view('inventory.vehicle_recondition');
    }
    public function vehicle_transfer(){
        return view('inventory.vehicle_transfer');
    }
    public function temporary_challan(){
        return view('inventory.temporary_challan');
    }
    public function add_vehicle_bodytype(){
        return view('inventory.add_vehicle_bodytype');
    }
    public function add_vehicle_chassis_code(){
        return view('inventory.add_vehicle_chassis_code');
    }
    public function add_vehicle_package(){
        return view('inventory.add_vehicle_package');
    }
    public function add_vehicle_fuel(){
        return view('inventory.add_vehicle_fuel');
    }
    public function add_vehicle_door(){
        return view('inventory.add_vehicle_door');
    }
    public function add_vehicle_transmission(){
        return view('inventory.add_vehicle_transmission');
    }
    public function add_vehicle_gear(){
        return view('inventory.add_vehicle_gears');
    }
    public function add_vehicle_drive_system(){
        return view('inventory.add_vehicle_drive_system');
    }
    public function add_vehicle_loading_capacity(){
        return view('inventory.add_vehicle_loading_capacity');
    }
    public function add_vehicle_wheel(){
        return view('inventory.add_vehicle_wheel');
    }
    public function add_vehicle_color_interior(){
        return view('inventory.add_vehicle_color_interior');
    }
    public function add_vehicle_color_exterior(){
        return view('inventory.add_vehicle_color_exterior');
    }
    public function add_vehicle_engine_cc(){
        return view('inventory.add_vehicle_engine_cc');
    }
    public function add_vehicle_seating_capacity(){
        return view('inventory.add_vehicle_seating_capacity');
    }
    public function add_vehicle_passenger(){
        return view('inventory.add_vehicle_passenger');
    }
    public function add_vehicle_commercial(){
        return view('inventory.add_vehicle_commercial');
    }
    public function add_vehicle_bike(){
        return view('inventory.add_vehicle_bike');
    }
    public function list_vehicle(){
        return view('inventory.list_vehicle');
    }
    public function list_of_cost(){
        return view('inventory.list_of_cost');
    }
}
