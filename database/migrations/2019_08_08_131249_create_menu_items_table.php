<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_id')->unsigned()->index();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('page_id')->unsigned()->nullable();
            $table->string('type');
            $table->string('url')->nullable();
            $table->string('target');
            $table->integer('position')->unsigned()->nullable();
            $table->boolean('is_root')->default(0);
            $table->boolean('is_fluid');
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('menu_id')->references('id')->on('menus')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('page_id')->references('id')->on('pages')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('parent_id')->references('id')->on('menu_items')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}
