<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ExpanseSeeder extends Seeder
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
            DB::table('expanses')->insert([
                'id_product' => $i,
                'amount' => $faker->numberBetween(1,10),
                'date' => $faker->dateTimeThisYear($max = 'now', $timezone = null)
            ]);
        }
    }
}
