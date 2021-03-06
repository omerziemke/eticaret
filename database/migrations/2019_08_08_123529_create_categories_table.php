<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_category_id')->unsigned()->nullable();
            $table->string('category_name');
            $table->string('slug')->unique();
            $table->integer('position')->unsigned()->nullable();
            $table->foreign('main_category_id')->references('id')->on('main_categories')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
        Schema::dropIfExists('categories');
    }
}
