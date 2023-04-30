<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'invoice_number',
        'supplier_type',
        'purchase_type',
        'remarks',
        'image',
        'landing_port_code',
        'shipping_mark',
        'vin_chassis_no',
        'engine_number',
        'color_code',
        'auction_grade',
        'mileage',
        'tyre_size',
        'vehicle_description',
        'lc_amount_usd',
        'price',
        'total_amount',
        'margin',
        'sales_price',
        'letter_of_credit_code',
        'status',
        'voucher_code',
        'branch_id',
        'vehicle_tracking_id',
        'packagetrimvariant_id',
        'purchase_mode',
        'purchase_source',
        'vehicle_tracking_code',
        'year_of_manufacture',
        'registration_number',
        'year_of_registration',
        'warranty',
        'warranty_information',
        'eta_date',
        'noting_date',
        'assessment_date',
        'document_status',
        'document_expiry_date',
        'fitness_expiry_date',
        'tax_token_expiry_date',
        'insurance_expiry_date',
        'temporary_sales_price',
        'costing_type',
        'total_invoice_cost',
        'total_estimated_cost',
        'dealer_price',
        'dealer_discount',
        'temporary_dealer_price',
        'temporary_dealer_discount',
        'vehicle_condition',
        'vehicle_release_date',
        'document_location',
        'document_release_date',
        'lcusd_rate',
        'lc_margin_tk',
        'doc_bl_release_usd',
        'doc_bl_release_usd_rate',
        'doc_bl_release_tk',
        'under_adjustment_usd',
        'under_adjustment_usd_rate',
        'under_adjustment_tk',
        'over_adjustment_usd',
        'over_adjustment_tk',
        'total_lc_amount_tk',
        'lc_margin_usd',
        'doc_bl_release_added',
        'under_adjustment_confirmed',
        'supplier_id',
        'customer_id',
        'interiorcolor_id',
        'exteriorcolor_id',
        'product_id',
        'emp_id',
        'month',
        'year',
        'price_remarks'

    ];



    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function emp()
    {
        return $this->belongsTo(User::class);
    }
}
