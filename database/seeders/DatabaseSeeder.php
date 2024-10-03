<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $name = $faker->name();
            $message = $faker->sentence (20);
            $email = $faker->email();
            $phone_number = $faker->phoneNumber();
            User::create([
                'name' => $name,
                'message' => $message,
                'email' => $email,
                'phone_number' => $phone_number,
            ]);
        }
    }
}
