<?php

namespace App\Repositories\Eloquent;

use App\Models\Profile\Profile;
use App\Repositories\Contracts\ProfileRepository;

class ProfileRepositoryEloquent implements ProfileRepository
{

  public function model()
  {
    return new Profile();
  }

  /**
   * @return object
   */
  public function getMyProfile(): object
  {
    $myProfile = $this->model()->find(config('const.MY_PROFILE_ID'))
      ->load('profilePr', 'specialSkill', 'specialHobby', 'profileCareer');

    return $myProfile;
  }

  /**
  * @params bool
  */
  public function updateMyProfile(array $inputs):bool
  {
    return $this->model()->find(config('const.MY_PROFILE_ID'))->update($inputs);
  }

  public function deleteDiff(array $diffData)
  {
    foreach ($diffData['original'] as $original) {
      $diffIds = null;
      //inputのidを格納
      $diffIds = array_column($diffData['input'], 'id');

      if (!in_array($original->id, $diffIds)) {
        //更新前データがなかったら削除
        $original->delete();
      }
    }
  }

  public function updateOrCreateData(array $diffData)
  {
    foreach ($diffData['input'] as $input) {
      $input['profile_id'] = config('const.MY_PROFILE_ID');
      $diffData['model']->updateOrCreate(
        ['id' => isset($input['id']) ? $input['id'] : 0],
        $input
      );
    }
  }
}
