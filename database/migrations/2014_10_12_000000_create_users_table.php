<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('adsoyad')->nullable();
            $table->string('email')->unique();
            $table->string('sifre');
            $table->string('aktivasyon_anahtari',60)->nullable();
            $table->boolean('aktif_mi')->default(0);
             $table->timestamp('olusturulma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('güncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            //$table->softDeletes();
            $table->timestamp('silinme_tarihi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
