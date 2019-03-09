<?php

use App\Author;
use Illuminate\Database\Seeder;

class authors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        Author::truncate();

        foreach (range(1, 20) as $index) {
            Author::create(
                [
                    'name' => $faker->name,
                    'email' => $faker->unique()->safeEmail,
                    'github' => $faker->sentence(2),
                    'twitter' => $faker->sentence(1),
                    'location' => $faker->address,
                    'latest_article_published' => $faker->dateTime
                ]
            );
        }

    }
}
