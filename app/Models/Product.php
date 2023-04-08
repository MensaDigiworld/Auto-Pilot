<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'manufacture_id',
        'model_id',
        'body_type_id',
        'transmission_id',
        'fuel_type_id',
        'drive_system_id',
        'chassis_id',
        'enginecc_id',
        'door_id',
        'seating_capacity_id',
        'company_id',
        'status',
    ];
}
