<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSepetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sepets', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('kullanici_id')->unsigned()->index('sepets_kullanici_id_foreign');
			$table->timestamp('olusturulma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('güncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('silinme_tarihi')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sepets');
	}

}
