<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => Str::random(5) . '' . Str::random(5),
                'password' => hash::make('password'),   
                'email' => Str::random(10) . '@gmail.com',
                'last_online' => Carbon::yesterday(),


            ]
        ]);
    }    
}
