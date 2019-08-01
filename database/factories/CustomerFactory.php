<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'company_id'=>factory(\App\Company::class)->create(),
        'name'=>$faker->name,
        'age'=>30,
        'email'=>$faker->email,
        'active'=>1,
    ];
});
