<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Curriculum;
use App\Lecture;
use App\SchoolClass;
use Faker\Generator as Faker;

$factory->define(Curriculum::class, function (Faker $faker) {
    static $order = 1;
    return [
        'school_class_id' => SchoolClass::all('id')->random(),
        'lecture_id' => factory(Lecture::class),
        'order' => $order++,
    ];
});