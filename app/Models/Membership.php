<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    protected $table = "membership";
    protected $fillable = [
        'title',
        'details',
        'validity_month',
        'validity_km',
        'service',
        'price',
    ];
     public static function saveOrUpdate($request, $id = null)
    {
        Membership::updateOrCreate(['id'=>$id],$request->except('_token'));
    }
    public $timestamps = false;
}
