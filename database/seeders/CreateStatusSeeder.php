<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class CreateStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
        [
            'name' => "ไม่ผ่าน",
        ],
        [
            'name' => "ผ่าน",
        ],
        [
            'name' => "รอการอนุมัติ",
        ],
        [
            'name' => "อนุมัติคำร้อง",
        ],
        ];
        
        foreach ($status as $key => $value)
        {
            Status::create($value);
        }
    }
}
