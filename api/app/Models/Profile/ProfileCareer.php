<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;

class ProfileCareer extends Model
{
  use SoftDeletes;

  protected $table = 'profile_careers';
}
