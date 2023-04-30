<?php

namespace App\Http\Controllers\Lc;

use App\Models\Bank;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\Exteriorcolor;
use App\Models\Interiorcolor;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Manufacture;
use App\Models\PackageTrimVariant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Purchases = Purchase::orderBy('id', 'DESC')->paginate(10);
        return view('', compact('Purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePurchaseRequest $request)
    {
        return $request->all();
        Purchase::create($request->all);
        return back()->with('success', 'Data has been Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase, $id)
    {
        $pid = Crypt::decrypt($id);
        $data['purchase'] = Purchase::findorfail($pid);
        $data['products'] = Product::select(['id', 'name'])->get();
        $data['suppliers'] = Supplier::select(['id', 'name'])->get();
        $data['banks'] = Bank::select(['id', 'name'])->get();
        $data['interiorcols'] = Interiorcolor::select(['id', 'name'])->get();
        $data['exteriorcols'] = Exteriorcolor::select(['id', 'name'])->get();
        $data['packages'] = PackageTrimVariant::select(['id', 'name'])->get();
        return view('lc_purchase.edit_local_purchase', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePurchaseRequest  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        $purchase->update($request->all());
        return redirect()->route('')->with('success', 'Data has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function lcpurchaseDelete($id)
    {
        $pid = Crypt::decrypt($id);
        $pur = Purchase::findorfail($pid);

        $pur->delete();
        return back()->with('success', 'Data has been Deleted successfully');
    }


    public function new_local_purchase()
    {
        $data['products'] = Product::select(['id', 'name'])->get();
        $data['suppliers'] = Supplier::select(['id', 'name'])->get();
        $data['banks'] = Bank::select(['id', 'name'])->get();
        $data['interiorcols'] = Interiorcolor::select(['id', 'name'])->get();
        $data['exteriorcols'] = Exteriorcolor::select(['id', 'name'])->get();
        $data['packages'] = PackageTrimVariant::select(['id', 'name'])->get();

        return view('lc_purchase.new_local_purchase', $data);
    }

    public function lcLocalpurchaseStore(Request $request)
    {
        //    return $request->all();

        $date = Carbon::now();
        $year = $date->format('Y');
        $years = $date->format('y');
        $month = $date->format('M') . '-' . $years;


        $request->validate([
            'date' => 'required',
            'invoice_number' => 'required',
            'supplier_type' => 'required',
            'vin_chassis_no' => 'required',
            'supplier_id' => 'required',
            'customer_id' => 'required',
            'product_id' => 'required',


        ], [
            'date.required' => 'Date field are requird',
            'invoice_number.required' => 'Invoice field are requird or generate Invoice No',
            'vin_chassis_no.required' => 'phone  field are requird',
            'supplier_type.required' => 'Post Code  field are requird',
            'supplier_id.required' => 'Select Supplier',
            'customer_id.required' => 'Select Customer',
            'product_id.required' => 'Select Vehicle',

        ]);

        Purchase::create([
            'date' => $request->date,
            'invoice_number' => $request->invoice_number,
            'supplier_type' => $request->supplier_type,
            'purchase_type' => $request->purchase_type,
            'remarks' => $request->remarks,
            'landing_port_code' => $request->landing_port_code,
            'shipping_mark' => $request->shipping_mark,
            'vin_chassis_no' => $request->vin_chassis_no,
            'engine_number' => $request->engine_number,
            'color_code' => $request->color_code,
            'auction_grade' => $request->auction_grade,
            'mileage' => $request->mileage,
            'tyre_size' => $request->tyre_size,
            'vehicle_description' => $request->vehicle_description,
            'lc_amount_usd' => $request->lc_amount_usd,
            'price' => $request->price,
            'total_amount' => $request->total_amount,
            'margin' => $request->margin,
            'sales_price' => $request->sales_price,
            'letter_of_credit_code' => $request->letter_of_credit_code,
            // 'status' => $request->status,
            'voucher_code' => $request->voucher_code,
            'branch_id' => $request->branch_id,
            'vehicle_tracking_id' => $request->vehicle_tracking_id,
            'purchase_mode' => $request->purchase_mode,
            'purchase_source' => $request->purchase_source,
            'vehicle_tracking_code' => $request->vehicle_tracking_code,
            'year_of_manufacture' => $request->year_of_manufacture,
            'registration_number' => $request->registration_number,
            'year_of_registration' => $request->year_of_registration,
            'warranty' => $request->warranty,
            'warranty_information' => $request->warranty_information,
            'eta_date' => $request->eta_date,
            'noting_date' => $request->noting_date,
            'assessment_date' => $request->assessment_date,
            'document_status' => $request->document_status,
            'document_expiry_date' => $request->document_expiry_date,
            'fitness_expiry_date' => $request->fitness_expiry_date,
            'tax_token_expiry_date' => $request->tax_token_expiry_date,
            'insurance_expiry_date' => $request->insurance_expiry_date,
            'temporary_sales_price' => $request->temporary_sales_price,
            'costing_type' => $request->costing_type,
            'total_invoice_cost' => $request->total_invoice_cost,
            'total_estimated_cost' => $request->total_estimated_cost,
            'dealer_price' => $request->dealer_price,
            'dealer_discount' => $request->dealer_discount,
            'temporary_dealer_price' => $request->temporary_dealer_price,
            'temporary_dealer_discount' => $request->temporary_dealer_discount,
            'vehicle_condition' => $request->vehicle_condition,
            'vehicle_release_date' => $request->vehicle_release_date,
            'document_location' => $request->document_location,
            'document_release_date' => $request->document_release_date,
            'lcusd_rate' => $request->lcusd_rate,
            'lc_margin_tk' => $request->lc_margin_tk,
            'doc_bl_release_usd' => $request->doc_bl_release_usd,
            'doc_bl_release_usd_rate' => $request->doc_bl_release_usd_rate,
            'doc_bl_release_tk' => $request->doc_bl_release_tk,
            'under_adjustment_usd' => $request->under_adjustment_usd,
            'under_adjustment_usd_rate' => $request->under_adjustment_usd_rate,
            'under_adjustment_tk' => $request->under_adjustment_tk,
            'over_adjustment_usd' => $request->over_adjustment_usd,
            'over_adjustment_tk' => $request->over_adjustment_tk,
            'total_lc_amount_tk' => $request->total_lc_amount_tk,
            'lc_margin_usd' => $request->lc_margin_usd,
            'doc_bl_release_added' => $request->doc_bl_release_added,
            'under_adjustment_confirmed' => $request->under_adjustment_confirmed,
            'supplier_id' => $request->supplier_id,
            'customer_id' => $request->customer_id,
            'interiorcolor_id' => $request->interiorcolor_id,
            'exteriorcolor_id' => $request->exteriorcolor_id,
            'product_id' => $request->product_id,
            'emp_id' => $request->emp_id,
            'price_remarks' => $request->price_remarks,
            'year' => $year,
            'month' => $month,
        ]);







        // $data = Purchase::create($request->all());
        return back();
    }


    public function lcLocalpurchaseUpdate(Request $request)
    {
        // return $request->all();

        $date = Carbon::now();
        $year = $date->format('Y');
        $years = $date->format('y');
        $month = $date->format('M') . '-' . $years;


        $request->validate([
            'lcpurchase_id' => 'required',
            'date' => 'required',
            'invoice_number' => 'required',
            'supplier_type' => 'required',
            'vin_chassis_no' => 'required',
            'supplier_id' => 'required',
            'customer_id' => 'required',
            'product_id' => 'required',


        ], [
            'date.required' => 'Date field are requird',
            'invoice_number.required' => 'Invoice field are requird or generate Invoice No',
            'vin_chassis_no.required' => 'phone  field are requird',
            'supplier_type.required' => 'Post Code  field are requird',
            'supplier_id.required' => 'Select Supplier',
            'customer_id.required' => 'Select Customer',
            'product_id.required' => 'Select Vehicle',

        ]);

        $purchase = Purchase::findorfail($request->lcpurchase_id);


        $purchase->update([
            'date' => $request->date,
            'invoice_number' => $request->invoice_number,
            'supplier_type' => $request->supplier_type,
            'purchase_type' => $request->purchase_type,
            'remarks' => $request->remarks,
            'landing_port_code' => $request->landing_port_code,
            'shipping_mark' => $request->shipping_mark,
            'vin_chassis_no' => $request->vin_chassis_no,
            'engine_number' => $request->engine_number,
            'color_code' => $request->color_code,
            'auction_grade' => $request->auction_grade,
            'mileage' => $request->mileage,
            'tyre_size' => $request->tyre_size,
            'vehicle_description' => $request->vehicle_description,
            'lc_amount_usd' => $request->lc_amount_usd,
            'price' => $request->price,
            'total_amount' => $request->total_amount,
            'margin' => $request->margin,
            'sales_price' => $request->sales_price,
            'letter_of_credit_code' => $request->letter_of_credit_code,
            // 'status' => $request->status,
            'voucher_code' => $request->voucher_code,
            'branch_id' => $request->branch_id,
            'vehicle_tracking_id' => $request->vehicle_tracking_id,
            'purchase_mode' => $request->purchase_mode,
            'purchase_source' => $request->purchase_source,
            'vehicle_tracking_code' => $request->vehicle_tracking_code,
            'year_of_manufacture' => $request->year_of_manufacture,
            'registration_number' => $request->registration_number,
            'year_of_registration' => $request->year_of_registration,
            'warranty' => $request->warranty,
            'warranty_information' => $request->warranty_information,
            'eta_date' => $request->eta_date,
            'noting_date' => $request->noting_date,
            'assessment_date' => $request->assessment_date,
            'document_status' => $request->document_status,
            'document_expiry_date' => $request->document_expiry_date,
            'fitness_expiry_date' => $request->fitness_expiry_date,
            'tax_token_expiry_date' => $request->tax_token_expiry_date,
            'insurance_expiry_date' => $request->insurance_expiry_date,
            'temporary_sales_price' => $request->temporary_sales_price,
            'costing_type' => $request->costing_type,
            'total_invoice_cost' => $request->total_invoice_cost,
            'total_estimated_cost' => $request->total_estimated_cost,
            'dealer_price' => $request->dealer_price,
            'dealer_discount' => $request->dealer_discount,
            'temporary_dealer_price' => $request->temporary_dealer_price,
            'temporary_dealer_discount' => $request->temporary_dealer_discount,
            'vehicle_condition' => $request->vehicle_condition,
            'vehicle_release_date' => $request->vehicle_release_date,
            'document_location' => $request->document_location,
            'document_release_date' => $request->document_release_date,
            'lcusd_rate' => $request->lcusd_rate,
            'lc_margin_tk' => $request->lc_margin_tk,
            'doc_bl_release_usd' => $request->doc_bl_release_usd,
            'doc_bl_release_usd_rate' => $request->doc_bl_release_usd_rate,
            'doc_bl_release_tk' => $request->doc_bl_release_tk,
            'under_adjustment_usd' => $request->under_adjustment_usd,
            'under_adjustment_usd_rate' => $request->under_adjustment_usd_rate,
            'under_adjustment_tk' => $request->under_adjustment_tk,
            'over_adjustment_usd' => $request->over_adjustment_usd,
            'over_adjustment_tk' => $request->over_adjustment_tk,
            'total_lc_amount_tk' => $request->total_lc_amount_tk,
            'lc_margin_usd' => $request->lc_margin_usd,
            'doc_bl_release_added' => $request->doc_bl_release_added,
            'under_adjustment_confirmed' => $request->under_adjustment_confirmed,
            'supplier_id' => $request->supplier_id,
            'customer_id' => $request->customer_id,
            'interiorcolor_id' => $request->interiorcolor_id,
            'exteriorcolor_id' => $request->exteriorcolor_id,
            'product_id' => $request->product_id,
            'emp_id' => $request->emp_id,
            'price_remarks' => $request->price_remarks,
            // 'year' => $year,
            // 'month' => $month,
        ]);

        return redirect()->route('lc.in-local-purchase');
    }


    public function lcSuppliersStore(Request $request)
    {


        $data = Supplier::create($request->all());
        return back();
    }


    public function incompleteLocalPurchase()
    {
        $data['months'] = Purchase::select('month', DB::raw('count(*) as count'))->groupBy('month')->get();

        $data['manufacturers'] = Manufacture::select(['id', 'name'])->get();
        $data['suppliers'] = Supplier::select(['id', 'name'])->get();
        $data['incpurs'] = Purchase::where('status', 0)->paginate(10);
        return view('lc_purchase.list_ic_local_purchase', $data);
    }
}
