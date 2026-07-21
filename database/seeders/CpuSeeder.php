<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cpu; 

class CpuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cpus = [

            [
                'manufacturer' => 'Intel',
                'model' => 'Core i3-10100',
                'cores' => 4,
                'threads' => 8,
                'base_clock' => 3.6,
                'boost_clock' => 4.3,
                'score' => 8900,
                'release_year' => 2020,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'Intel',
                'model' => 'Core i5-10400F',
                'cores' => 6,
                'threads' => 12,
                'base_clock' => 2.9,
                'boost_clock' => 4.3,
                'score' => 12400,
                'release_year' => 2020,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'Intel',
                'model' => 'Core i5-12400F',
                'cores' => 6,
                'threads' => 12,
                'base_clock' => 2.5,
                'boost_clock' => 4.4,
                'score' => 19500,
                'release_year' => 2022,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'Intel',
                'model' => 'Core i7-12700K',
                'cores' => 12,
                'threads' => 20,
                'base_clock' => 3.6,
                'boost_clock' => 5.0,
                'score' => 34700,
                'release_year' => 2021,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'Intel',
                'model' => 'Core i9-13900K',
                'cores' => 24,
                'threads' => 32,
                'base_clock' => 3.0,
                'boost_clock' => 5.8,
                'score' => 58900,
                'release_year' => 2022,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Ryzen 3 3100',
                'cores' => 4,
                'threads' => 8,
                'base_clock' => 3.6,
                'boost_clock' => 3.9,
                'score' => 9800,
                'release_year' => 2020,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Ryzen 5 3600',
                'cores' => 6,
                'threads' => 12,
                'base_clock' => 3.6,
                'boost_clock' => 4.2,
                'score' => 17800,
                'release_year' => 2019,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Ryzen 5 5600X',
                'cores' => 6,
                'threads' => 12,
                'base_clock' => 3.7,
                'boost_clock' => 4.6,
                'score' => 22100,
                'release_year' => 2020,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Ryzen 7 5800X',
                'cores' => 8,
                'threads' => 16,
                'base_clock' => 3.8,
                'boost_clock' => 4.7,
                'score' => 28200,
                'release_year' => 2020,
                'is_active' => true,
            ],

            [
                'manufacturer' => 'AMD',
                'model' => 'Ryzen 9 7950X',
                'cores' => 16,
                'threads' => 32,
                'base_clock' => 4.5,
                'boost_clock' => 5.7,
                'score' => 63500,
                'release_year' => 2022,
                'is_active' => true,
            ],

        ];

        foreach ($cpus as $cpu) {

            Cpu::updateOrCreate(

                [
                    'model' => $cpu['model'],
                ],

                $cpu

            );

        }
    }
}