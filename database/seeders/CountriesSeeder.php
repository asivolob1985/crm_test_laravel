<?php

namespace Database\Seeders;

use App\Models\Country;
use Domain\TeritorialHierarchy\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name' => 'Россия', 'code' => '+7'],
            ['name' => 'Белоруссия', 'code' => '+3'],
            ['name' => 'Киргизия', 'code' => '+9'],
            ['name' => 'Уганда', 'code' => '+2'],
            ['name' => 'Буркина-Фасо', 'code' => '+226'],
        ];

        foreach ($countries as $key => $value) {
            Country::query()->create($value);
        }
    }
}
