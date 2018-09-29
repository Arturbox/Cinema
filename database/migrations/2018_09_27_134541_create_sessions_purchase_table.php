<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions_purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sessions_id');
            $table->integer('chair');
            $table->timestamps();

            $table ->foreign('sessions_id')
                ->references('id')->on('sessions')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions_purchase');
    }
}
