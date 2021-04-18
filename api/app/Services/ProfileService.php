<?php

namespace App\Services;

use App\Repositories\Contracts\ProfileRepository;
use App\Models\Profile\Profile;
use App\Models\Profile\ProfilePr;
use App\Models\Profile\ProfileCareer;
use App\Models\Profile\ProfileSpecialHobby;
use App\Models\Profile\ProfileSpecialSkill;

class ProfileService
{
  private $profileRepository;
  private $profile;
  private $pr;
  private $career;
  private $specialHobby;
  private $specialSkill;

  public function __construct(
    Profile $profile,
    ProfilePr $pr,
    ProfileCareer $career,
    ProfileSpecialHobby $specialHobby,
    ProfileSpecialSkill $specialSkill,
    ProfileRepository $profileRepository
  ) {
    $this->profile = $profile;
    $this->pr = $pr;
    $this->career = $career;
    $this->specialHobby = $specialHobby;
    $this->specialSkill = $specialSkill;
    $this->profileRepository = $profileRepository;
  }

  public function getMyProfile(): object
  {
    return $this->profileRepository->getMyProfile();
  }

  /**
   * プロフィールに関連するデータを上書きする
   */
  public function overWriteYourProfile(array $inputs)
  {
    $myProfile = $this->getMyProfile();

    //input ... リクエスト内容
    //original ... 更新前の元々あるデータ
    //model ... Eloquent
    $diffData = [
      'pr' => [
        'input' => $inputs['profile_pr'],
        'original' => $myProfile->profilePr,
        'model' => $this->pr
      ],
      'spSkill' => [
        'input' => $inputs['special_skill'],
        'original' => $myProfile->specialSkill,
        'model' => $this->specialSkill
      ],
      'spHobby' => [
        'input' => $inputs['special_hobby'],
        'original' => $myProfile->specialHobby,
        'model' => $this->specialHobby
      ],
      'prCareer' => [
        'input' => $inputs['profile_career'],
        'original' => $myProfile->profileCareer,
        'model' => $this->career
      ],
    ];

    $this->profileRepository->updateMyProfile($inputs);

    foreach ($diffData as $data) {
      //差分を削除
      $this->profileRepository->deleteDiff($data);
      $this->profileRepository->updateOrCreateData($data);
    }
  }
}
