<?php

use Illuminate\Database\Seeder;

class ChartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('charts')->insert([
            [
            'id' => 1,
            'song_id'       => 1,
            'chart_type'    => 0,
            'difficulty'    => 4,
            'notes'         => 138,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 2,
            'song_id'       => 1,
            'chart_type'    => 1,
            'difficulty'    => 8,
            'notes'         => 264,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 3,
            'song_id'       => 1,
            'chart_type'    => 2,
            'difficulty'    => 9,
            'notes'         => 275,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 4,
            'song_id'       => 1,
            'chart_type'    => 3,
            'difficulty'    => 11,
            'notes'         => 319,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 5,
            'song_id'       => 1,
            'chart_type'    => 5,
            'difficulty'    => 8,
            'notes'         => 254,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 6,
            'song_id'       => 1,
            'chart_type'    => 6,
            'difficulty'    => 13,
            'notes'         => 309,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 7,
            'song_id'       => 1,
            'chart_type'    => 7,
            'difficulty'    => 11,
            'notes'         => 382,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 8,
            'song_id'       => 2,
            'chart_type'    => 0,
            'difficulty'    => 5,
            'notes'         => 162,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 9,
            'song_id'       => 2,
            'chart_type'    => 1,
            'difficulty'    => 8,
            'notes'         => 258,
            'freezes'        => 24,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 10,
            'song_id'       => 2,
            'chart_type'    => 2,
            'difficulty'    => 10,
            'notes'         => 346,
            'freezes'        => 33,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 11,
            'song_id'       => 2,
            'chart_type'    => 3,
            'difficulty'    => 13,
            'notes'         => 442,
            'freezes'        => 24,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 12,
            'song_id'       => 2,
            'chart_type'    => 4,
            'difficulty'    => 13,
            'notes'         => 389,
            'freezes'        => 77,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => true,
            ],
            [
            'id' => 13,
            'song_id'       => 2,
            'chart_type'    => 5,
            'difficulty'    => 8,
            'notes'         => 271,
            'freezes'        => 9,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 14,
            'song_id'       => 2,
            'chart_type'    => 6,
            'difficulty'    => 12,
            'notes'         => 330,
            'freezes'        => 17,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 15,
            'song_id'       => 2,
            'chart_type'    => 7,
            'difficulty'    => 13,
            'notes'         => 433,
            'freezes'        => 13,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 16,
            'song_id'       => 2,
            'chart_type'    => 7,
            'difficulty'    => 13,
            'notes'         => 389,
            'freezes'        => 61,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => true,
            ],
            [
            'id' => 17,
            'song_id'       => 3,
            'chart_type'    => 0,
            'difficulty'    => 3,
            'notes'         => 67,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 18,
            'song_id'       => 3,
            'chart_type'    => 1,
            'difficulty'    => 7,
            'notes'         => 143,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 19,
            'song_id'       => 3,
            'chart_type'    => 2,
            'difficulty'    => 9,
            'notes'         => 188,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 20,
            'song_id'       => 3,
            'chart_type'    => 3,
            'difficulty'    => 12,
            'notes'         => 212,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 21,
            'song_id'       => 3,
            'chart_type'    => 5,
            'difficulty'    => 7,
            'notes'         => 130,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 22,
            'song_id'       => 3,
            'chart_type'    => 6,
            'difficulty'    => 9,
            'notes'         => 181,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
            [
            'id' => 23,
            'song_id'       => 3,
            'chart_type'    => 7,
            'difficulty'    => 11,
            'notes'         => 220,
            'freezes'        => 0,
            // TODO fix number
            'airs'          => 0,
            'is_shockarrow' => false,
            ],
        ]);
    }
}
