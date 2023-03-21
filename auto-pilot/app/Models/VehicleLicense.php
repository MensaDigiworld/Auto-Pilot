<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleLicense extends Model
{
    use HasFactory;
    protected $table = "vehicle_document_license";
    protected $fillable = [
        'code',
        'document_type',
        'license_document_name',
        'registration',
        'license_document_number',
        'address',
        'registration_date',
        'renewal_type',
        'vehicle',
        'velidaty_date',
        'remarks',
        'status',
    ];
        public static function createOrUpdateDocument($request)
    {
        VehicleLicense::create($request->except('_token'));
    }

     public $timestamps = false;
}
