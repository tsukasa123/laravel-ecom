<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'image' => 'uploads/products/sample.JPG',
        'description' => $faker->paragraph(4),
        'price' => $faker->numberBetween(100, 10000)
    ];
});
