<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag; 
use Illuminate\Support\Str; 

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [

            // Game Modes
            'Single Player',
            'Multiplayer',
            'Online Multiplayer',
            'Local Multiplayer',
            'Co-op',
            'Online Co-op',
            'Split Screen',
            'PvP',
            'PvE',
            'Cross Platform',
            'Cross Save',

            // Gameplay
            'Open World',
            'Sandbox',
            'Story Rich',
            'Exploration',
            'Survival',
            'Crafting',
            'Building',
            'Stealth',
            'Parkour',
            'Puzzle',
            'Choices Matter',
            'Physics',
            'Procedural Generation',
            'Roguelike',
            'Roguelite',
            'Permadeath',

            // Combat
            'Action',
            'Hack and Slash',
            'Souls-like',
            'Turn-Based',
            'Real-Time Strategy',
            'Tactical',
            'Tower Defense',
            'Bullet Hell',

            // Perspective
            'First Person',
            'Third Person',
            'Top Down',
            'Side Scroller',
            'Isometric',

            // Theme
            'Fantasy',
            'Sci-Fi',
            'Cyberpunk',
            'Post-Apocalyptic',
            'Historical',
            'Military',
            'Crime',
            'Zombie',
            'Horror',
            'Space',
            'Medieval',
            'Anime',

            // Features
            'Controller Support',
            'Steam Achievements',
            'Steam Cloud',
            'Mod Support',
            'VR',
            'Ray Tracing',
            'DLSS',
            'FSR',

            // Audience
            'Family Friendly',
            'Casual',
            'Competitive',
            'Indie',
            'Early Access',

        ];

        foreach ($tags as $tag) {

            Tag::firstOrCreate(

                [
                    'slug' => Str::slug($tag),
                ],

                [
                    'name' => $tag,
                ]

            );

        }
    }
}