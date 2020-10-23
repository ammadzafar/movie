<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_movie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_id');
//            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
            $table->string('movie_id');
//            $table->foreign('movie_id')->on('movies')->references('id')->onDelete('cascade');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_movie');
    }
}
