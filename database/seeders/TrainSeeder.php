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
            $train->company = $faker->words(3, true);
            $train->departure_station = $faker->words(2, true);
            $train->arrival_station = $faker->words(2, true);
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->train_code = $faker->bothify('??###');
            $train->no_carriages = $faker->numberBetween(1,15);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}
