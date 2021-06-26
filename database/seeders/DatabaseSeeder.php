<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
// StudentProfileSeeder::class,
DepartmentSeeder::class,
 //BatchSeeder::class,
 SemesterSeeder::class,
 CourseSeeder::class,
UserSeeder::class,
 CoursetypeSeeder::class,
 Batchdesign::class,
 ActivitiesSeeder::class,
 TeacherSeeder::class,
        ]);
    }
}
