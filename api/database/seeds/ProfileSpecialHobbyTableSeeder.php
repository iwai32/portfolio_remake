<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSpecialHobbyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('profile_special_hobby')->truncate();
      DB::table('profile_special_hobby')->insert([
        [
          'content' => '映画鑑賞',
          'profile_id' => 1
        ],
        [
          'content' => 'スマブラ',
          'profile_id' => 1
        ],
        [
          'content' => 'アニメ',
          'profile_id' => 1
        ],
        [
          'content' => '筋トレ',
          'profile_id' => 1
        ],
      ]);
    }
}
