<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Orcamento;
use Faker\Generator as Faker;
//use Faker\Provider\DateTime as Time;
use Illuminate\Support\Str;

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

$factory->define(Orcamento::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'vendedor' => $faker->name,
        'valor' => $faker->numberBetween(20,1000),
        'descricao' => $faker->text(50),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null),

    ];
});
