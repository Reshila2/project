<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Data::class, function (Faker $faker) {
    return [
        'name_of_person'=>$faker->text(40),
        'email'=>$faker->text(30)
    ];
});
