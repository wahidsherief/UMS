<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;
class StudentProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$students=[
    [
        'user_id'=>'19',
        'department_id'=>'1',
        'semester_id'=>'1',
        'batch_id'=>'1',
        'firstname'=>'Joy',
        'lastname'=>'dhar',
        'roll_number'=>'17010132',
        'registration_number'=>'682',
        'phone'=>'01774861411',
        'address'=>'anwara',
        'blood_group'=>'A+',
        'hsc_gpa'=>'4.17',
        'ssc_gpa'=>'5.00',
        'jsc_gpa'=>'4.86',
        'psc_gpa'=>'5.00',
    ],
    [
        'user_id'=>'20',
        'department_id'=>'1',
        'semester_id'=>'2',
        'batch_id'=>'2',
        'firstname'=>'Marjan',
        'lastname'=>'Mia',
        'roll_number'=>'17010110',
        'registration_number'=>'610',
        'phone'=>'01774861411',
        'address'=>'anwara',
        'blood_group'=>'A+',
        'hsc_gpa'=>'4.17',
        'ssc_gpa'=>'5.00',
        'jsc_gpa'=>'4.86',
        'psc_gpa'=>'5.00',
    ]];




      DB::table('students')->insert($students);

    }
}
