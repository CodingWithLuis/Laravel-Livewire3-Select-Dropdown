<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                'name' => 'Monterrey',
                'country_id' => 1
            ],
            [
                'name' => 'Bogota',
                'country_id' => 2
            ]
        ];

        City::query()->insert($cities);
    }
}
