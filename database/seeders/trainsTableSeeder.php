<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 20; $i++) {
            $newTrain = new Train();

            $newTrain->agency = $faker->word();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->code = $faker->ean13();
            $newTrain->wagons = $faker->numberBetween(3, 15);
            $newTrain->on_time = $faker->boolean();
            $newTrain->canceled = $faker->boolean();

            $newTrain->save();
        }
    }
}
