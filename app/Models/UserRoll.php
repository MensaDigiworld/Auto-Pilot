<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoll extends Model
{
    use HasFactory;
    protected $table = "user_roles";
    protected $fillable = [
        'code',
        'name',
        'status',
        'company_code',
    ];
        public static function saveOrUpdate($request, $id = null)
    {
        UserRoll::updateOrCreate(['id'=>$id],$request->except('_token'));
    }
    public $timestamps = false;
}
