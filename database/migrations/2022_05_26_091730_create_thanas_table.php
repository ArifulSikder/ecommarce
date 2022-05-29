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
        Schema::create('thanas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('division_id');
            $table->foreign("division_id")->references("id")->on('divisions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('district_id');
            $table->foreign("district_id")->references("id")->on('districts')->onDelete('cascade')->onUpdate('cascade');
            $table->string('thana_name')->unique();
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
        Schema::dropIfExists('thanas');
    }
};
