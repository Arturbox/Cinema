<?php

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
            [
                'start' => date("2018-09-27 14:00:00"),
                'tickets' => 10,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'start' => date("2018-09-28 16:00:00"),
                'tickets' => 15,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'start' => date("2018-09-29 16:00:00"),
                'tickets' => 20,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'start' => date("2018-09-30 16:00:00"),
                'tickets' => 25,
                'created_at' => date("Y-m-d H:i:s")
            ],

        ]);
    }
}
