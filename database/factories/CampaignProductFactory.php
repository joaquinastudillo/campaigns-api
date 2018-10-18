<?php

use Faker\Generator as Faker;

$factory->define(App\CampaignProduct::class, function (Faker $faker) {
    return [
        'campaign_id' => App\Campaign::all()->random()->id,
        'product_id' => App\Product::all()->random()->id,
        'description' => $faker->text
    ];
});
