<?php

use Illuminate\Database\Seeder;
use App\ArticleCategory;

class ArticleCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ArticleCategory::class, 100)->create();
    }
}
