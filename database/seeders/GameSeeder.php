<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Developer; 
use App\Models\Game; 
use App\Models\Publisher; 
use App\Models\Tag; 
use App\Models\Category; 
use App\Models\Platform; 
use App\Models\MinimumRequirement; 
use App\Models\RecommendedRequirement; 
use App\Models\Cpu; 
use App\Models\Gpu; 
use Illuminate\Support\Str; 

class GameSeeder extends Seeder
{
   /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [

            [
                'title' => 'Grand Theft Auto V',
                'release_date' => '2015-04-14',
                'official_website' => 'https://www.rockstargames.com/gta-v',
            ],

            [
                'title' => 'Red Dead Redemption 2',
                'release_date' => '2019-11-05',
                'official_website' => 'https://www.rockstargames.com/reddeadredemption2',
            ],

            [
                'title' => 'Cyberpunk 2077',
                'release_date' => '2020-12-10',
                'official_website' => 'https://www.cyberpunk.net',
            ],

            [
                'title' => 'The Witcher 3: Wild Hunt',
                'release_date' => '2015-05-19',
                'official_website' => 'https://www.thewitcher.com',
            ],

            [
                'title' => 'Minecraft',
                'release_date' => '2011-11-18',
                'official_website' => 'https://www.minecraft.net',
            ],

            [
                'title' => 'Valorant',
                'release_date' => '2020-06-02',
                'official_website' => 'https://playvalorant.com',
            ],

            [
                'title' => 'Counter-Strike 2',
                'release_date' => '2023-09-27',
                'official_website' => 'https://www.counter-strike.net',
            ],

            [
                'title' => 'Elden Ring',
                'release_date' => '2022-02-25',
                'official_website' => 'https://en.bandainamcoent.eu/elden-ring',
            ],

            [
                'title' => 'God of War',
                'release_date' => '2022-01-14',
                'official_website' => 'https://www.playstation.com/god-of-war/',
            ],

            [
                'title' => 'Forza Horizon 5',
                'release_date' => '2021-11-09',
                'official_website' => 'https://forza.net',
            ],

        ];

        $developers = Developer::pluck('id')->toArray();
        $publishers = Publisher::pluck('id')->toArray();
        $categories = Category::pluck('id')->toArray();
        $platforms = Platform::pluck('id')->toArray();
        $tags = Tag::pluck('id')->toArray();
        $cpus = Cpu::pluck('id')->toArray();
        $gpus = Gpu::pluck('id')->toArray();

        foreach ($games as $item) {

            $game = Game::updateOrCreate(

                [
                    'slug' => Str::slug($item['title']),
                ],

                [
                    'title' => $item['title'],
                    'developer_id' => $developers[array_rand($developers)],
                    'publisher_id' => $publishers[array_rand($publishers)],
                    'category_id' => $categories[array_rand($categories)],
                    'platform_id' => $platforms[array_rand($platforms)],
                    'release_date' => $item['release_date'],
                    'description' => fake()->paragraphs(3, true),
                    'official_website' => $item['official_website'],
                    'cover_image' => null,
                    'banner_image' => null,
                    'is_active' => true,
                ]

            );

            /*
            |--------------------------------------------------------------------------
            | Tags
            |--------------------------------------------------------------------------
            */

            $game->tags()->sync(

                collect($tags)
                    ->random(rand(3, 7))
                    ->values()
                    ->toArray()

            );

            /*
            |--------------------------------------------------------------------------
            | Minimum Requirements
            |--------------------------------------------------------------------------
            */

            MinimumRequirement::updateOrCreate(

                [
                    'game_id' => $game->id,
                ],

                [
                    'cpu_id' => $cpus[array_rand($cpus)],
                    'gpu_id' => $gpus[array_rand($gpus)],
                    'operating_system' => 'Windows 10 64-bit',
                    'ram' => rand(4, 8),
                    'storage' => rand(40, 80),
                    'directx_version' => '12',
                    'sound_card' => 'DirectX Compatible',
                    'additional_notes' => fake()->sentence(),
                ]

            );

            /*
            |--------------------------------------------------------------------------
            | Recommended Requirements
            |--------------------------------------------------------------------------
            */

            RecommendedRequirement::updateOrCreate(

                [
                    'game_id' => $game->id,
                ],

                [
                    'cpu_id' => $cpus[array_rand($cpus)],
                    'gpu_id' => $gpus[array_rand($gpus)],
                    'operating_system' => 'Windows 11 64-bit',
                    'ram' => rand(4, 8),
                    'storage' => rand(40, 80),
                    'directx_version' => '12',
                    'sound_card' => 'DirectX Compatible',
                    'additional_notes' => fake()->sentence(),
                ]

            );
        }
    }
}