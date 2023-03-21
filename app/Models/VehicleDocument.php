<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleDocument extends Model
{
    use HasFactory;
     protected $table = "vehicle_document";
    protected $fillable = [
        'manufacture_id',
        'Model_id',
        'year_of_manufacture',
        'year_of_registration',
        'vin',
        'reg',
        'reg1',
        'fitness',
        'fitness_validity_day',
        'fitness_validity_date',
        'insurence',
        'insurence_validity_day',
        'insurence_validity_date',
        'tax_token',
        'tax_token_validity_day',
        'tax_token_validity_date',
        'route_permite',
        'route_permite_validity_day',
        'route_permite_validity_date',
        'remark',
    ];
        public static function createOrUpdateDocument($request)
    {
        VehicleDocument::create($request->except('_token'));
    }
        public function manufactures(){
        return $this->hasMany(Manufacture::class,'category_id');
    }
    public function vehicle_model(){
        return $this->hasMany(VehicleModel::class,'category_id');
    }
    public $timestamps = false;
}
