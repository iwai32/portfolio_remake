<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class editSkillResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'profile_id' => $this->profile_id,
      'skill_icon_img' => $this->skill_icon_img,
      'upload_icon_img' => $this->upload_icon_img,
      'upload_file' => null,
      'skill_category_detail' => $this->skillCategoryDetail,
      'skill_category_comment' => $this->skillCategoryComment
    ];
  }
}
