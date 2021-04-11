<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile\Profile;
use App\Models\Profile\ProfilePr;
use App\Models\Profile\ProfileCareer;
use App\Models\Profile\ProfileSpecialHobby;
use App\Models\Profile\ProfileSpecialSkill;
use App\Http\Resources\profileResource;
use App\Exceptions\APIException;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
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
    ProfileSpecialSkill $specialSkill
  ) {
    $this->profile = $profile;
    $this->pr = $pr;
    $this->career = $career;
    $this->specialHobby = $specialHobby;
    $this->specialSkill = $specialSkill;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return profileResource::make(
      $this->profile->find(config('const.MY_PROFILE_ID'))
        ->load('profilePr', 'specialSkill', 'specialHobby', 'profileCareer')
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    DB::beginTransaction();
    try {
      $profileData = $this->profile
        ->find(config('const.MY_PROFILE_ID'))
        ->load('profilePr', 'specialSkill', 'specialHobby', 'profileCareer');

      $inputs = $request->all();

      $diffData = [
        'pr' => [
          'input' => $inputs['profile_pr'],
          'original' => $profileData->profilePr,
          'model' => $this->pr
        ],
        'spSkill' => [
          'input' => $inputs['special_skill'],
          'original' => $profileData->specialSkill,
          'model' => $this->specialSkill
        ],
        'spHobby' => [
          'input' => $inputs['special_hobby'],
          'original' => $profileData->specialHobby,
          'model' => $this->specialHobby
        ],
        'prCareer' => [
          'input' => $inputs['profile_career'],
          'original' => $profileData->profileCareer,
          'model' => $this->career
        ],
      ];

      $this->profile->find(config('const.MY_PROFILE_ID'))->update($inputs);

      foreach ($diffData as $data) {
        //差分を削除
        $this->deleteDiff($data);
        $this->updateOrCreateData($data);
      }
      DB::commit();
    } catch (\Throwable $e) {
      DB::rollBack();
      throw new APIException;
    }
  }

  /**
   * 元々DBに保存されているデータのidとリクエストで送られてきたidを比較し、差分を削除する
   *
   * @param array $target
   * @return void
   */
  public function deleteDiff(array $target): void
  {
    foreach ($target['original'] as $original) {
      $diffIds = null;
      //inputのidを格納
      $diffIds = array_column($target['input'], 'id');

      if (!in_array($original->id, $diffIds)) {
        //更新前データがなかったら削除
        $original->delete();
      }
    }
  }

  /**
   * 更新か削除をする
   *
   * @param array $target
   * @return void
   */
  public function updateOrCreateData(array $target): void
  {
    foreach ($target['input'] as $input) {
      $input['profile_id'] = config('const.MY_PROFILE_ID');
      $target['model']->updateOrCreate(
        ['id' => isset($input['id']) ? $input['id'] : 0],
        $input
      );
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
