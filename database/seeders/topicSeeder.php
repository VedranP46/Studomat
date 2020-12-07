<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class topicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            topicSeeder::class,
            
        ]);

        DB::table('topics')->insert([
            'name' => Str::random(10),
            'id' => Str::random(10),
            
        ]);
    }
}