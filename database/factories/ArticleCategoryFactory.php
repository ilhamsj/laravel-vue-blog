<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticleCategory;
use Faker\Generator as Faker;

$factory->define(ArticleCategory::class, function (Faker $faker) {
    return [
        'article_id'    => $faker->randomNumber(1),
        'categories_id' => $faker->randomNumber(1),
    ];
});
