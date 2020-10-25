<?php

namespace App\Models\Skill;

use Illuminate\Database\Eloquent\Model;

class SkillCategoryDetail extends Model
{
  use SoftDeletes;
  
  protected $table = 'skll_category_details';
}
