<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Hospital;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $cities = City::factory()->count(50)->create();

      foreach ($cities as $city) {
        Hospital::factory()->count(rand(2, 3))->create(['city_id' => $city->id]);
      }
    }
}
