<?php

namespace App\Models\Skill;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkillCategory extends Model
{
  use SoftDeletes;
  protected $table = 'skill_categories';

  /**
   * relations
   */
  public function skillCategoryDetail()
  {
    return $this->hasMany(SkillCategoryDetail::class, 'category_id');
  }

  /**
   * relations
   */
  public function skillCategoryComment()
  {
    return $this->hasOne(SkillCategoryComment::class, 'category_id');
  }
}
