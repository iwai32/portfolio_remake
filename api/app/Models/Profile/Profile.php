<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $table = 'profiles';
  protected $fillable = [
    'name',
    'birth_day',
    'one_thing',
    'my_icon_img'
  ];

  /**
   * relations
   */
  public function profilePr()
  {
    return $this->hasMany(ProfilePr::class, 'profile_id');
  }

  public function specialSkill()
  {
    return $this->hasMany(ProfileSpecialSkill::class, 'profile_id');
  }

  public function specialHobby()
  {
    return $this->hasMany(ProfileSpecialHobby::class, 'profile_id');
  }

  public function profileCareer()
  {
    return $this->hasMany(ProfileCareer::class, 'profile_id');
  }
}
