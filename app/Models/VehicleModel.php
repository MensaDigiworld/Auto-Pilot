<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;
    protected $table = 'vehicle_model';
    protected $fillable = ['name','manufacture_id','category_id','country_id','image','status'];

    public function manufacture(){
        return $this->belongsTo(Manufacture::class,'manufacture_id');
    }

    public function country(){
        return $this->belongsTo(Countries::class,'country_id');
    }
    public function category(){
        return $this->belongsTo(VehicleCategory::class,'category_id');
    }

    public function package(){
        return $this->hasMany(Package::class,'model_id');
    }

    public function passenger_vehicle(){
        return $this->hasMany(PassengerVehicle::class);
    }
     public $timestamps = false;
}
