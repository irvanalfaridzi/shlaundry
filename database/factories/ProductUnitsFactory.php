<?php

use Faker\Generator as Faker;
use App\Models\ProductUnit;

$factory->define(ProductUnit::class, function (Faker $faker) {
    return [
        'name' => $faker-> word(),
    ];
});
