<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobListingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_listings')->insert([
            [
                'title' => 'Laravel Developer',
                'salary' => '50000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Wordpress Developer',
                'salary' => '40000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Software Developer',
                'salary' => '50000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Software Engineer',
                'salary' => '60000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
