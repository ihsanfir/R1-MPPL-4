<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
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
            DB::table('products')->insert([
                'name' => $faker->name,
                'price' => $faker->numberBetween(100000,10000000),
                'stock' => $faker->numberBetween(1,500),
                'id_supplier' => $faker-> numberBetween(1,10),
                'id_category' => $faker -> numberBetween(1,3)
            ]);
        }

    }
}
