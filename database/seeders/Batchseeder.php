<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Db;
class Batchseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batches')->insert([

            'batch_name'=>'29CSE',
            'batch_advisor'=>'MD. Wahidul Alam',

        ]);
    }
}
