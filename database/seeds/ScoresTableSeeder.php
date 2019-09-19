<?php

use Illuminate\Database\Seeder;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
            [
            'id' => 1,
            'user_id'      => 1,
            'song_id'      => 1,
            'chart_id'     => 4,
            'normal_score' => 999700,
            'ex_score'     => 927,
            'combo_type'   => 5,
            ],
            [
            'id' => 2,
            'user_id'      => 1,
            'song_id'      => 1,
            'chart_id'     => 3,
            'normal_score' => 999900,
            'ex_score'     => 815,
            'combo_type'   => 5,
            ],
            [
            'id' => 3,
            'user_id'      => 2,
            'song_id'      => 1,
            'chart_id'     => 4,
            'normal_score' => 990000,
            'ex_score'     => 908,
            'combo_type'   => 3,
            ],
            [
            'id' => 4,
            'user_id'      => 3,
            'song_id'      => 1,
            'chart_id'     => 4,
            'normal_score' => 992300,
            'ex_score'     => 878,
            'combo_type'   => 2,
            ],
        ]);
    }
}
