<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class workplaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workplaces')->insert([
            ['title' => "student",
            'started_at' => now()],


    
        ],
        [
            ['title' => "profesor",
            'started_at' => now()],
    
        ]);
            
    }
}
