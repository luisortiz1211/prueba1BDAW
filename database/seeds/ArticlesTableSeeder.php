<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // se vacia la tabla
        Article::truncate();
        $faker = \Faker\Factory::create();
        // generando articulos ficticios
        for($i = 0;$i < 50; $i++){
            Article::create(
                [
                    'title'=>$faker->sentence,
                    'body'=>$faker->paragraph
                ]
            );
        }
    }
}
