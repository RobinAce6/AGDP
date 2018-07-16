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
    return [
        
        'codPerson'      => $faker->randomDigitNotNull,
        'namePerson'     => $faker->name,
        'lastnamePerson' => $faker->lastName,
        'typePerson_id' => "1",
        'dependency_id' => "1",
        'email'	         => "maesbeí12@gmail.com",
        'password'       => bcrypt('codPerson'),
        'remember_token' => str_random(10),
    ];
});

/*$factory->define(App\Person::class, function (Faker $faker) {
    return [

        'nameP'	     => $faker->name,
        'surnameP'	 => $faker->lastName,
        'emailP'	 => $faker->unique()->companyEmail,       
        'typeP'		 => $faker->unique()->companyEmail,
        'remember_token' => str_random(10),
    ];
});*/
