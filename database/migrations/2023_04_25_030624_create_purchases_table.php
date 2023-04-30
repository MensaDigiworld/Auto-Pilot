<?php

use App\Models\Customer;
use App\Models\Exteriorcolor;
use App\Models\Interiorcolor;
use App\Models\Preorder;
use App\Models\Product;
use App\Models\ProformaInvoiceDetail;
use App\Models\ProformaInvoiceHead;
use App\Models\Supplier;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('invoice_number');
            $table->string('purchase_type')->nullable();
            $table->string('supplier_type');
            $table->foreignIdFor(Supplier::class);
            $table->foreignIdFor(Customer::class);
            $table->string('remarks');
            $table->unsignedBigInteger('landing_port_code')->nullable();
            $table->string('shipping_mark')->nullable();
            $table->foreignIdFor(Product::class);
            $table->string('vin_chassis_no')->nullable();
            $table->string('engine_number')->nullable();
            $table->foreignIdFor(Interiorcolor::class)->nullable();
            $table->foreignIdFor(Exteriorcolor::class)->nullable();
            $table->string('color_code')->nullable();
            $table->string('auction_grade')->nullable();
            $table->string('mileage')->nullable();
            $table->string('tyre_size')->nullable();
            $table->string('vehicle_description')->nullable();
            $table->decimal('lc_amount_usd', $total = 10, $places = 2)->nullable();
            $table->decimal('price', $total = 10, $places = 2)->nullable();
            $table->decimal('total_amount', $total = 10, $places = 2)->nullable();
            $table->decimal('margin', $total = 10, $places = 2)->nullable();
            $table->decimal('sales_price', $total = 10, $places = 2)->nullable();
            $table->foreignIdFor(Preorder::class)->nullable();
            $table->foreignIdFor(ProformaInvoiceDetail::class)->nullable();
            $table->foreignIdFor(ProformaInvoiceHead::class)->nullable();
            $table->string('letter_of_credit_code')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('voucher_code')->nullable();
            $table->string('branch_id')->nullable();
            $table->bigInteger('vehicle_tracking_id')->nullable();
            $table->string('purchase_mode')->nullable();
            $table->string('purchase_source')->nullable();
            $table->string('vehicle_tracking_code')->nullable();
            $table->smallInteger('year_of_manufacture')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('year_of_registration')->nullable();
            $table->string('warranty')->nullable();
            $table->string('warranty_information')->nullable();
            $table->string('eta_date')->nullable();
            $table->string('noting_date')->nullable();
            $table->string('assessment_date')->nullable();
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->string('document_status')->nullable();
            $table->string('document_expiry_date')->nullable();
            $table->string('fitness_expiry_date')->nullable();
            $table->string('tax_token_expiry_date')->nullable();
            $table->string('insurance_expiry_date')->nullable();
            $table->decimal('temporary_sales_price', $total = 10, $places = 2)->nullable();
            $table->decimal('costing_type', $total = 10, $places = 2)->nullable();
            $table->decimal('total_invoice_cost', $total = 10, $places = 2)->nullable();
            $table->decimal('total_estimated_cost', $total = 10, $places = 2)->nullable();
            $table->decimal('dealer_price', $total = 10, $places = 2)->nullable();
            $table->decimal('dealer_discount', $total = 10, $places = 2)->nullable();
            $table->decimal('temporary_dealer_price', $total = 10, $places = 2)->nullable();
            $table->decimal('temporary_dealer_discount', $total = 10, $places = 2)->nullable();
            $table->string('vehicle_condition')->nullable();
            $table->string('vehicle_release_date')->nullable();
            $table->string('document_location')->nullable();
            $table->string('image')->nullable();
            $table->string('price_remarks')->nullable();
            $table->string('document_release_date')->nullable();
            $table->decimal('lcusd_rate', $total = 10, $places = 2)->nullable();
            $table->decimal('lc_margin_tk', $total = 10, $places = 2)->nullable();
            $table->decimal('doc_bl_release_usd', $total = 10, $places = 2)->nullable();
            $table->decimal('doc_bl_release_usd_rate', $total = 10, $places = 2)->nullable();
            $table->decimal('doc_bl_release_tk', $total = 10, $places = 2)->nullable();
            $table->decimal('under_adjustment_usd', $total = 10, $places = 2)->nullable();
            $table->decimal('under_adjustment_usd_rate', $total = 10, $places = 2)->nullable();
            $table->decimal('under_adjustment_tk', $total = 10, $places = 2)->nullable();
            $table->decimal('over_adjustment_usd', $total = 10, $places = 2)->nullable();
            $table->decimal('over_adjustment_tk', $total = 10, $places = 2)->nullable();
            $table->decimal('total_lc_amount_tk', $total = 10, $places = 2)->nullable();
            $table->decimal('lc_margin_usd', $total = 10, $places = 2)->nullable();
            $table->tinyInteger('doc_bl_release_added')->nullable();
            $table->tinyInteger('under_adjustment_confirmed')->nullable();
            $table->unsignedBigInteger('emp_id')->nullable();
            $table->unsignedBigInteger('packagetrimvariant_id')->nullable();
            $table->timestamps();

            $table->foreign('emp_id')
                ->references('id')
                ->on('users');
            $table->foreign('packagetrimvariant_id')
                ->references('id')
                ->on('package_trim_variants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
