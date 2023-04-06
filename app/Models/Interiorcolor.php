<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interiorcolor extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'color_code',
        'status',
        'company_id',
    ];
}
