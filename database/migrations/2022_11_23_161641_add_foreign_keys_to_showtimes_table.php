<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToShowtimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('showtimes', function (Blueprint $table) {
            $table->foreign(['movieId'], 'showtimes_ibfk_1')->references(['movieId'])->on('movies');
            $table->foreign(['cinemaId'], 'showtimes_ibfk_2')->references(['cinemaId'])->on('cinemas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('showtimes', function (Blueprint $table) {
            $table->dropForeign('showtimes_ibfk_1');
            $table->dropForeign('showtimes_ibfk_2');
        });
    }
}
