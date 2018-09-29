<?php

use Illuminate\Database\Seeder;

class SessionsPurchaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions_purchase')->insert([
            [
                'sessions_id' => 1,
                'chair' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'sessions_id' => 1,
                'chair' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'sessions_id' => 2,
                'chair' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
