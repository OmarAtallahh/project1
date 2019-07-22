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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
    // return [
    //     'first_name' => $faker->name,
    //     'last_name' => $faker->name,
    //     'password' => str_random(10),
    //     'email' => $faker->unique()->safeEmail,
    //     'job_id' => num_random(2),
    //     'country_id' => num_random(2),
    //     'phone_number' => num_random(11),
    //     'hospital_name' => str_random(10),
    // ];
});
