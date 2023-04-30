<?php

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preorders', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->foreignIdFor(Customer::class);
            $table->foreignIdFor(Product::class);
            $table->string('preferred_year')->nullable();
            $table->string('preferred_color')->nullable();
            $table->string('preferred_grade')->nullable();
            $table->string('expected_delivery_date')->nullable();
            $table->string('other_requirements')->nullable();
            $table->integer('budget')->nullable();
            $table->decimal('down_payment', $total = 10, $places = 2)->nullable();
            $table->tinyInteger('loan_required')->default(0);
            $table->string('terms_and_condition')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->nullable();
            $table->string('branch_id')->nullable();
            $table->string('preferred_mileage')->nullable();
            $table->string('optional_product_code_1')->nullable();
            $table->string('optional_product_code_2')->nullable();
            $table->string('optional_product_code_3')->nullable();
            $table->decimal('loan_amount', $total = 10, $places = 2)->nullable();
            $table->string('sales_man_code')->nullable();



















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
        Schema::dropIfExists('preorders');
    }
}
