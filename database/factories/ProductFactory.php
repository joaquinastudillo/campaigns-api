<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'brand' => $faker->word,
        'description' => $faker->text
    ];
});
