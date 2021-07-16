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
            StudentProfileSeeder::class,
            DepartmentSeeder::class,

            SemesterSeeder::class,
            CourseSeeder::class,
            UserSeeder::class,
            CoursetypeSeeder::class,
            AssignCoursesSeeder::class,
            SessionSeeder::class,
            TeacherSeeder::class,
            BatchSeeder::class,
            ResultSeeder::class,
            Batch_semester_seeder::class,
            Batch_student_seeder::class,
        ]);
    }
}
