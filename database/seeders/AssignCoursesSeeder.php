<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assigncourses=[
            [
                'department_id' => '1 ',
                'semester_id' => '1',
                'session_id'=>'1',
                'course_id'=>'1',
                'teacher_internal_id'=>'4',
                'teacher_external_id'=>'2'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '1',
                'session_id'=>'1',
                'course_id'=>'2',
                'teacher_internal_id'=>'3',
                'teacher_external_id'=>'4'
            ],

            [
                'department_id' => '1 ',
                'semester_id' => '1',
                'session_id'=>'1',
                'course_id'=>'3',
                'teacher_internal_id'=>'3',
                'teacher_external_id'=>'4'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '1',
                'session_id'=>'1',
                'course_id'=>'4',
                'teacher_internal_id'=>'4',
                'teacher_external_id'=>'6'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '1',
                'session_id'=>'1',
                'course_id'=>'5',
                'teacher_internal_id'=>'5',
                'teacher_external_id'=>'6'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '1',
                'session_id'=>'1',
                'course_id'=>'6',
                'teacher_internal_id'=>'4',
                'teacher_external_id'=>'3'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '1',
                'session_id'=>'1',
                'course_id'=>'7',
                'teacher_internal_id'=>'9',
                'teacher_external_id'=>'6'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '1',
                'session_id'=>'1',
                'course_id'=>'8',
                'teacher_internal_id'=>'8',
                'teacher_external_id'=>'7'
            ],

            // semester 2 semester

            [
                'department_id' => '1 ',
                'semester_id' => '2',
                'session_id'=>'1',
                'course_id'=>'9',
                'teacher_internal_id'=>'6',
                'teacher_external_id'=>'1'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '2',
                'session_id'=>'1',
                'course_id'=>'10',
                'teacher_internal_id'=>'7',
                'teacher_external_id'=>'3'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '2',
                'session_id'=>'1',
                'course_id'=>'11',
                'teacher_internal_id'=>'8',
                'teacher_external_id'=>'4'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '2',
                'session_id'=>'1',
                'course_id'=>'12',
                'teacher_internal_id'=>'4',
                'teacher_external_id'=>'7'
            ],

            // semester 3
            [
                'department_id' => '1 ',
                'semester_id' => '3',
                'session_id'=>'1',
                'course_id'=>'13',
                'teacher_internal_id'=>'10',
                'teacher_external_id'=>'7'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '3',
                'session_id'=>'1',
                'course_id'=>'14',
                'teacher_internal_id'=>'4',
                'teacher_external_id'=>'5'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '3',
                'session_id'=>'1',
                'course_id'=>'15',
                'teacher_internal_id'=>'10',
                'teacher_external_id'=>'7'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '6',
                'session_id'=>'1',
                'course_id'=>'16',
                'teacher_internal_id'=>'6',
                'teacher_external_id'=>'1'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '3',
                'session_id'=>'1',
                'course_id'=>'17',
                'teacher_internal_id'=>'4',
                'teacher_external_id'=>'7'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '3',
                'session_id'=>'1',
                'course_id'=>'18',
                'teacher_internal_id'=>'7',
                'teacher_external_id'=>'1'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '3',
                'session_id'=>'1',
                'course_id'=>'19',
                'teacher_internal_id'=>'10',
                'teacher_external_id'=>'7'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '3',
                'session_id'=>'1',
                'course_id'=>'20',
                'teacher_internal_id'=>'6',
                'teacher_external_id'=>'1'
            ],

            // semester 4
            [
                'department_id' => '1 ',
                'semester_id' => '4',
                'session_id'=>'1',
                'course_id'=>'21',
                'teacher_internal_id'=>'4',
                'teacher_external_id'=>'1'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '4',
                'session_id'=>'1',
                'course_id'=>'22',
                'teacher_internal_id'=>'2',
                'teacher_external_id'=>'4'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '4',
                'session_id'=>'1',
                'course_id'=>'23',
                'teacher_internal_id'=>'9',
                'teacher_external_id'=>'7'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '4',
                'session_id'=>'1',
                'course_id'=>'24',
                'teacher_internal_id'=>'1',
                'teacher_external_id'=>'4'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '4',
                'session_id'=>'1',
                'course_id'=>'25',
                'teacher_internal_id'=>'1',
                'teacher_external_id'=>'3'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '4',
                'session_id'=>'1',
                'course_id'=>'26',
                'teacher_internal_id'=>'2',
                'teacher_external_id'=>'4'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '4',
                'session_id'=>'1',
                'course_id'=>'27',
                'teacher_internal_id'=>'9',
                'teacher_external_id'=>'7'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '4',
                'session_id'=>'1',
                'course_id'=>'28',
                'teacher_internal_id'=>'4',
                'teacher_external_id'=>'4'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '4',
                'session_id'=>'1',
                'course_id'=>'29',
                'teacher_internal_id'=>'1',
                'teacher_external_id'=>'4'
            ],

            //  semester=5

            [
                'department_id' => '1 ',
                'semester_id' => '5',
                'session_id'=>'1',
                'course_id'=>'30',
                'teacher_internal_id'=>'4',
                'teacher_external_id'=>'7'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '5',
                'session_id'=>'1',
                'course_id'=>'31',
                'teacher_internal_id'=>'6',
                'teacher_external_id'=>'11'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '5',
                'session_id'=>'1',
                'course_id'=>'32',
                'teacher_internal_id'=>'2',
                'teacher_external_id'=>'9'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '5',
                'session_id'=>'1',
                'course_id'=>'33',
                'teacher_internal_id'=>'8',
                'teacher_external_id'=>'6'
            ],
            //  semester=6

            [
                'department_id' => '1 ',
                'semester_id' => '6',
                'session_id'=>'1',
                'course_id'=>'34',
                'teacher_internal_id'=>'2',
                'teacher_external_id'=>'7'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '6',
                'session_id'=>'1',
                'course_id'=>'35',
                'teacher_internal_id'=>'1',
                'teacher_external_id'=>'4'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '6',
                'session_id'=>'1',
                'course_id'=>'36',
                'teacher_internal_id'=>'7',
                'teacher_external_id'=>'9'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '6',
                'session_id'=>'1',
                'course_id'=>'37',
                'teacher_internal_id'=>'8',
                'teacher_external_id'=>'6'
            ],

            //  semester=7

            [
                'department_id' => '1 ',
                'semester_id' => '7',
                'session_id'=>'1',
                'course_id'=>'38',
                'teacher_internal_id'=>'5',
                'teacher_external_id'=>'7'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '7',
                'session_id'=>'1',
                'course_id'=>'39',
                'teacher_internal_id'=>'6',
                'teacher_external_id'=>'3'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '7',
                'session_id'=>'1',
                'course_id'=>'40',
                'teacher_internal_id'=>'11',
                'teacher_external_id'=>'9'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '7',
                'session_id'=>'1',
                'course_id'=>'41',
                'teacher_internal_id'=>'8',
                'teacher_external_id'=>'6'
            ],

            //  semester=8

            [
                'department_id' => '1 ',
                'semester_id' => '8',
                'session_id'=>'1',
                'course_id'=>'42',
                'teacher_internal_id'=>'2',
                'teacher_external_id'=>'7'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '8',
                'session_id'=>'1',
                'course_id'=>'43',
                'teacher_internal_id'=>'4',
                'teacher_external_id'=>'3'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '8',
                'session_id'=>'1',
                'course_id'=>'44',
                'teacher_internal_id'=>'2',
                'teacher_external_id'=>'9'
            ],
            [
                'department_id' => '1 ',
                'semester_id' => '8',
                'session_id'=>'1',
                'course_id'=>'45',
                'teacher_internal_id'=>'8',
                'teacher_external_id'=>'6'
            ],


            ];
        DB::table('assign_courses')->insert($assigncourses);
    }
}
