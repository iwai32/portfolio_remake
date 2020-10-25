<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfileCareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile_career')->truncate();
        DB::table('profile_career')->insert([
          [
            'date_from' => Carbon::create(2020,3,10),
            'date_to' => null,
            'content' => '株式会社ARS',
            'occupation' => 'システムエンジニア',
            'profile_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'date_from' => Carbon::create(2019,7),
            'date_to' => Carbon::create(2019,11),
            'content' => '(Web制作会社)株式会社Gizumo 契約社員',
            'occupation' => 'サーバーサイドエンジニア',
            'profile_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'date_from' => Carbon::create(2019,1),
            'date_to' => Carbon::create(2019,4),
            'content' => '(Web制作会社)株式会社ワンゴジュウゴ インターンシップ',
            'occupation' => 'HTML,CSSコーダー',
            'profile_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'date_from' => Carbon::create(2018,9),
            'date_to' => Carbon::create(2019,3),
            'content' => '(職業訓練校)フェリカテクニカルアカデミーWebサイト制作科 修了',
            'occupation' => '職業訓練生',
            'profile_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
        ]);
    }
}
