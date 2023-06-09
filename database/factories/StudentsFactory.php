<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SchoolClass;
use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'school_class_id' => SchoolClass::all('id')->random(),
    ];
});