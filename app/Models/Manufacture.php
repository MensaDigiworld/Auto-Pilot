<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;
    protected $table = 'manufacturers';
    protected $fillable = ['name','category_id','country_id','image','status'];

    public function vehicle_category(){
        return $this->belongsTo(VehicleCategory::class,'category_id');
    }
    public function passenger_vehicle(){
        return $this->hasMany(PassengerVehicle::class);
    }  

    public function country(){
        return $this->belongsTo(Countries::class,'country_id');
    }
    public function vehiclemodel(){
        return $this->hasMany(VehicleModel::class,'manufacture_id');
    }
    public function package(){
        return $this->hasMany(Package::class,'manufacture_id');
    }

        public $timestamps = false;

}
