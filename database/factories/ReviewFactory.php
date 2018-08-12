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

$factory->define(App\Models\Review::class, function (Faker $faker) {
    return [
        'stars' => $faker->numberBetween(1, 5),
        'name' => $faker->unique()->text(15),
        'position' => $faker->unique()->company(),
        'text' => $faker->text(150),
        'photo' => '/img/instruction-img.jpg',
        'user_id' =>  $faker->numberBetween(1, 50),
    ];
});