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
                'batch_advisor' => 'WDA',
            ],
            [
                'semester_id'=>'2',
                'batch_name' => '36CSE ',
                'batch_advisor' => 'FTJ',
            ],
            [
                'semester_id'=>'3',
                'batch_name' => '35CSE ',
                'batch_advisor' => 'IJC',
            ],
            [
                'semester_id'=>'4',
                'batch_name' => '34CSE ',
                'batch_advisor' => 'KNS',
            ],
            [
                'semester_id'=>'5',
                'batch_name' => '33CSE ',
                'batch_advisor' => 'DLK',
            ],
            [
                'semester_id'=>'6',
                'batch_name' => '32CSE ',
                'batch_advisor' => 'SL',
            ],
            [
                'semester_id'=>'7',
                'batch_name' => '31CSE ',
                'batch_advisor' => 'MTA',
            ],
            [
                'semester_id'=>'8',
                'batch_name' => '30CSE ',
                'batch_advisor' => 'WDA',
            ],

    ];
        DB::table('batches')->insert($semester);
    }
}
