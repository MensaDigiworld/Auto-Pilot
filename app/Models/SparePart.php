<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'part_number',
        'price',
        'discount',
        'discount_percent',
        'vat',
        'vat_percent',
        'type',
        'status',
        'company_id',
    ];
}
