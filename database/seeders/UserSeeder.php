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
                'name' => 'Fatema Tuj Johora',
                'email' => 'ftj@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('ftj@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Wahidul Alam',
                'email' => 'wda@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('wda@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Sabiha Tasnim',
                'email' => 'st@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('st@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Dr. Madhusudan Roy',
                'email' => 'dmr@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('dmr@gmail.com'),
                'account_status' => '1',
            ],


            [
                'name' => 'Kazy Noor-E-Alam Siddique',
                'email' => 'knas@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('knas@gmail.com'),
                'account_status' => '1',
            ],

            [
                'name' => 'Most Tahamina Khatoon',
                'email' => 'mtk@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('mtk@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Zarin Tasnim',
                'email' => 'zi@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('zi@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Aishi Barua Jui',
                'email' => 'abj@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('abj@gmail.com'),
                'account_status' => '1',
            ],


            [
                'name' => 'Shaila Binte Sattar',
                'email' => 'sbs@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('sbs@gmail.com'),
                'account_status' => '1',
            ],

            [
                'name' => 'Israth Jahan Chowdhury',
                'email' => 'ijc@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('ijc@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Dr. Zahid Kauser',
                'email' => 'dzk@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('dzk@gmail.com'),
                'account_status' => '1',
            ],

            [
                'name' => 'Shujon Chowdhury',
                'email' => 'sc@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('sc@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Dr. Hasan Kamrul',
                'email' => 'dhk@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('dhk@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Imtiaz Akbor Chowdhury',
                'email' => 'iac@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('iac@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Rocky Chakma',
                'email' => 'rc@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('rc@gmail.com'),
                'account_status' => '1',
            ],


            [
                'name' => 'Md. Shahadat Hossain',
                'email' => 'mhs@gmail.com',
                'role' => '3',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('mhs@gmail.com'),
                'account_status' => '1',
            ],

            // Students Account -> 8 Semester- 10 Students

            [
                'name' => 'Joy Dhar',
                'email' => 'joyustcian@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('joyustcian@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Abeer Khan',
                'email' => 'abeer@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('abeer@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Dipon  Das',
                'email' => 'marjan@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('dipon@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Omor Hossain',
                'email' => 'omor@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('omor@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Pramti Dey',
                'email' => 'pramti@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('pramti@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Aarav Chy',
                'email' => 'Aarav@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('Aarav@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Daeb Khan',
                'email' => 'daeb@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('daeb@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Diar Pal',
                'email' => 'diar@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('diar@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'vaasu Mahajon',
                'email' => 'vaasu@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('vaasu@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Vadin Sen ',
                'email' => 'vadin@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('vadin@gmail.com'),
                'account_status' => '1',
            ],

            // Students Account -> mixup Semester-20 Students

            [
                'name' => 'Kaamod Khan',
                'email' => 'kaamod@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('kaamod@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Avi Roy',
                'email' => 'avi@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('avi@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Jeet  Das',
                'email' => 'Jeet@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('jeet@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Rakib Hossain',
                'email' => 'Rakib@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('rakir@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Saati Dey',
                'email' => 'Saati@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('saati@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Karim Mia',
                'email' => 'Karim@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('karim@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Riku Dey',
                'email' => 'Riku@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('riku@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Robin Hossain',
                'email' => 'Robin@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('robin@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Saiful Islam',
                'email' => 'saiful@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('saiful@gmail.com'),
                'account_status' => '1',
            ],
            [
                'name' => 'Vishnoi Sen',
                'email' => 'Vishnoi@gmail.com',
                'role' => '4',
                'picture' => '16531623773774_avatar',
                'password' => Hash::make('vishnoi@gmail.com'),
                'account_status' => '1',
            ],



            //**********Admin Panel*-******
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
                'account_status' => '1',
            ],

        ];
        DB::table('users')->insert($user);
    }
}
