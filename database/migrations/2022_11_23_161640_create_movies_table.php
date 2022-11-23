<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('movieId', true);
            $table->string('movieName', 40)->nullable();
            $table->string('movieCat', 40)->nullable();
            $table->bigInteger('movieRuntime')->nullable();
            $table->string('movieImage')->nullable();
            $table->longText('movieDescription')->nullable();
            $table->string('movieStatus', 100)->nullable();
            $table->integer('movieRating')->nullable();
            $table->longText('movieTrailer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
