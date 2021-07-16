<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Batch_student_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batch_student = [
            [
                'student_id' => '1',
                'batch_id' => '8'
            ],
            [
                'student_id' => '2',
                'batch_id' => '8'
            ],
            [
                'student_id' => '3',
                'batch_id' => '8'
            ],
        ];
        DB::table('batch_students')->insert($batch_student);
    }
}
