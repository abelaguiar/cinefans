<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cine_id');
            $table->unsignedBigInteger('movie_id');
            $table->integer('time_init', 2);
            $table->integer('time_finish', 2);
            $table->date('date');
            $table->string('total_number_seats', 3);
            $table->integer('number_seats_remaining', 3);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('cine_id')->references('id')->on('cines');
            $table->foreign('movie_id')->references('id')->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
