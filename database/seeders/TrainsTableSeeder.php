<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// per usare faker:
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->start_station = $faker->city();
            $newTrain->end_station = $faker->city();
            $newTrain->train_departure = $faker->time();
            $newTrain->train_arrival = $faker->time();
            $newTrain->train_code = $faker->swiftBicNumber();
            $newTrain->n_wagon = $faker->randomNumber(2, true);
            $newTrain->in_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
