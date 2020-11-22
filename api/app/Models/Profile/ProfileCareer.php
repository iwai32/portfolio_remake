<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileCareer extends Model
{
  use SoftDeletes;
  protected $table = 'profile_careers';
  protected $fillable = [
    'date_from',
    'date_to',
    'content',
    'occupation',
    'profile_id'
  ];
}