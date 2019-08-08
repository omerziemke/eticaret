<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaDataTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_data_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('meta_data_id')->unsigned();
            $table->string('locale', 191);
            $table->string('meta_title', 191)->nullable();
            $table->text('meta_keywords', 65535)->nullable();
            $table->text('meta_description', 65535)->nullable();
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
        Schema::dropIfExists('meta_data_translations');
    }
}
