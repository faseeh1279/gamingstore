<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platform; 

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Platform::insert([
            ['name' => 'Windows', 'slug' => 'windows'],
            ['name' => 'Linux', 'slug' => 'linux'],
            ['name' => 'macOS', 'slug' => 'macos'],
        ]);
    }
}
