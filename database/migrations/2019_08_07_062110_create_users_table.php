<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('adsoyad', 191)->nullable();
			$table->string('email', 191)->unique();
			$table->string('sifre', 191);
			$table->string('aktivasyon_anahtari', 60)->nullable();
			$table->boolean('aktif_mi')->default(0);
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}
