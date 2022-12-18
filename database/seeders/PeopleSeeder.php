<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\People;


class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1 ; $i <= 50 ; $i++){
            People::create([
                'first_name' => $faker->firstName,
                'last_name'  => $faker->lastName,
                'number'  => $faker->phoneNumber,
                'street'   => $faker->streetAddress,
                'city' => $faker->city,
                'mail' => $faker->email,
            ]);
        }
    }
}
