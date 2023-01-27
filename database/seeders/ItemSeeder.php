<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Factory as Faker;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 100; $i++) {
            $faker = Faker::create();
            $item = new Item;
            $item->name = $faker->name;

            $item->email = $faker->email;

            $item->password = $faker->password;
            $item->confirm_password = $item->password;
            $item->country = $faker->country;
            $item->state = $faker->state;
            $item->address = "Venice Villa";
            $item->gender = "Male";
            $item->dob = $faker->date;

            $item->save();
        }
    }
}
