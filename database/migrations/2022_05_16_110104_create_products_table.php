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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            
            $table->foreign("category_id")->references("id")->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('product_name');
            $table->string('product_qty',11);
            $table->string('product_code');
            $table->string('product_price', 50);
            $table->string('product_discount', 50);
            $table->string('short_description', 1000);
            $table->text('long_description');
            $table->string('product_thumbnail');
            $table->string('product_slider_img');
            $table->string('special_offer', 11)->nullable();
            $table->string('product_banner');
            $table->string('product_slug')->unique();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('products');
    }
};
