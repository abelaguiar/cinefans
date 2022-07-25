<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('amount', 3);
            $table->float('total_value');
            $table->unsignedBigInteger('session_id');
            $table->unsignedBigInteger('buyer_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('session_id')->references('id')->on('sessions');
            $table->foreign('buyer_id')->references('id')->on('buyers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
