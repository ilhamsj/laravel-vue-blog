<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'     => $faker->realText($maxNbChars = 100, $indexSize = 1),
        'content'   => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
