<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'number' => $faker->phoneNumber(),
        'active' => $faker->randomElement([0,1]),
    ];
});
