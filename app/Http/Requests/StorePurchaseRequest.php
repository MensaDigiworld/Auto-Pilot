<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePurchaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => 'required',
            'invoice_number' => 'required',
            'supplier_type' => 'required',
            'purchase_mode'  => 'required',
            'purchase_type'  => 'nullable',
            'remarks' => 'nullable',
            'image'  => 'nullable',
            'landing_port_code'  => 'nullable',
            'shipping_mark'  => 'nullable',
            'vin_chassis_no'  => 'required',
            'engine_number' => 'nullable',
            'color_code' => 'nullable',
            'auction_grade' => 'nullable',
            'mileage' => 'nullable',
            'tyre_size' => 'nullable',
            'vehicle_description' => 'nullable',
            'lc_amount_usd' => 'nullable',
            'price' => 'nullable',
            'total_amount' => 'nullable',
            'margin' => 'nullable',
            'sales_price' => 'nullable',
            'letter_of_credit_code' => 'nullable',
            'status' => 'nullable',
            'voucher_code' => 'nullable',
            'branch_id' => 'nullable',
            'vehicle_tracking_id' => 'nullable',
            'purchase_mode' => 'nullable',
            'purchase_source' => 'required',
            'vehicle_tracking_code' => 'nullable',
            'year_of_manufacture' => 'nullable',
            'registration_number' => 'nullable',
            'year_of_registration' => 'nullable',
            'warranty' => 'nullable',
            'warranty_information' => 'nullable',
            'eta_date' => 'nullable',
            'noting_date' => 'nullable',
            'assessment_date' => 'nullable',
            'document_status' => 'nullable',
            'document_expiry_date' => 'nullable',
            'fitness_expiry_date' => 'nullable',
            'tax_token_expiry_date' => 'nullable',
            'insurance_expiry_date' => 'nullable',
            'temporary_sales_price' => 'nullable',
            'costing_type' => 'nullable',
            'total_invoice_cost' => 'nullable',
            'total_estimated_cost' => 'nullable',
            'dealer_price' => 'nullable',
            'dealer_discount' => 'nullable',
            'temporary_dealer_price' => 'nullable',
            'temporary_dealer_discount' => 'nullable',
            'vehicle_condition' => 'nullable',
            'vehicle_release_date' => 'nullable',
            'document_location' => 'nullable',
            'document_release_date' => 'nullable',
            'lcusd_rate' => 'nullable',
            'lc_margin_tk' => 'nullable',
            'doc_bl_release_usd' => 'nullable',
            'doc_bl_release_usd_rate' => 'nullable',
            'doc_bl_release_tk' => 'nullable',
            'under_adjustment_usd' => 'nullable',
            'under_adjustment_usd_rate' => 'nullable',
            'under_adjustment_tk' => 'nullable',
            'over_adjustment_usd' => 'nullable',
            'over_adjustment_tk' => 'nullable',
            'total_lc_amount_tk' => 'nullable',
            'lc_margin_usd' => 'nullable',
            'doc_bl_release_added' => 'nullable',
            'under_adjustment_confirmed' => 'nullable',
            'supplier_id' => 'required',
            'customer_id' => 'required',
            'interiorcolor_id' => 'nullable',
            'exteriorcolor_id' => 'nullable',
            'emp_id' => 'nullable',
        ];
    }


    public function messages()
    {
        return [
            'supplier_id.required' => 'Please Select Supplier.',
            'customer_id.required' => 'Please Select Customer.',
            'purchase_source.required' => 'Please Source of Product.',
            'date.required' => 'Please Enter date.',
            'invoice_number.required' => 'Please Enter invoice No or Generate Invoice No.',
            'purchase_mode.required' => 'Please Select Purchase Mode.',
            'vin_chassis_no.required' => 'Please Enter Chassis No.',

        ];
    }
}
