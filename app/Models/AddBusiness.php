<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddBusiness extends Model
{
    use HasFactory;

    protected $table = "add_business";
    protected $fillable = [
        'code',
        'business_name',
        'address',
        'country_id',
        'contact_no',
        'email',
        'web_address',
        'currency_id',
        'logo',
        'status',
    ];
    public $timestamps = false;
}
