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

$factory->define(App\Photo::class, function (Faker $faker) {

    return [
        'image' => 'http://bizavnews.ru/images/images_full/Jet-Service_team.jpg',
        'album_photo_id' => rand(1, 10),
        'description' => $faker->text(100)
    ];
});
