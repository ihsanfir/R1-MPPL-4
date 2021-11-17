<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
            DB::table('suppliers')->insert([
                'name' => $faker->company,
                'no_hp' => $faker->e164PhoneNumber,
                'email' => $faker->email
            ]);
        }
    }
}
