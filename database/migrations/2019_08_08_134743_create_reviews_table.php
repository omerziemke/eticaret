<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('reviewer_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned();
            $table->integer('rating');
            $table->string('reviewer_name');
            $table->text('comment');
            $table->boolean('is_approved');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
