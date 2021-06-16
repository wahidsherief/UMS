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
                'batch_name' => '2rd ',
                'batch_advisor' => 'MS Fatema Tuj Zohora',
            ],
            [
            'batch_name' => '3rd ',
            'batch_advisor' => 'MD. Wahidul Alam',
        ],
        [
            'batch_name' => '4th ',
            'batch_advisor' => 'MRS. Israth Jahan',
        ],
    ];
        DB::table('batches')->insert($semester);
    }
}
