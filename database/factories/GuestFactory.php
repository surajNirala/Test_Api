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

$factory->define(App\Model\Guest::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        /*'user_id' => function(){

        	return App\User::all()->random();
        },*/
        'lead_name' => $faker->name,
        'address' => $faker->address,
        'telephone' => ('98'.rand(10000000,90000000)),
        'email' => $faker->unique()->safeEmail,
        'children' => $faker->randomDigit,
        'adult' => $faker->randomDigit,
        'car_registration' => $faker->numberBetween($min = 10000000, $max = 90000000),
        'note' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
