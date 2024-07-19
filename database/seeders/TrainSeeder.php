<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 50; $i++) {
            $train = new Train();
            $train->company = $faker->sentence(3);
            $train->departure_station = $faker->words(2, true);
            $train->arrival_station = $faker->words(2, true);
            $train->date = $faker->date();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->bothify('??###');
            $train->no_carriages = $faker->numberBetween(1,15);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
        }
    }
}
