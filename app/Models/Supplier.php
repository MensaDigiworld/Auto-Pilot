<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_type',
        'business_category',
        'name',
        'contact_person',
        'address',
        'zip_code',
        'country_code',
        'contact',
        'contact_2',
        'contact_3',
        'email',
        'bin',
        'enlistment_type',
        'entry_date',
        'status',
        'ledger_code',
        'company_code',
        'procurement_type',
        'bank_id',
        'beneficiary_name',
        'branch_name',
        'branch_address',
        'swift_code',
    ];
}
