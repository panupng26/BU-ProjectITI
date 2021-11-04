<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Typepeper;
class CreateTypepeperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeper = 
        [
            [
                'nametype'=> "คง.ทน.01-1",
                'description'=>"แบบฟอร์มเสนอหัวข้อ"
            ],
            [
                'nametype'=>"คง.ทน.01-3",
                'description'=>"แบบฟอร์มผลการสอบหัวข้อสำหรับโครงงาน"
            ],
            [
                'nametype'=>"คง.ทน.02",
                'description'=>"แบบฟอร์มผลการสอบหัวข้อสำหรับโครงงาน 1"
            ]
        ];
        foreach($typeper as $key => $value)
        {
            Typepeper::create($value);
        }
    }
}
