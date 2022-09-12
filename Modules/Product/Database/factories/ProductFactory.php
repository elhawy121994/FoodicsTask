<?php

namespace Modules\Product\Database\factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Modules\Product\Entities\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
    ];
});
