<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Web Application'
        ]);
        DB::table('categories')->insert([
            'name' => 'Android Application'
        ]);
        DB::table('categories')->insert([
            'name' => 'Web API'
        ]);
    }
}
