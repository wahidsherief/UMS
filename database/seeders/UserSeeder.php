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

        $user = [

            [
                'name' => 'ftjteacher',
                'email' => 'ftj@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('ftj@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'wdateacher',
                'email' => 'wda@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('wda@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'stteacher',
                'email' => 'st@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('st@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'dmr',
                'email' => 'dmr@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('dmr@gmail.com'),
                'account_status' => '1',
            ],


            [
                'name' => 'knas',
                'email' => 'knas@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('knas@gmail.com'),
                'account_status' => '1',
            ],

            [
                'name' => 'mtk',
                'email' => 'mtk@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('mtk@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'zi',
                'email' => 'zi@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('zi@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'abj',
                'email' => 'abj@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('abj@gmail.com'),
                'account_status' => '1',
            ],


            [
                'name' => 'sbs',
                'email' => 'sbs@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('sbs@gmail.com'),
                'account_status' => '1',
            ],

            [
                'name' => 'ijc',
                'email' => 'ijc@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('ijc@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'dzk',
                'email' => 'dzk@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('dzk@gmail.com'),
                'account_status' => '1',
            ],


            [
                'name' => 'sc',
                'email' => 'sc@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('sc@gmail.com'),
                'account_status' => '1',
            ],

            [
                'name' => 'rc',
                'email' => 'rc@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('rc@gmail.com'),
                'account_status' => '1',
            ],


            [
                'name' => 'mhs',
                'email' => 'mhs@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('mhs@gmail.com'),
                'account_status' => '1',
            ],

            [
                'name' => 'dhk',
                'email' => 'dhk@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('dhk@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'iac',
                'email' => 'iac@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('iac@gmail.com'),
                'account_status' => '1',
            ],
//Students
            [
                'name' => 'Joy Dhar',
                'email' => 'joyustcian@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('joyustcian@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Marjan',
                'email' => 'marjan@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('marjan@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'student1',
                'email' => 'student1@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('student1@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'student2',
                'email' => 'student2@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('student2@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Joy Dhar',
                'email' => 'joyustcian11@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('joyustcian11@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Marjan',
                'email' => 'marjan11@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('marjan11@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'student1',
                'email' => 'student11@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('student11@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'student21',
                'email' => 'student21@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('student12@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'student1',
                'email' => 'student111@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('student111@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'student2',
                'email' => 'student112@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('student112@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@gmail.com',
                'role' => '1',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('superadmin@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => '2',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('admin@gmail.com'),
                'account_status' => '0',
            ],

        ];
        DB::table('users')->insert($user);
    }
}
