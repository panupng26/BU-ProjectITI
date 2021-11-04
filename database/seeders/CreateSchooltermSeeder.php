<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schoolterm;

class CreateSchooltermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schoolterm =
        [
            [
                'term' => '1',
            ],
            [
                'term' => '2',
            ],
            [
                'term' => '3',
            ],
            
        ];

        foreach($schoolterm as $key => $value)
        {
            Schoolterm::create($value);
        }
    }
}
