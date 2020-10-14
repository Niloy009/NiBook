<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PostFiles;
use Faker\Generator as Faker;

$factory->define(PostFiles::class, function (Faker $faker) {
    return [
        'post_id' => \App\Models\Post::all()->random()->id,
        'files' => 'https://picsum.photos/200/300',
    ];
});
