<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    $tag = $faker->unique()->word;

    return [
        'name' => $tag,
        'slug' => $tag,
    ];
});
