<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('shipping_name');
            $table->string('shipping_mobile', 15);
            $table->string('shipping_email')->nullable();
            $table->string('shipping_address', 500);
            $table->string('division_id',11);
            $table->string('district_id',11);
            $table->string('thana_id',11);
            $table->string('payment_type', 50);
            $table->float('amount', 50);
            $table->date('order_date');
            $table->string('invoice_no')->nullable();
            $table->date('confirm_date')->nullable();
            $table->date('processing_date')->nullable();
            $table->date('picked_date')->nullable();
            $table->date('shipped_date')->nullable();
            $table->date('delivered_date')->nullable();
            $table->date('cancel_date')->nullable();
            $table->date('return_date')->nullable();
            $table->string('order_type', 21)->default('Pending');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('orders');
    }
};
