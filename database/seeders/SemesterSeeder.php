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
        $semester = [
            [
                'semester_name' => '1st semester',
            ],
            [
                'semester_name' => '2nd semester',
            ],
            [
                'semester_name' => '3rd semester ',
            ],
            [
                'semester_name' => '4th semester ',
            ],
            [
                'semester_name' => '5th semester ',
            ],
            [
                'semester_name' => '6th semester ',
            ],
            [
                'semester_name' => '7th semester ',
            ],
            [
                'semester_name' => '8th semester ',
            ],
            [
                'semester_name' => 'Expired ',
            ],
        ];
        DB::table('semesters')->insert($semester);
    }
}
