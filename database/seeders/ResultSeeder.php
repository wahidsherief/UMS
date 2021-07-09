<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result=[
            //semester 1
            [
                'session_id'=>'1',
                'student_id'=>'1',
                'semester_id'=>'1',
                'course_id'=>'1',
                'class_test'=>'40',
                'attendance'=>'25',
                'part_a'=>'80',
                'part_b'=>'75',
                'percentage'=>'75.55',
                'n_grade'=>'3.50',
                'l_grade'=>'A-',
            ],

            [
                'session_id'=>'1',
                'student_id'=>'1',
                'semester_id'=>'1',
                'course_id'=>'2',
                'class_test'=>'45',
                'attendance'=>'15',
                'part_a'=>'80',
                'part_b'=>'70',
                'percentage'=>'65.55',
                'n_grade'=>'3.26',
                'l_grade'=>'B',
            ],
 //semester 2
 [
    'session_id'=>'1',
    'student_id'=>'3',
    'semester_id'=>'2',
    'course_id'=>'3',
    'class_test'=>'55',
    'attendance'=>'25',
    'part_a'=>'66',
    'part_b'=>'55',
    'percentage'=>'55.55',
    'n_grade'=>'3.50',
    'l_grade'=>'B-',
],

[
    'session_id'=>'1',
    'student_id'=>'4',
    'semester_id'=>'2',
    'course_id'=>'4',
    'class_test'=>'50',
    'attendance'=>'15',
    'part_a'=>'80',
    'part_b'=>'70',
    'percentage'=>'65.55',
    'n_grade'=>'3.26',
    'l_grade'=>'B',
],
 //semester 3
 [
    'session_id'=>'1',
    'student_id'=>'5',
    'semester_id'=>'3',
    'course_id'=>'7',
    'class_test'=>'30',
    'attendance'=>'25',
    'part_a'=>'66',
    'part_b'=>'55',
    'percentage'=>'55.55',
    'n_grade'=>'3.50',
    'l_grade'=>'B-',
],

[
    'session_id'=>'1',
    'student_id'=>'6',
    'semester_id'=>'3',
    'course_id'=>'12',
    'class_test'=>'40',
    'attendance'=>'15',
    'part_a'=>'80',
    'part_b'=>'70',
    'percentage'=>'65.55',
    'n_grade'=>'3.26',
    'l_grade'=>'B',
],

 //semester 4
 [
    'session_id'=>'1',
    'student_id'=>'7',
    'semester_id'=>'4',
    'course_id'=>'44',
    'class_test'=>'40',
    'attendance'=>'25',
    'part_a'=>'66',
    'part_b'=>'55',
    'percentage'=>'55.55',
    'n_grade'=>'3.50',
    'l_grade'=>'B-',
],

[
    'session_id'=>'1',
    'student_id'=>'8',
    'semester_id'=>'4',
    'course_id'=>'40',
    'class_test'=>'40',
    'attendance'=>'15',
    'part_a'=>'80',
    'part_b'=>'70',
    'percentage'=>'65.55',
    'n_grade'=>'3.26',
    'l_grade'=>'B',
],

 //semester 5
 [
    'session_id'=>'1',
    'student_id'=>'9',
    'semester_id'=>'5',
    'course_id'=>'24',
    'class_test'=>'40',
    'attendance'=>'25',
    'part_a'=>'66',
    'part_b'=>'55',
    'percentage'=>'55.55',
    'n_grade'=>'3.50',
    'l_grade'=>'B-',
],

[
    'session_id'=>'1',
    'student_id'=>'10',
    'semester_id'=>'5',
    'course_id'=>'31',
    'class_test'=>'40',
    'attendance'=>'15',
    'part_a'=>'80',
    'part_b'=>'70',
    'percentage'=>'65.55',
    'n_grade'=>'3.26',
    'l_grade'=>'B',
],

 //semester 6
 [
    'session_id'=>'1',
    'student_id'=>'11',
    'semester_id'=>'6',
    'course_id'=>'27',
    'class_test'=>'40',
    'attendance'=>'25',
    'part_a'=>'66',
    'part_b'=>'55',
    'percentage'=>'55.55',
    'n_grade'=>'3.50',
    'l_grade'=>'B-',
],

[
    'session_id'=>'1',
    'student_id'=>'12',
    'semester_id'=>'6',
    'course_id'=>'28',
    'class_test'=>'40',
    'attendance'=>'15',
    'part_a'=>'80',
    'part_b'=>'70',
    'percentage'=>'65.55',
    'n_grade'=>'3.26',
    'l_grade'=>'B',
],


 //semester 7
 [
    'session_id'=>'1',
    'student_id'=>'13',
    'semester_id'=>'7',
    'course_id'=>'34',
    'class_test'=>'40',
    'attendance'=>'25',
    'part_a'=>'66',
    'part_b'=>'55',
    'percentage'=>'55.55',
    'n_grade'=>'3.50',
    'l_grade'=>'B-',
],

[
    'session_id'=>'1',
    'student_id'=>'14',
    'semester_id'=>'7',
    'course_id'=>'55',
    'class_test'=>'40',
    'attendance'=>'15',
    'part_a'=>'80',
    'part_b'=>'70',
    'percentage'=>'65.55',

    'n_grade'=>'3.26',
    'l_grade'=>'B',
],

 //semester 8
 [
    'session_id'=>'1',
    'student_id'=>'1',
    'semester_id'=>'8',
    'course_id'=>'27',
    'class_test'=>'40',
    'attendance'=>'25',
    'part_a'=>'66',
    'part_b'=>'55',
    'percentage'=>'55.55',
    
    'n_grade'=>'3.50',
    'l_grade'=>'B-',
],

[
    'session_id'=>'8',
    'student_id'=>'1',
    'semester_id'=>'8',
    'course_id'=>'52',
    'class_test'=>'30',
    'attendance'=>'15',
    'part_a'=>'80',
    'part_b'=>'70',
    'percentage'=>'65.55',
    'n_grade'=>'3.26',
    'l_grade'=>'B',
],

        ];
        DB::table('results')->insert($result);
    }
}
