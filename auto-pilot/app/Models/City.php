<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'citys';
    protected $fillable = ['name','country_id','status'];

      public static function createOrUpdate($request, $id = null)
    {
        City::updateOrCreate(['id'=>$id],$request->except('_token'));
    }
        public function country(){
        return $this->belongsTo(country::class, 'country_id');
    }
    
        public $timestamps = false;
}
