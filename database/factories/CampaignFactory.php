<?php

use Faker\Generator as Faker;

$factory->define(App\Campaign::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'status' => $faker->numberBetween($min = 1, $max = 3),
        'user_id' => App\User::all()->random()->id
    ];
});
