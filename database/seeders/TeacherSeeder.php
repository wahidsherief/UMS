<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = [
            [
                'user_id' => 1,
                'firstname' => 'Fatema',
                'lastname' => 'Zohora',
                'teachers_short_name' => 'FTJ',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 2,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'WDA',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 3,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'ST',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 4,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'DMR',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 5,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'KNAS',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 6,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'MTK',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 7,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'ZI',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 8,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'ABJ',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 9,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'SBS',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 10,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'IJC',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 11,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'DZK',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 12,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'SC',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 13,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'IAC',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 14,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'DHK',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'A+'
            ],          [
                'user_id' => 15,
                'firstname' => 'RC',
                'lastname' => 'RC',
                'teachers_short_name' => 'RC',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'B+'
            ],
            [
                'user_id' => 16,
                'firstname' => 'mhs',
                'lastname' => 'mhs',
                'teachers_short_name' => 'MHS',
                'status' => 'teacher',
                'phone' => '555657',
                'address' => 'address',
                'blood_group' => 'AB+'
            ],
        ];
        DB::table('teachers')->insert($teacher);
    }
}
