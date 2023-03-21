<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VatSetup extends Model
{
    use HasFactory;
     protected $table = "vat_setup";
    protected $fillable = [
        'taxation',
        'vat',
        'custom_text',
    ];
    public $timestamps = false;
}
