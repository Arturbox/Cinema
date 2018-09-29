<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_sessions', function (Blueprint $table) {
            //relationship to movies and seassions tables
            $table->unsignedInteger('movies_id');
            $table->unsignedInteger('sessions_id');

            //relationship to movies and seassions tables
            $table ->foreign('movies_id')
                ->references('id')->on('movies')
                ->onDelete('cascade');
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
        Schema::dropIfExists('movie_sessions');
    }
}
