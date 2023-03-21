<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleCategory extends Model
{
    use HasFactory;
     protected $table = 'vehicle_category';
    protected $fillable = [
    'name',
    'image',
    'status',
    ];

    public function manufactures(){
        return $this->hasMany(Manufacture::class,'category_id');
    }
    public function vehicle_model(){
        return $this->hasMany(VehicleModel::class,'category_id');
    }
    public function bodytype(){
        return $this->hasMany(BodyType::class,'category_id');
    }
    public function chassis_code(){
        return $this->hasMany(ChassisCode::class,'category_id');
    }
    public function package(){
        return $this->hasMany(Package::class,'category_id');
    }
    public $timestamps = false;
}
