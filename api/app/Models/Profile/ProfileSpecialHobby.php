<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileSpecialHobby extends Model
{
  use SoftDeletes;
  protected $table = 'profile_special_hobbies';
  protected $fillable = [
    'content',
    'profile_id'
  ];
}
