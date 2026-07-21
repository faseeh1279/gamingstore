<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gpu; 

class GpuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $gpus = [

            [
                'manufacturer' => 'NVIDIA',
                'model' => 'GeForce GTX 1050 Ti',
                'vram' => 4,
                'score' => 7500,
                'release_year' => 2016,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'NVIDIA',
                'model' => 'GeForce GTX 1060',
                'vram' => 6,
                'score' => 9800,
                'release_year' => 2016,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'NVIDIA',
                'model' => 'GeForce GTX 1660 Super',
                'vram' => 6,
                'score' => 12700,
                'release_year' => 2019,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'NVIDIA',
                'model' => 'GeForce RTX 2060',
                'vram' => 6,
                'score' => 14500,
                'release_year' => 2019,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'NVIDIA',
                'model' => 'GeForce RTX 3060',
                'vram' => 12,
                'score' => 17000,
                'release_year' => 2021,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'NVIDIA',
                'model' => 'GeForce RTX 3070',
                'vram' => 8,
                'score' => 21800,
                'release_year' => 2020,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'NVIDIA',
                'model' => 'GeForce RTX 4070',
                'vram' => 12,
                'score' => 26600,
                'release_year' => 2023,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'NVIDIA',
                'model' => 'GeForce RTX 4090',
                'vram' => 24,
                'score' => 39000,
                'release_year' => 2022,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Radeon RX 570',
                'vram' => 4,
                'score' => 7600,
                'release_year' => 2017,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Radeon RX 580',
                'vram' => 8,
                'score' => 9300,
                'release_year' => 2017,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Radeon RX 5600 XT',
                'vram' => 6,
                'score' => 14000,
                'release_year' => 2020,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Radeon RX 6600',
                'vram' => 8,
                'score' => 16700,
                'release_year' => 2021,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Radeon RX 6700 XT',
                'vram' => 12,
                'score' => 21400,
                'release_year' => 2021,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Radeon RX 7900 XTX',
                'vram' => 24,
                'score' => 34500,
                'release_year' => 2022,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'Intel',
                'model' => 'Arc A380',
                'vram' => 6,
                'score' => 9200,
                'release_year' => 2022,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'Intel',
                'model' => 'Arc A750',
                'vram' => 8,
                'score' => 17200,
                'release_year' => 2022,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'Intel',
                'model' => 'Arc A770',
                'vram' => 16,
                'score' => 19000,
                'release_year' => 2022,
                'is_active' => true,
            ],

        ];

        foreach ($gpus as $gpu) {

            Gpu::updateOrCreate(

                [
                    'model' => $gpu['model'],
                ],

                $gpu

            );

        }
    }
}