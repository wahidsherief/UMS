<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $user=[ [
        'name'=>'Superadmin',
        'email'=>'superadmin@gmail.com',
        'role'=>'1',
        'picture'=>'16531623773774_avatar',
        'password'=>Hash::make('superadmin@gmail.com'),
        'account_status'=>'1',
        ],
        [
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'role'=>'2',
            'picture'=>'16531623773774_avatar',
            'password'=>Hash::make('admin@gmail.com'),
            'account_status'=>'0',
        ],
        [
            'name'=>'Teacher',
            'email'=>'teacher@gmail.com',
            'role'=>'3',
            'picture'=>'16531623773774_avatar',
            'password'=>Hash::make('teacher@gmail.com'),
            'account_status'=>'1',
         ],
         [
            'name'=>'Student',
            'email'=>'student@gmail.com',
            'role'=>'4',
            'picture'=>'16531623773774_avatar',
            'password'=>Hash::make('student@gmail.com'),
            'account_status'=>'1',
            ],
            [
                'name'=>'Student1',
                'email'=>'student1@gmail.com',
                'role'=>'4',
                'picture'=>'16531623773774_avatar',
                'password'=>Hash::make('student1@gmail.com'),
                'account_status'=>'0',
                ],
        ];
        DB::table('users')->insert($user);
    }
}
