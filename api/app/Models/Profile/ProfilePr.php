<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProfilePr extends Model
{
  use SoftDeletes;
  protected $table = 'profile_prs';
  protected $fillable = [
    'content',
    'profile_id'
  ];
}
