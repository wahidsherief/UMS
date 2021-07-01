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
                'classtest_1'=>'10',
                'classtest_2'=>'11',
                'classtest_3'=>'12',
                'classtest_4'=>'13',
                'attendance'=>'25',
                'part_a'=>'80',
                'part_b'=>'75',
                'percentage'=>'75.55',
                'n_grade'=>'3.50',
                'l_grade'=>'A-',
            ],

            [
                'session_id'=>'1',
                'student_id'=>'2',
                'semester_id'=>'1',
                'course_id'=>'2',
                'classtest_1'=>'11',
                'classtest_2'=>'10',
                'classtest_3'=>'15',
                'classtest_4'=>'15',
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
    'classtest_1'=>'12',
    'classtest_2'=>'05',
    'classtest_3'=>'12',
    'classtest_4'=>'13',
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
    'classtest_1'=>'11',
    'classtest_2'=>'10',
    'classtest_3'=>'15',
    'classtest_4'=>'15',
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
    'classtest_1'=>'12',
    'classtest_2'=>'05',
    'classtest_3'=>'12',
    'classtest_4'=>'13',
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
    'classtest_1'=>'11',
    'classtest_2'=>'10',
    'classtest_3'=>'15',
    'classtest_4'=>'15',
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
    'classtest_1'=>'12',
    'classtest_2'=>'05',
    'classtest_3'=>'12',
    'classtest_4'=>'13',
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
    'classtest_1'=>'11',
    'classtest_2'=>'10',
    'classtest_3'=>'15',
    'classtest_4'=>'15',
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
    'classtest_1'=>'12',
    'classtest_2'=>'05',
    'classtest_3'=>'12',
    'classtest_4'=>'13',
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
    'classtest_1'=>'11',
    'classtest_2'=>'10',
    'classtest_3'=>'15',
    'classtest_4'=>'15',
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
    'classtest_1'=>'12',
    'classtest_2'=>'05',
    'classtest_3'=>'12',
    'classtest_4'=>'13',
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
    'classtest_1'=>'11',
    'classtest_2'=>'10',
    'classtest_3'=>'15',
    'classtest_4'=>'15',
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
    'classtest_1'=>'12',
    'classtest_2'=>'05',
    'classtest_3'=>'12',
    'classtest_4'=>'13',
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
    'classtest_1'=>'11',
    'classtest_2'=>'10',
    'classtest_3'=>'15',
    'classtest_4'=>'15',
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
    'student_id'=>'15',
    'semester_id'=>'8',
    'course_id'=>'27',
    'classtest_1'=>'12',
    'classtest_2'=>'05',
    'classtest_3'=>'12',
    'classtest_4'=>'13',
    'attendance'=>'25',
    'part_a'=>'66',
    'part_b'=>'55',
    'percentage'=>'55.55',
    'n_grade'=>'3.50',
    'l_grade'=>'B-',
],

[
    'session_id'=>'8',
    'student_id'=>'16',
    'semester_id'=>'6',
    'course_id'=>'52',
    'classtest_1'=>'11',
    'classtest_2'=>'10',
    'classtest_3'=>'15',
    'classtest_4'=>'15',
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
