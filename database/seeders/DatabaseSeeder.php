<?php

namespace Database\Seeders;

use App\Models\Job;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Test User',
            'last_name' => 'test@example.com',
            'email' => 'test@example.com',
            'password' => 'devOps123',
        ]);

        $this->call(JobSeeder::class);



    }
}
