<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('manufacture_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('body_type_id');
            $table->unsignedBigInteger('transmission_id');
            $table->unsignedBigInteger('fuel_type_id');
            $table->unsignedBigInteger('drive_system_id');
            $table->unsignedBigInteger('chassis_id');
            $table->unsignedBigInteger('enginecc_id');
            $table->unsignedBigInteger('door_id');
            $table->unsignedBigInteger('seating_capacity_id');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->tinyInteger('status')->default(0);


            $table->foreign('manufacture_id')->references('id')->on('users');
            $table->foreign('model_id')->references('id')->on('users');
            $table->foreign('body_type_id')->references('id')->on('users');
            $table->foreign('transmission_id')->references('id')->on('users');
            $table->foreign('drive_system_id')->references('id')->on('users');
            $table->foreign('fuel_type_id')->references('id')->on('users');
            $table->foreign('chassis_id')->references('id')->on('users');
            $table->foreign('enginecc_id')->references('id')->on('users');
            $table->foreign('door_id')->references('id')->on('users');
            $table->foreign('seating_capacity_id')->references('id')->on('users');
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
        Schema::dropIfExists('products');
    }
}
