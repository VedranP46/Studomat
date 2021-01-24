<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* unos admina */
        User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);

        /* unos random usera */
        $numberOfUsers = env('SEED_USER_COUNT', 1000);
        User::factory()
            ->count($numberOfUsers)
            ->create();
        
        $users = User::all();
        
        

    }
}
