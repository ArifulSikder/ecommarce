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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('visitor_ip');
            $table->unsignedBigInteger('category_id');
            $table->foreign("category_id")->references("id")->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign("product_id")->references("id")->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('product_visit_times');
            $table->unsignedBigInteger('category_visit_times');
            $table->boolean('status')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('visitors');
    }
};
