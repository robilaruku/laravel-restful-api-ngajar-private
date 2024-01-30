<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('comments')->insert([
        //     [
        //         'article_id' => 1,
        //         'user_id' => 1,
        //         'comment' => 'Comment on Article 1',
        //         'status' => 'published',
        //     ],
        //     [
        //         'article_id' => 2,
        //         'user_id' => 1,
        //         'comment' => 'Comment on Article 2',
        //         'status' => 'published',
        //     ],
        //     [
        //         'article_id' => 3,
        //         'user_id' => 1,
        //         'comment' => 'Comment on Article 3',
        //         'status' => 'published',
        //     ],
        //     [
        //         'article_id' => 4,
        //         'user_id' => 1,
        //         'comment' => 'Comment on Article 4',
        //         'status' => 'published',
        //     ],
        //     [
        //         'article_id' => 5,
        //         'user_id' => 1,
        //         'comment' => 'Comment on Article 5',
        //         'status' => 'published',
        //     ],
        // ]);

        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('comments')->insert([
                'article_id' => $faker->numberBetween(1, 10),
                'user_id' => $faker->numberBetween(1, 10),
                'comment' => $faker->paragraph,
                'status' => $faker->randomElement(['draft', 'published']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
