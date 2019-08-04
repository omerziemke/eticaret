<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrunDetayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun_detays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('urun_id')->unsigned()->unique();
            $table->boolean('yeni_sezon')->default(0);
            $table->boolean('trendler')->default(0);
            $table->boolean('yaz_ayakkabilari')->default(0);
            $table->boolean('cok_satan')->default(0);
            $table->boolean('futbol')->default(0);
            $table->boolean('basketbol')->default(0);
            $table->boolean('anneler_günü')->default(0);
            $table->boolean('kadin')->default(0);
            $table->boolean('cocuk')->default(0);
            $table->boolean('yeni')->default(0);
            $table->string('urun_resmi',50)->nullable();

        

            $table->foreign('urun_id')->references('id')->on('uruns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urun_detays');
    }
}
