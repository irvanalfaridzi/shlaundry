<?php

use Faker\Generator as Faker;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductUnit;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'code'=> 'SC-#'.$faker-> unixTime(),
        'name'=> $faker-> word(),
        'unit_id'=> $faker->randomElement(ProductUnit::pluck('id')->toArray()),
        'category_id' => $faker->randomElement(ProductCategory::pluck('id')->toArray()),
        'price' => $faker ->randomElement([10000,20000,45000,2000]),
        'stock' => $faker-> randomElement([2,3,12,8]),
    ];
});
