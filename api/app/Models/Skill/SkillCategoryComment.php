<?php

namespace App\Models\Skill;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkillCategoryComment extends Model
{
  use SoftDeletes;
  
  protected $table = 'skill_category_comments';
}
