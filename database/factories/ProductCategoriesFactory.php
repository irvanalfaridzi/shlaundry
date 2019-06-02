<?php

use Faker\Generator as Faker;
use App\Models\ProductCategory;

$factory->define(ProductCategory::class, function (Faker $faker) {
    return [
        'name' => $faker-> word(),
    ];
});
