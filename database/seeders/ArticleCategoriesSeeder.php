<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;


class ArticleCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('article_categories')->insert([
        //     ['name' => 'Technology'],
        //     ['name' => 'Science'],
        //     ['name' => 'Health'],
        //     ['name' => 'Business'],
        //     ['name' => 'Sports']
        // ]);

        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('article_categories')->insert([
                'name' => $faker->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
