<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class CreateStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 0 = false
        // 1 = true
        $student =
        [
            [
                'status_project1_id' => '0',
                'status_project2_id' => '0',
                'project_id' => null,
                'email' => 'admin@test.com',
                'login_level' => '0',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'Student',
                'email' => 'student@test.com',
                'login_level' => '1',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'Teacher',
                'email' => 'teacher@test.com',
                'login_level' => '2',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'PrivateTeacher',
                'email' => 'privateteacher@test.com',
                'login_level' => '3',
                'password' => bcrypt('1234')
            ]
        ];

        foreach ($student as $key => $value){
            Student::create($value);
        }
    }
}
