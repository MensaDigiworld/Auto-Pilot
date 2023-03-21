<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table = 'areas';
    protected $fillable = ['name','country_id','city_id','status'];

          public static function createOrUpdate($request, $id = null)
    {
        Area::updateOrCreate(['id'=>$id],$request->except('_token'));
    }
        public function country(){
        return $this->belongsTo(country::class,'country_id');
    }
        public function city(){
        return $this->belongsTo(City::class,'city_id');
    }
    
    public $timestamps = false;
}
