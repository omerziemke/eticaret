<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product_option_values', function (Blueprint $table) {
         $table->integer('order_product_option_id')->unsigned();
            $table->integer('option_value_id')->unsigned();
            $table->decimal('price', 18, 4)->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('option_value_id')->references('id')->on('option_values')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('order_product_option_id')->references('id')->on('order_product_options')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product_option_values');
    }
}
