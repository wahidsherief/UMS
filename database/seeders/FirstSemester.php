<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FirstSemester extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semester= [[
            'semester_name' => '3rd ',
            'advisor_name' => 'MD. Wahidul Alam',
        ],
        [
            'semester_name' => '4rd ',
            'advisor_name' => 'MD. Wahidul Alam',
        ],
    ];
        DB::table('semesters')->insert($semester);
    }
}
