<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatterHead extends Model
{
    use HasFactory;
    protected $table = "latterhead";
    protected $fillable = [
        'business_name',
        'branch_name',
        'email',
        'phone',
        'address',
        'bin',
        'website',
        'set_default',
    ];
     public static function saveOrUpdate($request, $id = null)
    {
        LatterHead::updateOrCreate(['id'=>$id],$request->except('_token'));
    }
    public $timestamps = false;
}
