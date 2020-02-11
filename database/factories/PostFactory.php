<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->sentence(5),
        'slug' => $faker->slug(),
        'content' => $faker->sentence(50),
        'status' => $faker->randomElement(['draft', 'published']),
        'user_id' => factory(User::class),
    ];
});
