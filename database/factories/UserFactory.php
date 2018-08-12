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
        'name' => $faker->firstNameFemale,
        'email' => $faker->unique()->safeEmail,
        'birth' => $faker->date($format = 'Y-m-d', $max = '-15070 days'),
        'surname' => $faker->lastName,
        'patronymic' => $faker->lastName,
        'tel' => $faker->biasedNumberBetween(1111111111, 99999999999),
        'skype' => str_random(10),
        'password' => $password ?: $password = 'secret',
        'remember_token' => str_random(10),
        'role_id' => $faker->biasedNumberBetween(1, 2),
        'sex_id' => $faker->biasedNumberBetween(1, 2),
    ];
});
