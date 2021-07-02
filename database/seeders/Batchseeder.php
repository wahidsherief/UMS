<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Db;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semester= [
            [
                'semester_id'=>'1',
                'batch_name' => '37CSE ',
            ],
            [
                'semester_id'=>'2',
                'batch_name' => '36CSE ',
            ],
            [
                'semester_id'=>'3',
                'batch_name' => '35CSE ',
            ],
            [
                'semester_id'=>'4',
                'batch_name' => '34CSE ',
            ],
            [
                'semester_id'=>'5',
                'batch_name' => '33CSE ',
            ],
            [
                'semester_id'=>'6',
                'batch_name' => '32CSE ',
            ],
            [
                'semester_id'=>'7',
                'batch_name' => '31CSE ',
            ],
            [
                'semester_id'=>'8',
                'batch_name' => '30CSE ',
            ],

    ];
        DB::table('batches')->insert($semester);
    }
}
