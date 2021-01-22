<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class group_examSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_exams')->insert([
        
            'id' => Str::random(10),
        
        ]);
    }
}
