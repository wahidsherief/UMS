<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities=[
[
    'semester_activities'=> 'Spring 2021',
],[
    'semester_activities'=> 'Fall 2020',
],[
    'semester_activities'=> 'Spring 2020',
],
        ];
        DB::table('activities')->insert($activities);
    }
}
