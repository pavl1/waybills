<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Employer::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'middle_name' => $faker->middleNameMale,
        'last_name' => $faker->lastName,
        'position_id' => $faker->numberBetween($min = 1, $max = 4),
        'options' => array('license' => $faker->randomNumber(9)),
    ];
});

$factory->define(App\Organization::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address,
        'type_id' => $faker->numberBetween($min = 1, $max = 2),
    ];
});

$factory->define(App\Auto::class, function (Faker\Generator $faker) {
    return [
        'model' => $faker->randomElement( array('Toyota', 'Honda', 'BMW', 'Lada', 'Higer') ),
        'numberplate' => $faker->bothify('?###??'),
        'type_id' =>$faker->numberBetween($min = 1, $max = 3),
    ];
});
