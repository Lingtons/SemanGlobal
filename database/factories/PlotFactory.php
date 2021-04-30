<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Models\Plot::class, function (Faker $faker) {

    return [
        'block' => Str::random(2),
        'plot_number' => Str::random(2).''.mt_rand(1, 10),
        'capacity' => mt_rand(500, 1000).'SQMs',
    ];
});
