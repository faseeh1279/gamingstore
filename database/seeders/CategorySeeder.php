<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; 
use Illuminate\Support\Str; 

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $categories = [

            [
                'name' => 'Action',
                'icon' => 'bi-lightning-charge-fill',
                'description' => 'Fast-paced combat and action-oriented games.',
            ],

            [
                'name' => 'Adventure',
                'icon' => 'bi-compass-fill',
                'description' => 'Explore worlds, solve puzzles, and uncover stories.',
            ],

            [
                'name' => 'Role Playing',
                'icon' => 'bi-shield-fill',
                'description' => 'Develop characters, complete quests, and level up.',
            ],

            [
                'name' => 'First Person Shooter',
                'icon' => 'bi-crosshair',
                'description' => 'Shooter games played from the first-person perspective.',
            ],

            [
                'name' => 'Third Person Shooter',
                'icon' => 'bi-bullseye',
                'description' => 'Combat games with an over-the-shoulder camera.',
            ],

            [
                'name' => 'Racing',
                'icon' => 'bi-car-front-fill',
                'description' => 'High-speed driving and racing competitions.',
            ],

            [
                'name' => 'Sports',
                'icon' => 'bi-trophy-fill',
                'description' => 'Sports simulation and competitive athletic games.',
            ],

            [
                'name' => 'Simulation',
                'icon' => 'bi-cpu-fill',
                'description' => 'Realistic life, business, and vehicle simulators.',
            ],

            [
                'name' => 'Strategy',
                'icon' => 'bi-diagram-3-fill',
                'description' => 'Games requiring planning, tactics, and resource management.',
            ],

            [
                'name' => 'Survival',
                'icon' => 'bi-fire',
                'description' => 'Gather resources and survive harsh environments.',
            ],

            [
                'name' => 'Horror',
                'icon' => 'bi-emoji-dizzy-fill',
                'description' => 'Scary games focused on fear and suspense.',
            ],

            [
                'name' => 'Puzzle',
                'icon' => 'bi-puzzle-fill',
                'description' => 'Solve puzzles and logic-based challenges.',
            ],

            [
                'name' => 'Open World',
                'icon' => 'bi-globe-americas',
                'description' => 'Large explorable worlds with player freedom.',
            ],

            [
                'name' => 'Sandbox',
                'icon' => 'bi-box-fill',
                'description' => 'Creative gameplay with minimal restrictions.',
            ],

            [
                'name' => 'MMORPG',
                'icon' => 'bi-people-fill',
                'description' => 'Massively multiplayer online role-playing games.',
            ],

            [
                'name' => 'Battle Royale',
                'icon' => 'bi-award-fill',
                'description' => 'Large-scale survival competition with one winner.',
            ],

            [
                'name' => 'Fighting',
                'icon' => 'bi-hand-index-thumb-fill',
                'description' => 'One-on-one competitive fighting games.',
            ],

            [
                'name' => 'Stealth',
                'icon' => 'bi-eye-slash-fill',
                'description' => 'Avoid detection and complete objectives secretly.',
            ],

            [
                'name' => 'Indie',
                'icon' => 'bi-stars',
                'description' => 'Games developed by independent studios.',
            ],

            [
                'name' => 'Casual',
                'icon' => 'bi-controller',
                'description' => 'Easy-to-play games suitable for all audiences.',
            ],

        ];

        foreach ($categories as $category) {

            Category::updateOrCreate(
            [
                'slug' => Str::slug($category['name']),
            ],
            [
                'name' => $category['name'],
                'icon' => $category['icon'],
                'description' => $category['description'],
                'is_active' => true,
            ]
        );

        }
    }
}