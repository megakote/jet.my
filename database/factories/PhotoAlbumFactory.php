<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\PhotoAlbum::class, function (Faker $faker) {

    return [
        'cover_image' => 'http://bizavnews.ru/images/images_full/Jet-Service_team.jpg',
        'images' => "[\"images\/uploads\/910acd38dcfc8a0fe191d2f795f2a5e9.png\",\"images\/uploads\/7390110dec19db8b70150666b96bbcae.png\"]",
        'on_main' => $faker->biasedNumberBetween(0, 1),
        'description' => $faker->text(100),
        'title' => $faker->unique()->text(10)
    ];
});
