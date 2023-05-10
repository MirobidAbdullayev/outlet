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
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('category')->nullable();
            $table->string('color_1')->nullable();
            $table->string('color_2')->nullable();
            $table->string('color_3')->nullable();
            $table->string('color_4')->nullable();
            $table->string('color_5')->nullable();
            $table->string('color_6')->nullable();
            $table->string('sz_1')->nullable();
            $table->string('sz_2')->nullable();
            $table->string('sz_3')->nullable();
            $table->string('sz_4')->nullable();
            $table->string('sz_5')->nullable();
            $table->string('sz_6')->nullable();
            $table->string('image')->nullable();
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
