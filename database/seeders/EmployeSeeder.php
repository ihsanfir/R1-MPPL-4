<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
            DB::table('employees')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'salary' => $faker->numberBetween(500000,50000000),
                'role' => $faker->jobTitle
            ]);
        }
    }
}
