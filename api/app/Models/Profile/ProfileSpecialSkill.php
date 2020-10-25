<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;

class ProfileSpecialSkill extends Model
{
  use SoftDeletes;
  
  protected $table = 'profile_special_skills';
}
