<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderSlideTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_slide_translations', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('slider_slide_id')->unsigned();
            $table->string('locale', 191);
            $table->integer('file_id')->unsigned()->nullable();
            $table->string('caption_1', 191)->nullable();
            $table->string('caption_2', 191)->nullable();
            $table->string('caption_3', 191)->nullable();
            $table->string('call_to_action_text', 191)->nullable();
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
        Schema::dropIfExists('slider_slide_translations');
    }
}
