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
        'avatar' => '/img/sww.JPG',
        'name' => $faker->firstNameFemale,
        'email' => $faker->unique()->safeEmail,
        'birth' => $faker->date($format = 'Y-m-d', $max = '-8070 days'),
        'surname' => $faker->lastName,
        'patronymic' => $faker->lastName,
        'tel' => $faker->biasedNumberBetween(1111111111, 99999999999),
        'skype' => str_random(10),
        'password' => $password ?: $password = 'secret',
        'remember_token' => str_random(10),
        'role_id' => $faker->biasedNumberBetween(1, 3),
        'sex_id' => $faker->biasedNumberBetween(1, 2),
        'height' => $faker->biasedNumberBetween(120, 210),
        'weight' => $faker->biasedNumberBetween(40, 80),
        'lang_skills' => str_random(5),
        'id_cart' => str_random(4),
        'visa' => $faker->randomElement(['Да', 'Нет']),
        'skype_conf' => $faker->randomElement([0, 1]),
        'in_base' => $faker->randomElement([0, 1]),
        'published' => $faker->randomElement([0, 1]),
        'education' => str_random(5),
        'experience' => str_random(15),
        'city' => $faker->city,
        'vs' => str_random(5),
        'company' => $faker->company,
        'payed_to' => 0,
    ];
});
