<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher; 

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $publishers = [

            [
                'name' => 'Rockstar Games',
                'website' => 'https://www.rockstargames.com',
                'description' => 'Publisher of the Grand Theft Auto and Red Dead Redemption series.',
                'is_active' => true,
            ],

            [
                'name' => 'Electronic Arts',
                'website' => 'https://www.ea.com',
                'description' => 'Global publisher of sports and action games.',
                'is_active' => true,
            ],

            [
                'name' => 'Ubisoft',
                'website' => 'https://www.ubisoft.com',
                'description' => 'Publisher behind Assassin\'s Creed, Far Cry and Rainbow Six.',
                'is_active' => true,
            ],

            [
                'name' => 'Activision',
                'website' => 'https://www.activision.com',
                'description' => 'Publisher of Call of Duty and other popular franchises.',
                'is_active' => true,
            ],

            [
                'name' => 'Bethesda Softworks',
                'website' => 'https://bethesda.net',
                'description' => 'Publisher of The Elder Scrolls, Fallout and DOOM.',
                'is_active' => true,
            ],

            [
                'name' => 'Square Enix',
                'website' => 'https://www.square-enix-games.com',
                'description' => 'Publisher of Final Fantasy, Dragon Quest and Kingdom Hearts.',
                'is_active' => true,
            ],

            [
                'name' => 'Bandai Namco Entertainment',
                'website' => 'https://www.bandainamcoent.com',
                'description' => 'Publisher of Tekken, Elden Ring and Dark Souls.',
                'is_active' => true,
            ],

            [
                'name' => 'Capcom',
                'website' => 'https://www.capcom.com',
                'description' => 'Publisher of Resident Evil, Street Fighter and Monster Hunter.',
                'is_active' => true,
            ],

            [
                'name' => 'Sega',
                'website' => 'https://www.sega.com',
                'description' => 'Publisher of Sonic the Hedgehog and Like a Dragon.',
                'is_active' => true,
            ],

            [
                'name' => 'Warner Bros. Games',
                'website' => 'https://www.wbgames.com',
                'description' => 'Publisher of Hogwarts Legacy, Mortal Kombat and LEGO games.',
                'is_active' => true,
            ],

            [
                'name' => 'Take-Two Interactive',
                'website' => 'https://www.take2games.com',
                'description' => 'Parent publisher of Rockstar Games and 2K.',
                'is_active' => true,
            ],

            [
                'name' => '2K Games',
                'website' => 'https://2k.com',
                'description' => 'Publisher of NBA 2K, Borderlands and Civilization.',
                'is_active' => true,
            ],

            [
                'name' => 'Sony Interactive Entertainment',
                'website' => 'https://www.playstation.com',
                'description' => 'Publisher of PlayStation exclusive titles.',
                'is_active' => true,
            ],

            [
                'name' => 'Xbox Game Studios',
                'website' => 'https://www.xbox.com',
                'description' => 'Microsoft\'s first-party game publishing division.',
                'is_active' => true,
            ],

            [
                'name' => 'Nintendo',
                'website' => 'https://www.nintendo.com',
                'description' => 'Publisher of Mario, Zelda and Pokémon games.',
                'is_active' => true,
            ],

        ];

        foreach ($publishers as $publisher) {

            Publisher::create($publisher);

        }
    }
}