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

$factory->define(App\Models\UserPhoto::class, function (Faker $faker) {

    return [
        'src' => 'https://jet-service.org/cache/W2500901525943352_e42b3f54a6f5440da34af0f5c9f0ea23.jpeg',
        'user_id' => $faker->biasedNumberBetween(1, 50)
    ];
});
