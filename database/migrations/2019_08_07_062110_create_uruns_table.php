<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUrunsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uruns', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('slug', 65535);
			$table->text('urun_adi', 65535);
			$table->float('fiyati', 10, 5);
			$table->float('indirimli_fiyati', 10, 5)->nullable();
			$table->integer('yildiz_sayisi');
			$table->text('aciklama', 65535);
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
		Schema::drop('uruns');
	}

}
