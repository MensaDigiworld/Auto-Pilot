<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProformaInvoiceHead extends Model
{
    use HasFactory;

    protected $fillable = [

        'code',
        'date',
        'supplier_code',
        'proforma_invoice_no',
        'irc_number',
        'shipping_mark',
        'carrier_code',
        'carrier_name',
        'loading_port_code',
        'landing_port_code',
        'destination_code',
        'total_quantity',
        'total_amount',
        'status',
        'branch_code',
        'amend_reference_code',
    ];
}
