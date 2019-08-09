<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrossSellProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cross_sell_products', function (Blueprint $table) {
           $table->integer('product_id')->unsigned();
            $table->integer('cross_sell_product_id')->unsigned();
           
            $table->timestamps();

            $table->foreign('cross_sell_product_id')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cross_sell_products');
    }
}
