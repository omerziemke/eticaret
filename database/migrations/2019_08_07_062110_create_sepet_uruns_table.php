<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSepetUrunsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sepet_uruns', function(Blueprint $table)
		{
			$table->integer('sepet_id')->unsigned()->index('sepet_uruns_sepet_id_foreign');
			$table->integer('urun_id')->unsigned()->index('sepet_uruns_urun_id_foreign');
			$table->integer('adet');
			$table->decimal('fiyati', 10, 3);
			$table->decimal('indirimli_fiyati', 10, 3)->nullable();
			$table->string('durum', 30);
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
		Schema::drop('sepet_uruns');
	}

}
