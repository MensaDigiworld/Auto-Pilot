<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleChassisCode extends Model
{
    use HasFactory;

    protected $fillable=['chassis_code','category_id'];

    public function category(){
        return $this->belongsTo(VehicleCategory::class,'category_id','id');
    }
}
