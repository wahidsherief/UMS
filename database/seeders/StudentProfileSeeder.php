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
      DB::table('students')->insert([
          'user_id'=>'3',
          'department_id'=>'1',
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
      ]);

    }
}
