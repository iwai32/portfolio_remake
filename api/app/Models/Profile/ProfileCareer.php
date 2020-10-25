<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileCareer extends Model
{
  use SoftDeletes;

  protected $table = 'profile_careers';
}
