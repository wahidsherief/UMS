<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SecondSemester extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert([
            'semester_name'=>'2nd semester',
            'advisor_name'=>'MD. Wahidul Alam',


        ]);
    }
}
