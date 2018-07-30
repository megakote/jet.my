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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'surname' => $faker->name,
        'patronymic' => $faker->name,
        'tel' => $faker->rand(1111111111, 99999999999),
        'skype' => $faker->str_random(10),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'role_id' => rand(1, 2),
        'sex_id' => rand(0, 2),
    ];
});
