<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CoursetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coursetype=[
[
    'course_type'=>"English"
],
[
    'course_type'=>"Generatl Education Courses"
],
[
    'course_type'=>"Mathematics"
],
[
    'course_type'=>"Basic Science"
],
[
    'course_type'=>"Other Engineering Courses"
],
[
    'course_type'=>"Computer Science & Engineering Courses"
],
[
    'course_type'=>"Advance Core Courses"
],

[
    'course_type'=>"Thesis"
],
[
    'course_type'=>"Advisor Approved Technical Electives"
],
[
    'course_type'=>"Elective I: Courses with Labs"
],

[
    'course_type'=>"Clective II Courses without Labs"
]];

        DB::table('coursetypes')->insert($coursetype);
    }
}
