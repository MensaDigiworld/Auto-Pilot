<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesAndService extends Model
{
    use HasFactory;
     protected $table = "sales_and_service";
    protected $fillable = [
        'title',
        'services_details',
        'validity_month',
        'validity_km',
        'services_warranty',
        'validity_month2',
        'validity_km2',
        'service',
        'price',
        'status',
    ];
    public static function saveOrUpdate($request, $id = null)
    {
        SalesAndService::updateOrCreate(['id'=>$id],$request->except('_token'));
    }

    public $timestamps = false;
}
