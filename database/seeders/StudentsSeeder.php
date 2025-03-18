<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;



class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public $timestamps= false;
    public function run(): void
    {

        //Faker gives the generic data
        $faker = Faker::create();
        DB::table('students')->insert([
            [
                'name' => $faker->name, // Generates realistic names
                'email' => $faker->unique()->safeEmail,
                'batch' => $faker->randomNumber(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => $faker->name, // Generates realistic names
                'email' => $faker->unique()->safeEmail,
                'batch' => $faker->randomNumber(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);


        // //With the Str class
        // DB::table('students')->insert([
        //     'name'=> Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'batch' => 1,
        //     'created_at' => Carbon::now(), // Set current timestamp
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
