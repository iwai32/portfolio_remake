<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SkillCategoryCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('skill_category_comments')->truncate();
      DB::table('skill_category_comments')->insert([
        [
          'comment' => '主にEmmetを使ってコーディングしています。',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => 'Scssの簡単なことならできます。',
          'category_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => '最近はアウトプット少なめですが、便利なプラグインが多くUI作成時にありがたく使わせてもらってます。',
          'category_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => 'VuexやVueRouterなどを実際に一から記述することでNuxtの習得がとても捗りました。',
          'category_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => '実務ではNuxtを使っていました。Vuex、VueRouter、axiosなどが標準で導入されていて開発がとてもスムーズです。',
          'category_id' => 5,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => '基本的なセキュリティ対策への理解と、CRUD処理が書けます。',
          'category_id' => 6,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => '日々アウトプットしており、基本的な処理は書けます。DDDにも興味があり、リポジトリパターンについても学習しています。',
          'category_id' => 7,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => '大体の見たいレコードは即座にもってこれます。',
          'category_id' => 8,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => 'タスクの設定や導入方法を学習しました。',
          'category_id' => 9,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => '実務での使用頻度としては、CLI、SourceTree共に半々ぐらいです。',
          'category_id' => 10,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => 'dockerfileをいじったりは経験ないですが、docker-composeを用いてコンテナの立ち上げができます。',
          'category_id' => 11,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => 'フィルターやレイヤー効果、レイヤーマスクなどの基本操作を学習しました。',
          'category_id' => 12,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'comment' => 'アピアランス機能や,オブジェクトの編集、合成などの基本操作を学習しました。',
          'category_id' => 13,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
      ]);
    }
}
