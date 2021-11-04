<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoleTeacher;
class CreateRoleTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleteacher =
        [
            [
                'name' => 'อาจารย์',
            ],
            [
                'name' => 'อาจารย์ผู้ประสานงาน',
            ]
        ];
        foreach ($roleteacher as $key => $value){
            RoleTeacher::create($value);
        }
    }
}
