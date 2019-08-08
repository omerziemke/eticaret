<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeValueTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_value_translations', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('attribute_value_id')->unsigned();
            $table->string('locale', 191);
            $table->string('value', 191);
            $table->unique(['attribute_value_id','locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_value_translations');
    }
}
