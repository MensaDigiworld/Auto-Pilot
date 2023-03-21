<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;
    protected $table = 'countrys';
    protected $fillable = ['name','code','country_code','status'];

    public function manufacture(){
        return $this->hasMany(Manufacture::class,'country_id');
    }
    public function vehiclemodel(){
        return $this->hasMany(VehicleModel::class,'country_id');
    }
    
        public $timestamps = false;
}
