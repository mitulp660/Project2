<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Carss;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Carss::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford' ,'honda', 'toyota']),
        'model' =>$faker->randomElement(['explorer' ,'civic', 'camry']),

        'year' => $faker->year,
    ];
});
