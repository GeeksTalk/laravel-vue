<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'title' => $faker->company(),
        'post' => $faker->paragraph(3, true),
    ];
});
