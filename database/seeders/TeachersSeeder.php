<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();
        $data = [];
        for ($i = 0; $i < 30; $i++) {
            $data[] = ["name" => $faker->name, "email_adress" => $faker->email, "phone_number" => $faker->PhoneNumber, "experience" => $faker->text, "education" => $faker->text, "subject_id" => $faker->numberBetween(1, 10)];
        }
        DB::table("teachers")->insert($data);
    }
}
