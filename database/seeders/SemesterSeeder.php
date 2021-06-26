<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semester= [[
            'department_id'=>'1',
            'semester_name' => '1st ',
        ],
        [
            'department_id'=>'1',
            'semester_name' => '2nd ',
        ],
        [
            'department_id'=>'1',
            'semester_name' => '3rd ',
        ],
        [
            'department_id'=>'1',
            'semester_name' => '4th ',
        ],
        [
            'department_id'=>'1',
            'semester_name' => '5th ',
        ],
        [
            'department_id'=>'1',
            'semester_name' => '6th ',
        ],
        [
            'department_id'=>'1',
            'semester_name' => '7th ',
        ],
        [
            'department_id'=>'1',
            'semester_name' => '8th ',
        ],
    ];
        DB::table('semesters')->insert($semester);

    }
}
