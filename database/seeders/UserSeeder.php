<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin IFISH',
            'email' => 'admin@ifish.id',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Ihsan Firdaus',
            'email' => 'ihsan@ifish.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');

        $hr = User::create([
            'name' => 'Hafizh Yusuf',
            'email' => 'hafizh@ifish.id',
            'password' => bcrypt('12345678'),
        ]);

        $hr->assignRole('hr');

        $eksekutif = User::create([
            'name' => 'Sabrina Diza M',
            'email' => 'bangdiz@ifish.id',
            'password' => bcrypt('12345678'),
        ]);

        $eksekutif->assignRole('eksekutif');
    }
}
