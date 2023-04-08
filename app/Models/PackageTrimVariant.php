<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTrimVariant extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'manufacture_id',
        'model_id',
    ];


    public function model(){
        return $this->belongsTo(VehicleModel::class,'model_id','id');
    }

    public function manufacturerer(){
        return $this->belongsTo(Manufacture::class,'manufacture_id','id');
    }
}
