<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'country';
    protected $fillable = ['name','code','status'];
      public static function saveOrUpdate($request, $id = null)
    {
        Country::updateOrCreate(['id'=>$id],$request->except('_token'));
    }
    
        public $timestamps = false;
}
