<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class collegSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('colleges')->insert([
            'name' => Str::random(10),
            'adress' => Str::random(10),
            'oib' => Str::random(11),
        ]);
    }
}
