<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSepetUrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepet_uruns', function (Blueprint $table) {
           $table->integer('sepet_id')->unsigned();
            $table->integer('urun_id')->unsigned();
            $table->integer('adet');
            $table->decimal('fiyati',10,3);
            $table->decimal('indirimli_fiyati',10,3)->nullable();
            $table->string('durum',30);
            $table->timestamp('olusturulma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('güncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            //$table->softDeletes();
            $table->timestamp('silinme_tarihi')->nullable();

            $table->foreign('sepet_id')->references('id')->on('sepets')->onDelete('cascade');
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
        Schema::dropIfExists('sepet_uruns');
    }
}
