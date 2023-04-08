<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleChassisCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_chassis_codes', function (Blueprint $table) {
            $table->id();
            $table->string('chassis_code');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            // $table->foreign('category_id')
            //     ->references('id')
            //     ->on('vehicle_category')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_chassis_codes');
    }
}
