<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translation_translations', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('translation_id')->unsigned();
            $table->string('locale');
            $table->text('value');
            $table->timestamps();

            $table->foreign('translation_id')->references('id')->on('translations')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translation_translations');
    }
}
