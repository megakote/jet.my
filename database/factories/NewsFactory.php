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

$factory->define(App\Models\News::class, function (Faker $faker) {

    return [
        'image_cover' => 'http://bizavnews.ru/images/images_full/Jet-Service_team.jpg',
        'title' => $faker->unique()->text(40),
        'description' => $faker->text(100),
        'body' => $faker->text
    ];
});
