<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformaInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proforma_invoice_details', function (Blueprint $table) {
            $table->id('code');
            $table->unsignedBigInteger('head_code')->nullable();
            $table->string('product_code')->nullable();
            $table->string('vin_chassis_no')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('year_of_manufacture')->nullable();
            $table->string('year_of_registration')->nullable();
            $table->string('color_code')->nullable();
            $table->string('auction_grade')->nullable();
            $table->string('dimension')->nullable();
            $table->string('net_weight')->nullable();
            $table->string('price')->nullable();
            $table->string('auction_code')->nullable();
            $table->string('vehicle_description')->nullable();
            $table->string('mileage')->nullable();
            $table->string('vehicle_tracking_id')->nullable();
            $table->string('vehicle_tracking_code')->nullable();
            $table->string('country_code')->nullable();
            $table->string('hs_code')->nullable();
            $table->string('vehicle_condition')->nullable();
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
        Schema::dropIfExists('proforma_invoice_details');
    }
}
