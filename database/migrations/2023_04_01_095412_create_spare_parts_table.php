<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSparePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spare_parts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('part_number');
            $table->decimal('price')->nullable();
            $table->decimal('discount')->nullable();
            $table->decimal('discount_percent')->nullable();
            $table->decimal('vat')->nullable();
            $table->decimal('vat_percent')->nullable();
            $table->string('type');
            $table->tinyInteger('status')->default(0);
            $table->unsignedBigInteger('company_id')->nullable();
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
        Schema::dropIfExists('spare_parts');
    }
}
