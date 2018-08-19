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

$factory->define(App\Models\Course::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->text(15),
        'duration' => '2 недели, 80 ак.ч.',
        'date' => $faker->date($format = 'Y-m-d', $max = '+70 days'),
        'description' => $faker->text(50),
        'content' => $faker->text(350),
        'price' => $faker->numberBetween(1000, 5000),
        'category_id' => $faker->numberBetween(1, 3),
        'type' => $faker->numberBetween(0, 2),
    ];
});
