<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    protected $table = "designations";
    protected $fillable = [
        'code',
        'name',
        'status',
        'company_code',
    ];
        public static function saveOrUpdate($request, $id = null)
    {
        Designation::updateOrCreate(['id'=>$id],$request->except('_token'));
    }
    public $timestamps = false;
}

