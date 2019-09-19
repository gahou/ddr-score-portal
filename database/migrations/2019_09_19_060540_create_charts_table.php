<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('song_id');
            // 0=bSP, 1=BSP, 2=DSP, 3=ESP, 4=CSP,
            //        5=BDP, 6=DDP, 7=EDP, 8=CDP
            $table->smallInteger('chart_type');
            $table->smallInteger('difficulty');
            $table->integer('notes');
            $table->integer('freezes');
            $table->integer('airs');
            $table->boolean('is_shockarrow');
            $table->timestamps();
        });

        Schema::table('charts', function (Blueprint $table) {
            $table->index('song_id');
            $table->index('difficulty');
            $table->index('notes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charts');
    }
}
