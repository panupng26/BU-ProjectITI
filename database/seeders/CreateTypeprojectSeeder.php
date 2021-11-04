<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Typeproject;

class CreateTypeprojectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeproject =
        [
            [
                'name' => 'Web Application',
            ],
            [
                'name' => 'Enterprise Application',
            ],
            [
                'name' => 'Mobile Application',
            ],
            [
                'name' => 'MultiMedia'
            ],
            [
                'name' => 'Games'
            ]
        ];
        foreach ($typeproject as $key => $value){
            Typeproject::create($value);
        }
    }
}
