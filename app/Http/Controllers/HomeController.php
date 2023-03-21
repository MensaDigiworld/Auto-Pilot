<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VatSetup;
use App\Models\SalesAndService;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function vat_setup()
    {
        return view('business_setup.vat_setup');
    }
    public function vat_setup_store(Request $request)
    {
        $vat_setup = new VatSetup();
        $vat_setup    -> taxation            = $request->taxation; 
        $vat_setup    -> vat                    = $request->vat; 
        $vat_setup    -> custom_text     = $request->custom_text; 
        $vat_setup    ->save();
         return redirect()->back()->with('success', 'Vat Setup Added Successfully');
    }
    public function financial_year()
    {
        return view('business_setup.financialyear');
    }
    public function after_sales()
    {
        return view('business_setup.add_after_sales_services');
    }
    public function list_after_sales()
    {
         $salesandservice=SalesAndService::orderBy('id','desc')->paginate(10);
        return view('business_setup.list_after_sales_services', compact('salesandservice'));
    }
    
    public function add_user()
    {
        return view('business_setup.add_user');
    }

    public function list_user()
    {
        return view('business_setup.list_user');
    }

    public function add_terms_condition()
    {
        return view('business_setup.add_terms_condition');
    }

    public function list_terms_condition()
    {
        return view('business_setup.list_terms_condition');
    }

    public function add_irc()
    {
        return view('business_setup.add_irc');
    }

    public function list_irc()
    {
        return view('business_setup.list_irc');
    }

    public function add_lc_charge()
    {
        return view('business_setup.add_lc_charge');
    }

    public function list_lc_charge()
    {
        return view('business_setup.list_lc_charge');
    }

    public function add_carrier()
    {
        return view('business_setup.add_carrier');
    }

    public function list_carrier()
    {
        return view('business_setup.list_carrier');
    }

    public function add_port_loading()
    {
        return view('business_setup.add_port_loading');
    }

    public function list_port_loading()
    {
        return view('business_setup.list_port_loading');
    }

    public function add_port_landing()
    {
        return view('business_setup.add_port_landing');
    }

    public function list_port_landing()
    {
        return view('business_setup.list_port_landing');
    }

    public function add_destination()
    {
        return view('business_setup.add_destination');
    }

    public function list_destination()
    {
        return view('business_setup.list_destination');
    }

    public function add_custom_office()
    {
        return view('business_setup.add_custom_office');
    }

    public function list_custom_office()
    {
        return view('business_setup.list_custom_office');
    }

    public function add_declarant()
    {
        return view('business_setup.add_declarant');
    }

    public function list_declarant()
    {
        return view('business_setup.list_declarant');
    }

    public function add_hs_code()
    {
        return view('business_setup.add_hs_code');
    }

    public function list_hs_code()
    {
        return view('business_setup.list_hs_code');
    }

// Opening Stock & Balance

    public function add_vehicle_open_stock()
    {
        return view('business_setup.add_vehicle_opening_stock');
    }

    public function list_vehicle_open_stock()
    {
        return view('business_setup.list_vehicle_opening_stock');
    }

    public function approve_vehicle_open_stock()
    {
        return view('business_setup.approve_vehicle_open_stock');
    }

    public function add_spare_parts_open_stock()
    {
        return view('business_setup.add_spare_parts_opening_stock');
    }

    public function list_spare_parts_open_stock()
    {
        return view('business_setup.list_spare_parts_opening_stock');
    }

    public function add_opening_blance()
    {
        return view('business_setup.add_opening_blance');
    }

    public function list_opening_blance()
    {
        return view('business_setup.list_opening_blance');
    }

    public function add_costing_void()
    {
        return view('business_setup.add_costing_void');
    }
    public function add_spare_parts_costing_void()
    {
        return view('business_setup.add_spare_parts_costing_void');
    }
    public function add_sales_costing_void()
    {
        return view('business_setup.add_sales_costing_void');
    }

    public function add_spare_parts_sales_costing_void()
    {
        return view('business_setup.add_spare_parts_sales_costing_void');
    }
    public function renewed_document_list()
    {
        return view('business_setup.renewed_document_list');
    }
    public function upcoming_reminder_setup()
    {
        return view('business_setup.upcoming_reminder_setup');
    }

    public function reminder_setup()
    {
        return view('business_setup.reminder_setup');
    }
    public function wharfrent_charge_setup()
    {
        return view('business_setup.wharfrent_charge_setup');
    }
        public function configuration_information()    {
        return view('business_setup.configuration_information');
    }

    
}
