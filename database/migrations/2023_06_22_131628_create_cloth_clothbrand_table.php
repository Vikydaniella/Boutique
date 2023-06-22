<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothClothbrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cloth_clothbrand', function (Blueprint $table) {
            $table->unsignedBigInteger('cloth_brand_id');
            $table->foreign('cloth_brand_id')
                ->references('id')
                ->on('cloth_brands')
                ->cascade('delete');
            $table->unsignedBigInteger('cloth_id');
            $table->foreign('cloth_id')
                ->references('id')
                ->on('cloths')
                ->cascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cloth_clothbrand');
    }
}
