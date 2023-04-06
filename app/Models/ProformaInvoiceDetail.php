<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProformaInvoiceDetail extends Model
{
    use HasFactory;


    protected $fillable = [

        'code',
        'head_code',
        'product_code',
        'vin_chassis_no',
        'engine_number',
        'year_of_manufacture',
        'year_of_registration',
        'color_code',
        'auction_grade',
        'dimension',
        'net_weight',
        'gross_weight',
        'price',
        'auction_code',
        'vehicle_description',
        'mileage',
        'vehicle_tracking_id',
        'vehicle_tracking_code',
        'country_code',
        'hs_code',
        'vehicle_condition',
    ];
}
