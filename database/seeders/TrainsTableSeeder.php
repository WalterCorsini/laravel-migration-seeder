<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create('it_IT');
        $train = new Train();
        $train->name = $faker->randomElement(['Freccia Gialla','Freccia Rossa','Freccia Argento','Trenitalia']);
        $train->number_of_carriage = $faker->numberBetween(1,10);
        $train->departure_station = $faker->city();
        $train->arrival_station = $faker->city();
        $train->departure_time = $faker->dateTimeBetween('-1 week','+1 week');
        $train->arrival_time = $faker->dateTimeBetween('+1 day','+1 week');
        $train->in_time = $faker->randomElement(['1','0']);
        $train->delete = $faker->randomElement(['1','0']);
        // dd($train);
        $train->save();
    }
}
