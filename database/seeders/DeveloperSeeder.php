<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Developer; 
use Illuminate\Support\Str; 

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $developers = [

            [
                'name' => 'Rockstar Games',
                'description' => 'Developer behind Grand Theft Auto and Red Dead Redemption.',
                'website' => 'https://www.rockstargames.com',
                'is_active' => true,
            ],

            [
                'name' => 'Ubisoft Montreal',
                'description' => 'Creator of Assassin\'s Creed, Far Cry, and Watch Dogs.',
                'website' => 'https://www.ubisoft.com',
                'is_active' => true,
            ],

            [
                'name' => 'CD Projekt Red',
                'description' => 'Developer of The Witcher series and Cyberpunk 2077.',
                'website' => 'https://www.cdprojektred.com',
                'is_active' => true,
            ],

            [
                'name' => 'Naughty Dog',
                'description' => 'Known for The Last of Us and Uncharted.',
                'website' => 'https://www.naughtydog.com',
                'is_active' => true,
            ],

            [
                'name' => 'Santa Monica Studio',
                'description' => 'Developer of the God of War franchise.',
                'website' => 'https://sms.playstation.com',
                'is_active' => true,
            ],

            [
                'name' => 'FromSoftware',
                'description' => 'Creator of Dark Souls, Bloodborne, and Elden Ring.',
                'website' => 'https://www.fromsoftware.jp',
                'is_active' => true,
            ],

            [
                'name' => 'Respawn Entertainment',
                'description' => 'Developer of Apex Legends and Titanfall.',
                'website' => 'https://www.respawn.com',
                'is_active' => true,
            ],

            [
                'name' => 'Insomniac Games',
                'description' => 'Developer of Marvel\'s Spider-Man and Ratchet & Clank.',
                'website' => 'https://insomniac.games',
                'is_active' => true,
            ],

            [
                'name' => 'Valve',
                'description' => 'Developer of Half-Life, Portal, Dota 2, and Counter-Strike.',
                'website' => 'https://www.valvesoftware.com',
                'is_active' => true,
            ],

            [
                'name' => 'id Software',
                'description' => 'Developer of DOOM, Quake, and Rage.',
                'website' => 'https://www.idsoftware.com',
                'is_active' => true,
            ],

        ];

        foreach ($developers as $developer) {

            Developer::updateOrCreate(

                ['name' => $developer['name']],

                [
                    'slug' => Str::slug($developer['name']),
                    'description' => $developer['description'],
                    'website' => $developer['website'],
                    // 'founded_year' => $developer['founded_year'],
                    'logo' => null,
                    'is_active' => $developer['is_active'],
                ]

            );

        }
    }
}