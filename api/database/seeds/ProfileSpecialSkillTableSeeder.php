<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSpecialSkillTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('profile_special_skill')->truncate();
    DB::table('profile_special_skill')->insert([
      'content' => 'サッカー,ポジション(MF)',
      'profile_id' => 1
    ]);
  }
}
