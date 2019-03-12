<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
	$title = $faker->word(6);
    return [
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(144),
    ];
});
