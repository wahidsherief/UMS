<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;
class CourseSeeder extends Seeder
{


    public function run()
    {
        $courses= [
            //first semester
            [
            'department_id' => '1 ',
            'semester_id' => '1',
            'course_name' => 'Computer Fundamentals',
            'course_code' => 'CSE 111',
            'course_credit' => '2.00',

        ],
        [
            'department_id' => '1',
            'semester_id' => '1',
            'course_name' => 'Physics',
            'course_code' => 'PHY 111',
            'course_credit' => '3.00',
        ],
        [
            'department_id' => '1 ',
            'semester_id' => '1',
            'course_name' => 'Physics  Lab',
            'course_code' => 'PHY 112',
            'course_credit' => '1.50',

        ],
        [
            'department_id' => '1',
            'semester_id' => '1',
            'course_name' => 'Structured Programming  Language',
            'course_code' => 'CSE 113',
            'course_credit' => '3.00',
        ],
        [
            'department_id' => '1',
            'semester_id' => '1',
            'course_name' => 'Structured Programming  Language Lab',
            'course_code' => 'CSE 114',
            'course_credit' => '1.50',
        ],

        [
            'department_id' => '1',
            'semester_id' => '1',
            'course_name' => 'Differential Calculus and Integral Calculus',
            'course_code' => 'MATH 115',
            'course_credit' => '3.00',
        ],
        [
            'department_id' => '1',
            'semester_id' => '1',
            'course_name' => 'English',
            'course_code' => 'ENG 119',
            'course_credit' => '3.00',
        ],
        [
            'department_id' => '1',
            'semester_id' => '1',
            'course_name' => 'GED Course',
            'course_code' => 'HSS ',
            'course_credit' => '3.00',
        ],



  //second semester


  [
    'department_id' => '1',
    'semester_id' => '2',
    'course_name' => 'Developing English Skills Lab',
    'course_code' => 'ENG 120',
    'course_credit' => '1.00',

],
[
    'department_id' => '1',
    'semester_id' => '2',
    'course_name' => 'Discrete Mathematics',
    'course_code' => 'CSE 121',
    'course_credit' => '3.00',
],
[
    'department_id' => '1 ',
    'semester_id' => '2',
    'course_name' => 'Object Oriented Programming',
    'course_code' => 'CSE 123',
    'course_credit' => '3.00',

],
[
    'department_id' => '1',
    'semester_id' => '2',
    'course_name' => 'Object Oriented Programming Lab',
    'course_code' => 'CSE 124',
    'course_credit' => '1.50',
],
[
    'department_id' => '1',
    'semester_id' => '2',
    'course_name' => 'Introduction to Electrical Engineering',
    'course_code' => 'EEE 123',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '2',
    'course_name' => 'Introduction to Electrical Engineering Lab',
    'course_code' => 'EEE 124',
    'course_credit' => '1.50',
],

[
    'department_id' => '1',
    'semester_id' => '2',
    'course_name' => 'Ordinary and Partial Differential Equations',
    'course_code' => 'MATH 125',
    'course_credit' => '1.50',
],

[
    'department_id' => '1',
    'semester_id' => '2',
    'course_name' => 'Chemistry',
    'course_code' => 'CHEM 127',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '2',
    'course_name' => 'Chemistry  Lab',
    'course_code' => 'CHEM 128',
    'course_credit' => '1.00',
],


// 3rd Semester



[
    'department_id' => '1 ',
    'semester_id' => '3',
    'course_name' => 'Data Structure',
    'course_code' => 'CSE 211',
    'course_credit' => '3.00',

],
[
    'department_id' => '1',
    'semester_id' => '3',
    'course_name' => 'Data Structure Lab',
    'course_code' => 'CSE 212',
    'course_credit' => '1.50',
],
[
    'department_id' => '1 ',
    'semester_id' => '3',
    'course_name' => 'Electronic Devices and Circuits',
    'course_code' => 'EEE 213',
    'course_credit' => '3.00',

],
[
    'department_id' => '1',
    'semester_id' => '3',
    'course_name' => 'Electronic Devices and Circuits  Lab',
    'course_code' => 'EEE 214',
    'course_credit' => '1.50',
],
[
    'department_id' => '1',
    'semester_id' => '3',
    'course_name' => 'Basic Mechanical Engineering',
    'course_code' => 'ME 215',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '3',
    'course_name' => 'Co-ordinate Geometry and Vector Analysis',
    'course_code' => 'MATH 217',
    'course_credit' => '3.00',
],



[
    'department_id' => '1',
    'semester_id' => '3',
    'course_name' => 'GED Course',
    'course_code' => 'HSS ',
    'course_credit' => '3.00',
],


//4th semseter


[
    'department_id' => '1',
    'semester_id' => '4',
    'course_name' => 'Algorithms',
    'course_code' => 'CSE 221',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '4',
    'course_name' => 'Algorithms Lab',
    'course_code' => 'CSE 222',
    'course_credit' => '1.50',
],


[
    'department_id' => '1',
    'semester_id' => '4',
    'course_name' => 'Database Management Systems',
    'course_code' => 'CSE 223',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '4',
    'course_name' => 'Database Management Systems Lab',
    'course_code' => 'CSE 224',
    'course_credit' => '1.50',
],

[
    'department_id' => '1',
    'semester_id' => '4',
    'course_name' => 'Digital Logic Design',
    'course_code' => 'CSE 225',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '4',
    'course_name' => 'Digital Logic Design Lab',
    'course_code' => 'CSE 226',
    'course_credit' => '1.50',
],

[
    'department_id' => '1',
    'semester_id' => '4',
    'course_name' => 'Theory of Computing',
    'course_code' => 'CSE 227',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '4',
    'course_name' => 'Linear Algebra and Complex Variables',
    'course_code' => 'MATH  229',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '4',
    'course_name' => 'GED Course',
    'course_code' => 'ACT ',
    'course_credit' => '3.00',
],


//5th semseter


[
    'department_id' => '1',
    'semester_id' => '5',
    'course_name' => 'Numerical Analysis',
    'course_code' => 'CSE 311',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '5',
    'course_name' => 'Numerical Analysis Lab',
    'course_code' => 'CSE 312',
    'course_credit' => '1.50',
],


[
    'department_id' => '1',
    'semester_id' => '5',
    'course_name' => 'Data Communication',
    'course_code' => 'CSE 313',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '5',
    'course_name' => 'Elective I',
    'course_code' => 'CSE ****',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '5',
    'course_name' => 'Elective I Lab',
    'course_code' => 'CSE ***',
    'course_credit' => '1.50',
],

[
    'department_id' => '1',
    'semester_id' => '5',
    'course_name' => 'Computer Architecture',
    'course_code' => 'CSE 319',
    'course_credit' => '3.00',
],


[
    'department_id' => '1',
    'semester_id' => '5',
    'course_name' => 'GED Course',
    'course_code' => 'ECO ***',
    'course_credit' => '3.00',
],


[
    'department_id' => '1',
    'semester_id' => '5',
    'course_name' => 'Statistics and Probability',
    'course_code' => 'MATH  319',
    'course_credit' => '3.00',
],


//6th semseter


[
    'department_id' => '1',
    'semester_id' => '6',
    'course_name' => 'Compiler Design',
    'course_code' => 'CSE 321',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '6',
    'course_name' => 'Compiler Design Lab',
    'course_code' => 'CSE 322',
    'course_credit' => '1.50',
],


[
    'department_id' => '1',
    'semester_id' => '6',
    'course_name' => 'Artificial Intelligence & Expert systems',
    'course_code' => 'CSE 323',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '6',
    'course_name' => 'Artificial Intelligence & Expert systems Lab',
    'course_code' => 'CSE 324',
    'course_credit' => '1.50',
],

[
    'department_id' => '1',
    'semester_id' => '6',
    'course_name' => 'Computer Networks',
    'course_code' => 'CSE 325',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '6',
    'course_name' => 'Computer Networks Lab',
    'course_code' => 'CSE 326',
    'course_credit' => '1.50',
],


[
    'department_id' => '1',
    'semester_id' => '6',
    'course_name' => 'Operating Systems',
    'course_code' => 'CSE 327',
    'course_credit' => '3.00',
],


[
    'department_id' => '1',
    'semester_id' => '6',
    'course_name' => 'Operating Systems Lab',
    'course_code' => 'CSE 328',
    'course_credit' => '1.50',
],
[
    'department_id' => '1',
    'semester_id' => '6',
    'course_name' => 'GED Course',
    'course_code' => 'BUS ***',
    'course_credit' => '3.00',
],


//7th semseter


[
    'department_id' => '1',
    'semester_id' => '7',
    'course_name' => 'Project and Thesis',
    'course_code' => 'CSE 400',
    'course_credit' => '1.50',
],

[
    'department_id' => '1',
    'semester_id' => '7',
    'course_name' => 'System Analysis and Design Lab',
    'course_code' => 'CSE 410',
    'course_credit' => '1.50',
],


[
    'department_id' => '1',
    'semester_id' => '7',
    'course_name' => 'Advance Core Course',
    'course_code' => 'EEE ***',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '7',
    'course_name' => 'Software Engineering',
    'course_code' => 'CSE 413',
    'course_credit' => '1.50',
],

[
    'department_id' => '1',
    'semester_id' => '7',
    'course_name' => 'Software Engineering Lab',
    'course_code' => 'CSE 414',
    'course_credit' => '1.50',
],

[
    'department_id' => '1',
    'semester_id' => '7',
    'course_name' => 'Elective I',
    'course_code' => 'EEE ***',
    'course_credit' => '3.00',
],


[
    'department_id' => '1',
    'semester_id' => '7',
    'course_name' => 'Elective I lab',
    'course_code' => 'EEE ***',
    'course_credit' => '1.50',
],


[
    'department_id' => '1',
    'semester_id' => '7',
    'course_name' => 'Elective I',
    'course_code' => 'CSE ***',
    'course_credit' => '3.00',
],


[
    'department_id' => '1',
    'semester_id' => '7',
    'course_name' => 'Elective I lab',
    'course_code' => 'CSE ***',
    'course_credit' => '1.50',
],


//8th semseter


[
    'department_id' => '1',
    'semester_id' => '8',
    'course_name' => 'Project and Thesis',
    'course_code' => 'CSE 400',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '8',
    'course_name' => 'Communication Engineering',
    'course_code' => 'CSE 421',
    'course_credit' => '3.00',
],
[
    'department_id' => '1',
    'semester_id' => '8',
    'course_name' => 'Elective II',
    'course_code' => 'CSE ***',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '8',
    'course_name' => 'Elective II',
    'course_code' => 'CSE ***',
    'course_credit' => '3.00',
],

[
    'department_id' => '1',
    'semester_id' => '8',
    'course_name' => 'Elective II',
    'course_code' => 'CSE ***',
    'course_credit' => '3.00',
],];
    DB::table('courses')->insert($courses);

    }
}
