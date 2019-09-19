<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('song_id');
            $table->bigInteger('chart_id');
            $table->integer('normal_score')->nullable();
            $table->integer('ex_score')->nullable();
            // 0=failed, 1=clear, 2=4life, 3=goodFC, 4=greatFC, 5=perfectFC, 6=marvelousFC
            $table->smallInteger('combo_type');
            $table->timestamps();
        });

        Schema::table('scores', function (Blueprint $table) {
            $table->index(['user_id', 'song_id']);
            $table->index('normal_score');
            $table->index('ex_score');
            $table->index('combo_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
