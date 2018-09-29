<?php

use Illuminate\Database\Seeder;

class MovieSessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_sessions')->insert([
            [
                'movies_id' => 1,
                'sessions_id' => 1,
            ],
            [
                'movies_id' => 2,
                'sessions_id' => 2,
            ],
            [
                'movies_id' => 3,
                'sessions_id' => 3,
            ],
            [
                'movies_id' => 1,
                'sessions_id' => 4,
            ],
        ]);
    }
}
