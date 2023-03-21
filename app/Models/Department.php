<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "departments";
    protected $fillable = [
        'code',
        'name',
        'status',
        'company_code',
    ];
        public static function saveOrUpdate($request, $id = null)
    {
        Department::updateOrCreate(['id'=>$id],$request->except('_token'));
    }
    public $timestamps = false;
}
