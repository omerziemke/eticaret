<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeSetTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_set_translations', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('attribute_set_id')->unsigned();
            $table->string('locale');
            $table->string('name');
            $table->timestamps();

            $table->foreign('attribute_set_id')->references('id')->on('attribute_sets')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_set_translations');
    }
}
