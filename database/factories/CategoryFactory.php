<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PHP', 'JAVA', 'HTML', 'CSS', 'JAVASCRIPT', 'SQL', 'ANDROID', 'SWIFT']),
        'description' => $faker->sentence
    ];
});
