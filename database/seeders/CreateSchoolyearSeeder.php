<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schoolyear;

class CreateSchoolyearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schoolyear =
        [
            [
                'year' => '2563',
            ],
            [
                'year' => '2564',
            ],
            [
                'year' => '2565',
            ],
            [
                'year' => '2566',
            ],
            [
                'year' => '2567',
            ],
            [
                'year' => '2568',
            ],
            [
                'year' => '2569',
            ],
            [
                'year' => '2570',
            ],
        ];

        foreach ($schoolyear as $key => $value)
        {
            Schoolyear::create($value);
        }
    }
}
