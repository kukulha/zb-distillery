<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
	$title = $faker->sentence(4);
    return [
    	'user_id' => rand(1,5),
    	'category_id' => rand(1,5),
        'name' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->realText(144),
        'body' => $faker->realText(2500),
        'status' => $faker->randomElement(['PUBLISHED', 'DRAFT']),
        'file' => $faker->imageUrl($width = 1600, $height = 800),
    ];
});
