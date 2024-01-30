<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;


class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('articles')->insert([
        //     [
        //         'category_id' => 1,
        //         'source_id' => 1,
        //         'title' => 'Article 1',
        //         'content' => 'Content of Article 1',
        //         'reference' => 'https://example.com/article1',
        //         'status' => 'published',
        //     ],
        //     [
        //         'category_id' => 2,
        //         'source_id' => 2,
        //         'title' => 'Article 2',
        //         'content' => 'Content of Article 2',
        //         'reference' => 'https://example.com/article2',
        //         'status' => 'published',
        //     ],
        //     [
        //         'category_id' => 3,
        //         'source_id' => 3,
        //         'title' => 'Article 3',
        //         'content' => 'Content of Article 3',
        //         'reference' => 'https://example.com/article3',
        //         'status' => 'published',
        //     ],
        //     [
        //         'category_id' => 4,
        //         'source_id' => 4,
        //         'title' => 'Article 4',
        //         'content' => 'Content of Article 4',
        //         'reference' => 'https://example.com/article4',
        //         'status' => 'published',
        //     ],
        //     [
        //         'category_id' => 5,
        //         'source_id' => 5,
        //         'title' => 'Article 5',
        //         'content' => 'Content of Article 5',
        //         'reference' => 'https://example.com/article5',
        //         'status' => 'published',
        //     ],
        // ]);

        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('articles')->insert([
                'category_id' => $faker->numberBetween(1, 10),
                'source_id' => $faker->numberBetween(1, 10),
                'title' => $faker->sentence,
                'content' => $faker->text,
                'reference' => $faker->url,
                'status' => $faker->randomElement(['draft', 'published']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
