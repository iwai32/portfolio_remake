<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile\ProfileCareer;
use Faker\Generator as Faker;

$factory->define(ProfileCareer::class, function (Faker $faker) {
  static $number = 1;
    return [

      'date_from' => $this->faker->date('Y-m-d'),
      'date_to' => $this->faker->date('Y-m-d'),
      'content' => $this->faker->randomLetter,
      'occupation' => $this->faker->randomLetter,
      'profile_id' => $number,
      'deleted_at' => null,
      'created_at' => $this->faker->dateTime,
      'updated_at' => $this->faker->dateTime
    ];
});
