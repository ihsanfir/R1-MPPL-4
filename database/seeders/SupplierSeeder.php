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
            DB::table('suplier')->insert([
                'name' => $faker->name,
                'no_hp' => $faker->e164PhoneNumber,
                'email' => $faker->email
            ]);
        }
    }
}
