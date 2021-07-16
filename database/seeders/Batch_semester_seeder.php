<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Batch_semester_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batch_semester = [
            [

                'semester_id' => '8'
            ],
            [

                'semester_id' => '8'
            ],
            [


                'semester_id' => '8'
            ],
        ];
        DB::table('batch_semesters')->insert($batch_semester);
    }
}
