<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
                collegSeeder::class,
                roleSeeder::class,                
                topicSeeder::class,
                userSeeder::class,    
                workplaceSeeder::class, 
                group_examSeeder::class,
                directionSeeder::class,

            
        ]);
    }    

}
