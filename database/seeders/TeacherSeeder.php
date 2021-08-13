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
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',
                'phone' => '555657',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',


                'blood_group' => 'A+'
            ],
            [
                'user_id' => 2,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'WDA',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',
                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',


                'blood_group' => 'A+'
            ],
            [
                'user_id' => 3,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'ST',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',
                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',
                'blood_group' => 'A+'
            ],
            [
                'user_id' => 4,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'DMR',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'A+'
            ],
            [
                'user_id' => 5,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'KNAS',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'A+'
            ],
            [
                'user_id' => 6,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'MTK',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',
                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',
                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'A+'
            ],
            [
                'user_id' => 7,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'ZI',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',


                'blood_group' => 'A+'
            ],
            [
                'user_id' => 8,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'ABJ',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'A+'
            ],
            [
                'user_id' => 9,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'SBS',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'A+'
            ],
            [
                'user_id' => 10,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'IJC',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',


                'blood_group' => 'A+'
            ],
            [
                'user_id' => 11,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'DZK',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'A+'
            ],
            [
                'user_id' => 12,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'SC',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'A+'
            ],
            [
                'user_id' => 13,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'IAC',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'A+'
            ],
            [
                'user_id' => 14,
                'firstname' => 'first',
                'lastname' => 'last',
                'teachers_short_name' => 'DHK',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'A+'
            ],          [
                'user_id' => 15,
                'firstname' => 'RC',
                'lastname' => 'RC',
                'teachers_short_name' => 'RC',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'B+'
            ],
            [
                'user_id' => 16,
                'firstname' => 'mhs',
                'lastname' => 'mhs',
                'teachers_short_name' => 'MHS',
                'status' => 'teacher',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita veritatis vel tenetur animi. Sit aut optio velit nostrum ipsa sapiente eos amet consectetur asperiores cumque iusto sint consequatur, quisquam consequuntur, repellendus a qui blanditiis odio dolor, ratione dignissimos laboriosam quae accusantium? Obcaecati earum eius qui deleniti. Accusantium molestiae sequi consectetur mollitia quae placeat culpa voluptates laudantium recusandae totam, nam ipsum quidem corrupti quam reiciendis repellat excepturi officia error quia quis! Laboriosam corporis, omnis aliquid dolorum voluptatem nisi similique autem inventore quos eius quam necessitatibus iste, officiis unde eaque provident aut facere reprehenderit neque quaerat laborum quis rerum. Sapiente, magni!',

                'phone' => '555657',
                'address' => 'address',
                'gender' => 'male',
                'address' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, nisi.',

                'masters_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'masters_passing_year' => '2020',
                'masters_gpa' => '3.83',

                'bachelor_institution' => 'Lorem ipsum dolor, sit amet consectetur',
                'bachelor_passing_year' => '2016',
                'bachelor_gpa' => '4.00',



                'blood_group' => 'AB+'
            ],
        ];
        DB::table('teachers')->insert($teacher);
    }
}
