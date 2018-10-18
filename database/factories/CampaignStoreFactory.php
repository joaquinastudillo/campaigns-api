<?php

use Faker\Generator as Faker;

$factory->define(App\CampaignStore::class, function (Faker $faker) {
    return [
        'campaign_id' => App\Campaign::all()->random()->id,
        'store_id' => App\Store::all()->random()->id,
        'description' => $faker->text
    ];
});
