<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'role'=>'2',
            'picture'=>'16531623773774_avatar',
            'password'=>'admin@gmail.com',
            'account_status'=>'1',
        ]);

    }
}
