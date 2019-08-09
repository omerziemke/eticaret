<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributeValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attribute_values', function (Blueprint $table) {
           $table->integer('product_attribute_id')->unsigned();
            $table->integer('attribute_value_id')->unsigned();
            $table->timestamps();

            $table->foreign('attribute_value_id')->references('id')->on('attribute_values')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('product_attribute_id')->references('id')->on('product_attributes')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_attribute_values');
    }
}
