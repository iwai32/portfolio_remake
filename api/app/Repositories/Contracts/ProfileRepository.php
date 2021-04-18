<?php

namespace App\Repositories\Contracts;

interface ProfileRepository
{
  public function getMyProfile():object;

  public function updateMyProfile(array $inputs):bool;

  /**
   * 元々DBに保存されているデータのidとリクエストで送られてきたidを比較し、差分を削除する
   *
   * @param array $diffData
   */
  public function deleteDiff(array $diffData);

  /**
   * 更新か削除をする
   *
   * @param array $diffData
   */
  public function updateOrCreateData(array $diffData);

}