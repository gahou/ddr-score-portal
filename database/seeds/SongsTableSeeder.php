<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            [
            'id' => 1,
            'song_url_id' => '06loOQ0DQb0DqbOibl6qO81qlIdoP9DI',
            'name'        => 'PARANOiA',
            'artist'      => '180',
            'version_id'  => 1,
            ],
            [
            'id' => 2,
            'song_url_id' => 'dIQDOoO80odDP8OiOQIQ9oI0o99OdQDQ',
            'name'        => 'SABER WING',
            'artist'      => 'TAG',
            'version_id'  => 11,
            ],
            [
            'id' => 3,
            'song_url_id' => '8Il6980di8P89lil1PDIqqIbiq1QO8lQ',
            'name'        => 'MAKE IT BETTER',
            'artist'      => 'mitsu-O!',
            'version_id'  => 1,
            ],
        ]);
    }
}
