<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyType extends Model
{
    use HasFactory;

    protected $fillable=['type_name','category_id','image'];


    public function category(){
        return $this->belongsTo(VehicleCategory::class,'category_id','id');
    }
}
