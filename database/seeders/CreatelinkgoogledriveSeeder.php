<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Googledrivepeper;
class CreatelinkgoogledriveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linkweb = 
        [
            [
                'linkweb'=>'https://www.google.com'
            ]
        ];
        
        foreach($linkweb as $key => $value)
        {
            Googledrivepeper::create($value);
        }
    }
}
