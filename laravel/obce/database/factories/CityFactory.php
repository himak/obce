<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'mayor' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber,
        'email' => $faker->email,
        'web' => $faker->domainName,
        'image' => $faker->imageUrl($width = 100, $height = 100),
        'gps' => $faker->randomFloat($nbMaxDecimals = null, $min = 0, $max = 50),
    ];
});
