<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKategorisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kategoris', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('ust_id')->nullable();
			$table->string('kategori_adi', 30);
			$table->string('slug', 40)->nullable();
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
		Schema::drop('kategoris');
	}

}
