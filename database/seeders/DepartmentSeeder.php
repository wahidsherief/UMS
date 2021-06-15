<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class DepartmentSeeder extends Seeder
{
    public function run()
    {
        DB::table('departments')->insert([
        [
        'department_name'=>'CSE',
        'department_head'=>'KNS',
        ],
        [
            'department_name'=>'EEE',
            'department_head'=>'MSH',
         ],
         [
            'department_name'=>'ETE',
            'department_head'=>'WHA',
            ],
        ]);

    }
}
