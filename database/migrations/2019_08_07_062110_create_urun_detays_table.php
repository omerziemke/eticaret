<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUrunDetaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('urun_detays', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
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
			$table->string('urun_resmi', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('urun_detays');
	}

}
