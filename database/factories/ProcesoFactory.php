<?php

use Faker\Generator as Faker;

$factory->define(App\Proceso::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'avg_time' => $faker->randomFloat(1,1,100) // 48.8932
    ];
});
