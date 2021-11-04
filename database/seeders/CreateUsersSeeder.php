<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =
        [
            [
                'name' => 'Admin',
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

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
