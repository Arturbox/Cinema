<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'name' => "film1",
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => "film2",
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => "film3",
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
