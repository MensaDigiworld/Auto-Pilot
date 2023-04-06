<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPartner extends Model
{
    use HasFactory;

    protected $fillable = [

        'business_category',
        'business_type',
        'name',
        'contact_number',
        'status',
        'description',
        'ledger_code',
        'company_code',
    ];
}
