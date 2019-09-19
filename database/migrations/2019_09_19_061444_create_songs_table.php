<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('song_url_id', 32);
            $table->string('name', 126);
            $table->string('artist', 126);
            $table->integer('version_id');
            $table->timestamps();
        });

        Schema::table('songs', function (Blueprint $table) {
            $table->index('song_url_id');
            $table->index(['version_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
