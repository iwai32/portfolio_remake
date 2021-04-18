<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile\Profile;
use Faker\Generator as Faker;


$factory->define(Profile::class, function (Faker $faker) {
    return [
        'name' => $this->faker->name,
        'birth_day' => $this->faker->date('Y-m-d'),
        'one_thing' => $this->faker->randomLetter,
        'my_icon_img' => $this->faker->randomLetter,
        'created_at' => $this->faker->dateTime,
        'updated_at' => $this->faker->dateTime
    ];
});
