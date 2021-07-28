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
        $students = [

            // 1 out of 10

            [
                'user_id' => 17,
                'semester_id' => '8',
                'batch_id' => '8',
                'firstname' => 'Joy',
                'lastname' => 'dhar',
                'roll_number' => '17010132',
                'registration_number' => '682',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],
            [
                'user_id' => '18',

                'semester_id' => '8',
                'batch_id' => '8',
                'firstname' => 'Abeer',
                'lastname' => 'Khan',
                'roll_number' => '17010109',
                'registration_number' => '600',
                'phone' => '01774861409',
                'address' => 'anwara',
                'blood_group' => 'B+',
                'hsc_gpa' => '5.00',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],


            [
                'user_id' => '19',

                'semester_id' => '8',
                'batch_id' => '8',
                'firstname' => 'Dipon',
                'lastname' => 'Das',
                'roll_number' => '17010122',
                'registration_number' => '601',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A-',
                'hsc_gpa' => '3.17',
                'ssc_gpa' => '4.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],
            [
                'user_id' => '20',

                'semester_id' => '8',
                'batch_id' => '8',
                'firstname' => 'Omor',
                'lastname' => 'Hossain',
                'roll_number' => '17010111',
                'registration_number' => '602',
                'phone' => '0187855475',
                'address' => 'Rowzan',
                'blood_group' => 'O+',
                'hsc_gpa' => '4.75',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '3.00',
            ],

            [
                'user_id' => '21',

                'semester_id' => '8',
                'batch_id' => '8',
                'firstname' => 'Pramti',
                'lastname' => 'Dey',
                'roll_number' => '17010124',
                'registration_number' => '603',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.25',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],
            [
                'user_id' => '22',

                'semester_id' => '8',
                'batch_id' => '8',
                'firstname' => 'Aarav',
                'lastname' => 'Chy',
                'roll_number' => '17010114',
                'registration_number' => '604',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],

            [
                'user_id' => '23',

                'semester_id' => '8',
                'batch_id' => '8',
                'firstname' => 'Daeb',
                'lastname' => 'Khan',
                'roll_number' => '17010133',
                'registration_number' => '605',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],
            [
                'user_id' => '24',

                'semester_id' => '8',
                'batch_id' => '8',
                'firstname' => 'Diar',
                'lastname' => 'Pal',
                'roll_number' => '17010110',
                'registration_number' => '606',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'O-',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],

            [
                'user_id' => '25',

                'semester_id' => '8',
                'batch_id' => '8',
                'firstname' => 'vaasu',
                'lastname' => 'Mahajon',
                'roll_number' => '17010132',
                'registration_number' => '607',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '3.88',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],
            [
                'user_id' => '26',

                'semester_id' => '8',
                'batch_id' => '8',
                'firstname' => 'Vadin',
                'lastname' => 'Sen',
                'roll_number' => '17010110',
                'registration_number' => '607',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.00',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],

            // Others Students

            [
                'user_id' => '27',

                'semester_id' => '1',
                'batch_id' => '1',
                'firstname' => 'Kaamod',
                'lastname' => 'Khan',
                'roll_number' => '17010132',
                'registration_number' => '682',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],
            [
                'user_id' => '28',

                'semester_id' => '2',
                'batch_id' => '2',
                'firstname' => 'Avi',
                'lastname' => 'Roy',
                'roll_number' => '17010110',
                'registration_number' => '614',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],

            [
                'user_id' => '29',

                'semester_id' => '3',
                'batch_id' => '3',
                'firstname' => 'Jeet',
                'lastname' => 'Das',
                'roll_number' => '17010132',
                'registration_number' => '655',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],
            [
                'user_id' => '30',

                'semester_id' => '4',
                'batch_id' => '4',
                'firstname' => 'Rakib',
                'lastname' => 'Sen',
                'roll_number' => '17010144',
                'registration_number' => '615',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],

            [
                'user_id' => '31',

                'semester_id' => '5',
                'batch_id' => '5',
                'firstname' => 'Saati',
                'lastname' => 'Dey',
                'roll_number' => '18010155',
                'registration_number' => '682',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],
            [
                'user_id' => '32',

                'semester_id' => '6',
                'batch_id' => '6',
                'firstname' => 'Karim',
                'lastname' => 'Mia',
                'roll_number' => '18010154',
                'registration_number' => '758',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],

            [
                'user_id' => '33',

                'semester_id' => '7',
                'batch_id' => '7',
                'firstname' => 'Riku',
                'lastname' => 'lastDeyname',
                'roll_number' => '17010132',
                'registration_number' => '777',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],
            [
                'user_id' => '34',

                'semester_id' => '1',
                'batch_id' => '1',
                'firstname' => 'Robin',
                'lastname' => 'Hossain',
                'roll_number' => '17010110',
                'registration_number' => '610',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],

            // 2 out of 10

            [
                'user_id' => '35',

                'semester_id' => '1',
                'batch_id' => '1',
                'firstname' => 'Saiful',
                'lastname' => 'Islam',
                'roll_number' => '17010132',
                'registration_number' => '682',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],
            [
                'user_id' => '36',

                'semester_id' => '1',
                'batch_id' => '1',
                'firstname' => 'Vishnoi',
                'lastname' => 'Sen',
                'roll_number' => '17010110',
                'registration_number' => '610',
                'phone' => '01774861411',
                'address' => 'anwara',
                'blood_group' => 'A+',
                'hsc_gpa' => '4.17',
                'ssc_gpa' => '5.00',
                'jsc_gpa' => '4.86',
                'psc_gpa' => '5.00',
            ],

            // [
            //     'user_id' => '37',

            //     'semester_id' => '3',
            //     'batch_id' => '3',
            //     'firstname' => 'student37',
            //     'lastname' => 'lastname',
            //     'roll_number' => '17010132',
            //     'registration_number' => '682',
            //     'phone' => '01774861411',
            //     'address' => 'anwara',
            //     'blood_group' => 'A+',
            //     'hsc_gpa' => '4.17',
            //     'ssc_gpa' => '5.00',
            //     'jsc_gpa' => '4.86',
            //     'psc_gpa' => '5.00',
            // ],
            // [
            //     'user_id' => '38',

            //     'semester_id' => '4',
            //     'batch_id' => '4',
            //     'firstname' => 'student38',
            //     'lastname' => 'last name',
            //     'roll_number' => '17010110',
            //     'registration_number' => '610',
            //     'phone' => '01774861411',
            //     'address' => 'anwara',
            //     'blood_group' => 'A+',
            //     'hsc_gpa' => '4.17',
            //     'ssc_gpa' => '5.00',
            //     'jsc_gpa' => '4.86',
            //     'psc_gpa' => '5.00',
            // ],

            // [
            //     'user_id' => '39',

            //     'semester_id' => '5',
            //     'batch_id' => '5',
            //     'firstname' => 'student39',
            //     'lastname' => 'dhar',
            //     'roll_number' => '17010132',
            //     'registration_number' => '682',
            //     'phone' => '01774861411',
            //     'address' => 'anwara',
            //     'blood_group' => 'A+',
            //     'hsc_gpa' => '4.17',
            //     'ssc_gpa' => '5.00',
            //     'jsc_gpa' => '4.86',
            //     'psc_gpa' => '5.00',
            // ],
            // [
            //     'user_id' => '40',

            //     'semester_id' => '6',
            //     'batch_id' => '6',
            //     'firstname' => 'Student40',
            //     'lastname' => 'semester_4',
            //     'roll_number' => '17010110',
            //     'registration_number' => '610',
            //     'phone' => '01774861411',
            //     'address' => 'anwara',
            //     'blood_group' => 'A+',
            //     'hsc_gpa' => '4.17',
            //     'ssc_gpa' => '5.00',
            //     'jsc_gpa' => '4.86',
            //     'psc_gpa' => '5.00',
            // ],

            // [
            //     'user_id' => '41',

            //     'semester_id' => '7',
            //     'batch_id' => '7',
            //     'firstname' => 'student41',
            //     'lastname' => 'lastname',
            //     'roll_number' => '17010132',
            //     'registration_number' => '682',
            //     'phone' => '01774861411',
            //     'address' => 'anwara',
            //     'blood_group' => 'A+',
            //     'hsc_gpa' => '4.17',
            //     'ssc_gpa' => '5.00',
            //     'jsc_gpa' => '4.86',
            //     'psc_gpa' => '5.00',
            // ],
            // [
            //     'user_id' => '42',

            //     'semester_id' => '2',
            //     'batch_id' => '2',
            //     'firstname' => 'student42',
            //     'lastname' => 'semester 8',
            //     'roll_number' => '17010110',
            //     'registration_number' => '610',
            //     'phone' => '01774861411',
            //     'address' => 'anwara',
            //     'blood_group' => 'A+',
            //     'hsc_gpa' => '4.17',
            //     'ssc_gpa' => '5.00',
            //     'jsc_gpa' => '4.86',
            //     'psc_gpa' => '5.00',
            // ]

        ];




        DB::table('students')->insert($students);
    }
}
