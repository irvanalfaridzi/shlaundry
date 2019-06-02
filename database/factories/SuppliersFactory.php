<?php

use Faker\Generator as Faker;
use App\Models\Supplier;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'code' => 'SUPP-#'.$faker-> unixTime(),
        'firstname' => $faker-> firstName(),
        'lastname' => $faker-> lastName(),
        'company' => $faker-> company(),
        'phone' => $faker-> phoneNumber(),
        'email' => $faker-> companyEmail(),
        'country' => $faker-> country(),
        'city' => $faker-> city(),
        'postalcode' => $faker-> postcode(),
        'address' => $faker-> address(),
        'note' => $faker-> text($maxNbChars = 200),
    ];
});
