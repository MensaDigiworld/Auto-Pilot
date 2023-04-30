<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country_code')->nullable();
            $table->string('contact1')->nullable();
            $table->string('contact2')->nullable();
            $table->string('contact3')->nullable();
            $table->string('business_identification_number')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('ledger_code')->nullable();
            $table->string('type')->nullable();
            $table->string('organization_code')->nullable();
            $table->string('city_code')->nullable();
            $table->string('gender')->nullable();
            $table->string('employee_code')->nullable();
            $table->string('credit_limit')->nullable();
            $table->string('profession')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
