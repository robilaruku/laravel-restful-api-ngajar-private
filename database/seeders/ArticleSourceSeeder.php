<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;


class ArticleSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('article_sources')->insert([
        //     ['name' => 'Source 1', 'website' => 'https://source1.com'],
        //     ['name' => 'Source 2', 'website' => 'https://source2.com'],
        //     ['name' => 'Source 3', 'website' => 'https://source3.com'],
        //     ['name' => 'Source 4', 'website' => 'https://source4.com'],
        //     ['name' => 'Source 5', 'website' => 'https://source5.com'],
        // ]);

        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('article_sources')->insert([
                'name' => $faker->name,
                'website' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
