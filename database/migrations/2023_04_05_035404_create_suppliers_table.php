<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_type');
            $table->string('business_category');
            $table->string('procurement_type');
            $table->string('bin')->nullable();
            $table->string('enlistment_type')->nullable();
            $table->string('name')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country_code');
            $table->string('contact');
            $table->string('contact_2')->nullable();
            $table->string('contact_3')->nullable();
            $table->string('email')->nullable();
            $table->string('entry_date')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('ledger_code')->nullable;
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('bank_id')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('beneficiary_name')->nullable();
            $table->string('branch_address')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
