<?php

namespace App\Models\Skill;

use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
  use SoftDeletes;
  
  protected $table = 'skill_categories';
}
