<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
        protected $table = "employees";
    protected $fillable = [
        'code',
        'name',
        'date_of_birth',
        'contact_no',
        'fathers_name',
        'mothers_name',
        'present_address',
        'permanent_address',
        'email',
        'national_id',
        'birth_certificate_no',
        'status',
    ];
        public static function saveOrUpdate($request, $id = null)
    {
        Employee::updateOrCreate(['id'=>$id],$request->except('_token'));
    }
    public $timestamps = false;
}
