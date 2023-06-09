<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SchoolClass;
use Faker\Generator as Faker;

$factory->define(SchoolClass::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
    ];
});