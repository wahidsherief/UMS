<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [
            [
                'session_name' => 'Spring 2021',
            ],
        ];
        DB::table('sessions')->insert($sessions);
    }
}
