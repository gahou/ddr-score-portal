<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
            'id' => 1,
            'user_id'    => 'gahou',
            // TODO rewrite later
            'password'   => 'sample',
            'name'       => 'gahou',
            'ddr_code'   => '1104-8618',
            'twitter_id' => 'gahou',
            ],
            [
            'id' => 2,
            'user_id'    => 'test1',
            // TODO rewrite later
            'password'   => 'sample1',
            'name'       => 't',
            'ddr_code'   => '1234-0001',
            'twitter_id' => null,
            ],
            [
            'id' => 3,
            'user_id'    => 'test2',
            // TODO rewrite later
            'password'   => 'sample2',
            'name'       => 'tt',
            'ddr_code'   => null,
            'twitter_id' => 'ttt_asdf',
            ],
            [
            'id' => 4,
            'user_id'    => 'test3',
            // TODO rewrite later
            'password'   => 'sample3',
            'name'       => 'ttt',
            'ddr_code'   => null,
            'twitter_id' => null,
            ],
        ]);
    }
}
