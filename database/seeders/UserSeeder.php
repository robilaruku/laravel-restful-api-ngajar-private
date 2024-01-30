<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $dataUsers = [
        //     [
        //         'name' => 'Admin',
        //         'email' => 'qBqKz@example.com',
        //         'password' => bcrypt('admin123')
        //     ],
        // ];

        // DB::table('users')->delete();
        // DB::table('users')->insert($dataUsers);

        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => bcrypt('password')
            ]);
        }
    }
}
