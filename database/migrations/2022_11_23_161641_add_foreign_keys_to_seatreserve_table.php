<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSeatreserveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seatreserve', function (Blueprint $table) {
            $table->foreign(['userId'], 'seatreserve_ibfk_1')->references(['userId'])->on('users');
            $table->foreign(['showId'], 'seatreserve_ibfk_2')->references(['showId'])->on('showtimes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seatreserve', function (Blueprint $table) {
            $table->dropForeign('seatreserve_ibfk_1');
            $table->dropForeign('seatreserve_ibfk_2');
        });
    }
}
