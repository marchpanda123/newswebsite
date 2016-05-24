<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory;

use App\User;
use App\Tag;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faker = Factory::create();

        User::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'author',
            'password' => bcrypt('author'),
            'is_admin' => false,
        ]);


        for ($i = 1; $i <= 10; $i++) {
            Tag::create([
                'name' => 'Topic' . $i,
                'show_index' => $i != 1 ? true : false,
            ]);
        }

        for ($i = 1; $i <= 100; $i++) {
            Article::create([
                'user_id' => 2,
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'is_carousel' => false,
                'intro' => $faker->sentence($nbWords = 10, $variableNbWords = true),
                'page_image' => $faker->imageUrl($width = 720, $height = 405),
                'content' => $faker->text,
                'published_at' => Carbon\Carbon::now(),
                'is_checked' => $faker->numberBetween($min = 0, $max = 1),
                'is_draft' => $faker->numberBetween($min = 0, $max = 1),
            ]);
        }

        for ($i = 1; $i <= 100; $i++) {
            $pivots[] = [
                'article_id' => $i,
                'tag_id' => $faker->numberBetween($min = 1, $max = 10)
            ];
        }

        DB::table('article_tag')->insert($pivots);

        Model::reguard();
    }
}
