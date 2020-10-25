<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;

class ProfileSpecialHobby extends Model
{
  use SoftDeletes;
  
  protected $table = 'profile_special_hobbies';
}
