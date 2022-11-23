<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('reviewId', true);
            $table->integer('userId')->nullable()->index('userId');
            $table->longText('review')->nullable();
            $table->timestamp('ts')->useCurrent();
            $table->dateTime('dt')->nullable()->useCurrent();
            $table->integer('movieId')->nullable()->index('movieId');
            $table->integer('rating')->nullable();
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
