<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IncomeSeeder extends Seeder
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
            DB::table('incomes')->insert([
                'id_product' => $i,
                'amount' => $faker->numberBetween(100000,10000000),
                'date' => $faker->dateTimeThisYear($max = 'now', $timezone = null)
            ]);
        }
    }
}
