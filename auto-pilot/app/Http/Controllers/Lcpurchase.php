<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lcpurchase extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        return view('lc_purchase.dashboard');
    }

    public function lc_manager(){
        return view('lc_purchase.lc_manager');
    }

    public function new_foregin_purchase(){
        return view('lc_purchase.new_foregin_purchase');
    }

    public function list_foregin_purchase(){
        return view('lc_purchase.list_foreign_purchase');
    }

    public function new_local_purchase(){
        return view('lc_purchase.new_local_purchase');
    }

    public function incomplete_local_purchase(){
        return view('lc_purchase.list_ic_local_purchase');
    }

    public function complete_local_purchase(){
        return view('lc_purchase.list_co_local_purchase');
    }

    public function new_proforma_invoice(){
        return view('lc_purchase.new_proforma_invoice');
    }
    public function edit_proforma_invoice(){
        return view('lc_purchase.edit_proforma_invoice');
    }
    public function list_amend_proforma_invoice(){
        return view('lc_purchase.list_amend_proforma_invoice');
    }
    public function list_amend_proforma_insurance(){
        return view('lc_purchase.list_amend_proforma_insurance');
    }

    public function list_proforma_invoice(){
        return view('lc_purchase.list_proforma_invoice');
    }

    public function list_cargo_insurance(){
        return view('lc_purchase.list_cargo_insurance');
    }

    public function list_letter_credit(){
        return view('lc_purchase.list_letter_credit');
    }

    public function list_amend_letter_credit(){
        return view('lc_purchase.list_amend_letter_credit');
    }

    public function new_bill_lading(){
        return view('lc_purchase.new_bill_lading');
    }
    public function list_bill_lading(){
        return view('lc_purchase.list_bill_lading');
    }
    public function new_bill_duty(){
        return view('lc_purchase.new_bill_duty');
    }
    public function list_bill_custom_duty(){
        return view('lc_purchase.list_bill_custom_duty');
    }

    public function new_bill_entry(){
        return view('lc_purchase.new_bill_entry');
    }
    public function list_bill_entry(){
        return view('lc_purchase.list_bill_entry');
    }

    public function list_approve_costing(){
        return view('lc_purchase.list_approve_costing');
    }

    public function new_spare_parts(){
        return view('lc_purchase.new_spare_parts');
    }

    public function list_in_spare_parts(){
        return view('lc_purchase.list_in_spare_parts');
    }

    public function list_com_spare_parts(){
        return view('lc_purchase.list_com_spare_parts');
    }

    public function lc_purchase_report(){
        return view('lc_purchase.report_lc_purchase');
    }
    public function new_insurance(){
        return view('lc_purchase.new_insurance');
    }
    public function list_insurance(){
        return view('lc_purchase.list_insurance');
    }
    public function new_lc(){
        return view('lc_purchase.new_lc');
    }
    public function local_purchase_manager(){
        return view('lc_purchase.new_local_purchase_manager');
    }
    public function new_costing(){
        return view('lc_purchase.new_costing');
    }
    public function edit_local_purchase(){
        return view('lc_purchase.edit_local_purchase_costing');
    }
    public function vehicle_track(){
        return view('lc_purchase.vehicle_track');
    }
    public function list_pending_purchase(){
        return view('lc_purchase.list_pending_purchase');
    }
    public function list_pending_import(){
        return view('lc_purchase.list_pending_import');
    }
    public function list_pending_insurance(){
        return view('lc_purchase.list_pending_insurance');
    }
    public function list_pending_lc(){
        return view('lc_purchase.list_pending_lc');
    }
    public function list_pending_bl(){
        return view('lc_purchase.list_pending_bl');
    }
    public function list_pending_be(){
        return view('lc_purchase.list_pending_be');
    }
    //----------Reports------------------//
    public function vehicle_wise_report(){
        return view('lc_purchase.reports.vehicle_wise_report');
    }
    public function pending_auction_list(){
        return view('lc_purchase.reports.pending_auction_list_lc');
    }
    public function lc_overview(){
        return view('lc_purchase.reports.lc_overview');
    }
    public function bill_of_lading_list(){
        return view('lc_purchase.reports.bill_of_landing');
    }
}
