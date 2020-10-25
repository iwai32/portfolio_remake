<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfileSpecialSkillTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('profile_special_skills')->truncate();
    DB::table('profile_special_skills')->insert([
      'content' => 'サッカー',
      'profile_id' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
  }
}
