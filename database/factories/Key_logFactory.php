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

$factory->define(App\Model\Key_log::class, function (Faker $faker) {
    return [
            /*'user_id' => function()
       						 {
       						 	return App\User::all()->random();
        					 },
        	'guest_id' => function()
        					 {
        					 	return App\Model\Guest::all()->random();
        					 },*/				 
        	'park' => $faker->streetAddress,
        	'plot_number' => $faker->buildingNumber,
        	'type' => $faker->Name,				 
    ];
});
