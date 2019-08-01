<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'phone'=>"07705487965",
        'user_id'=>factory(\App\User::class)->create(),
    ];
});
