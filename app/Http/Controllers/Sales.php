<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sales extends Controller
{


    public function dashboard(){
        return view('sales.dashboard');
    }

    public function incomplete_sales(){
        return view('sales.list_incomplete_sales');
    }
    public function confirmed_sales(){
        return view('sales.list_confirmed_sales');
    }
    public function confirmed_delivery(){
        return view('sales.list_confirmed_delivery');
    }
    public function pending_delivery(){
        return view('sales.list_pending_delivery');
    }
    public function update_vehicle_price(){
        return view('sales.edit_vehicle_correction_price');
    }
    public function new_pre_order(){
        return view('sales.new_pre_order');
    }
    public function list_pre_order(){
        return view('sales.list_pre_order');
    }
    public function list_loan_manager(){
        return view('sales.list_loan_manager');
    }
    public function add_loan_information(){
        return view('sales.new_loan_information');
    }
    public function add_vehicle_registration(){
        return view('sales.add_vehicle_registration');
    }
    public function new_loan_information(){
        return view('sales.new_loan_information');
    }
    public function list_incomplete_booking(){
        return view('sales.list_incomplete_booking');
    }

    public function list_incomplete_parts_sales(){
        return view('sales.list_incomplete_parts_sales');
    }
    public function list_confirmed_parts_sales(){
        return view('sales.list_confirmed_parts_sales');
    }
    public function list_active_pre_order(){
        return view('sales.list_active_pre_order');
    }
    public function list_active_booking(){
        return view('sales.list_active_booking');
    }
    public function list_incom_after_sales(){
        return view('sales.list_incomplete_after_sales');
    }
    public function add_customer(){
        return view('sales.add_customer');
    }
    public function list_customer(){
        return view('sales.list_customer');
    }
    public function list_quotation(){
        return view('sales.list_quotation');
    }
    public function booked_services(){
        return view('sales.booked_services');
    }
    public function vehicle_registration(){
        return view('sales.list_vehicle_registartion');
    }
    public function booking(){
        return view('sales.booking');
    }
    public function list_booking(){
        return view('sales.list_booking');
    }
    public function add_quotation(){
        return view('sales.add_quotation');
    }
    public function list_general_quotation(){
        return view('sales.list_general_quotation');
    }
    public function add_spare_parts_sales(){
        return view('sales.add_spare_parts_sales');
    }
    public function add_dealer_sales(){
        return view('sales.add_dealer_sales');
    }
    public function add_generate_quotation(){
        return view('sales.add_generate_quotation');
    }
    public function add_after_sales_manager(){
        return view('sales.add_after_sales_manager');
    }
    public function list_after_sales_manager(){
        return view('sales.list_after_sales_manager');
    }
    public function new_vehicle_sales_booking(){
        return view('sales.new_vehicle_sales_booking');
    }
    public function report_sales(){
        return view('sales.report_sales');
    }

    public function loan_calculator(){
        return view('sales.vehicle_loan_calculator');
    }
    public function vehicle_lookup(){
        return view('sales.vehicle_lookup');
    }
    
    //------------------Reports---------------//

    public function report_booking_list(){
        return view('sales.reports.booking_list');
    }
    public function date_wise_sales_details(){
        return view('sales.reports.date_wise_sales_details');
    }
    public function date_wise_sales_summary(){
        return view('sales.reports.date_wise_sales_summary');
    }
    public function monthly_sales_details(){
        return view('sales.reports.monthly_sales_details');
    }
    public function monthly_sales_summary(){
        return view('sales.reports.monthly_sales_summery');
    }
    public function vehicle_delivery_report(){
        return view('sales.reports.vehicle_delivery_report');
    }
    public function key_register_report(){
        return view('sales.reports.key_register_report');
    }
    public function pending_delivery_list(){
        return view('sales.reports.pending_delivery_list');
    }
    public function pre_order_list_report(){
        return view('sales.reports.pre_order_list');
    }
    public function pending_pre_order_list_report(){
        return view('sales.reports.pending_pre_order_list');
    }
    public function customer_loan_report(){
        return view('sales.reports.customer_loan_report');
    }
    public function stock_transfer_report(){
        return view('sales.reports.stock_transfer_report');
    }
    public function registration_pending_list_report(){
        return view('sales.reports.registration_pending_list');
    }
    
}
