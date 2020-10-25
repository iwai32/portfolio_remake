<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;

class ProfilePr extends Model
{
  use SoftDeletes;
  
  protected $table = 'profile_prs';
}
