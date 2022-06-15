<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [];

        $data[1] = ["name" => "Język angielski"];
        $data[2] = ["name" => "Język rosyjski"];
        $data[3] = ["name" => "Język niemiecki"];
        $data[4] = ["name" => "Język hiszpański"];
        $data[5] = ["name" => "Język francuski"];
        $data[6] = ["name" => "Matematyka"];
        $data[7] = ["name" => "Fizyka"];
        $data[8] = ["name" => "Biologia"];
        $data[9] = ["name" => "Chemia"];
        $data[10] = ["name" => "Język polski"];

        DB::table("subjects")->insert($data);
    }
}
