<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformaInvoiceHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proforma_invoice_heads', function (Blueprint $table) {
            $table->id('code');
            $table->string('date')->nullable();
            $table->string('supplier_code')->nullable();
            $table->string('irc_number')->nullable();
            $table->string('shipping_mark')->nullable();
            $table->string('carrier_code')->nullable();
            $table->string('carrier_name')->nullable();
            $table->string('loading_port_code')->nullable();
            $table->string('landing_port_code')->nullable();
            $table->string('destination_code')->nullable();
            $table->string('total_quantity')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('status')->nullable();
            $table->string('branch_code')->nullable();
            $table->string('amend_reference_code')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proforma_invoice_heads');
    }
}
