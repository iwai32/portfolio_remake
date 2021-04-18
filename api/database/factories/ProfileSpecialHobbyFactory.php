<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile\ProfileSpecialHobby;
use Faker\Generator as Faker;

$factory->define(ProfileSpecialHobby::class, function (Faker $faker) {
  static $number = 1;
  
    return [    
      'content' => $this->faker->randomLetter,
      'profile_id' => $number++,
      'deleted_at' => null,
      'created_at' => $this->faker->dateTime,
      'updated_at' => $this->faker->dateTime
    ];
});
