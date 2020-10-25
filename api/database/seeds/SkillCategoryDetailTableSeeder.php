<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SkillCategoryDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('skill_category_details')->truncate();
      DB::table('skill_category_details')->insert([
        [
          'message' => 'Emmetの省略記法',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'BEMによる命名規則',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'Scssを使ったコーディング',
          'category_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'Bootstrap',
          'category_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'ajaxによる非同期通信',
          'category_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'フォームのバリデーション',
          'category_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'モーダル、アコーディオンなどの各UIの作成',
          'category_id' => 3,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'Vuex、VueRouterを使用したSPAの構築',
          'category_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'axiosでの非同期通信',
          'category_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'アトミックデザインでのコンポーネント管理',
          'category_id' => 4,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'JWT認証',
          'category_id' => 5,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        
        [
          'message' => 'ログイン、ログアウト機能',
          'category_id' => 6,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'CRUD処理',
          'category_id' => 6,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'XSS,CSRF,SQLインジェクションなどのセキュリティへの理解',
          'category_id' => 6,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'タスクスケジュールの実装',
          'category_id' => 7,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'メール送信、PDF出力',
          'category_id' => 7,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'chatworkなどの外部api連携',
          'category_id' => 7,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'message' => '基本的な4大命令',
          'category_id' => 8,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'テーブルの結合',
          'category_id' => 8,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'インデックスの作成',
          'category_id' => 8,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],

        [
          'message' => 'scssの圧縮',
          'category_id' => 9,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'CLIでのバージョン管理',
          'category_id' => 10,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'sourcetreeでのバージョン管理',
          'category_id' => 10,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'Laradockでのコンテナの立ち上げ',
          'category_id' => 11,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'バナーの制作',
          'category_id' => 12,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'カンプの制作',
          'category_id' => 12,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'ロゴ画像の制作',
          'category_id' => 13,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'message' => 'カンプの制作',
          'category_id' => 13,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
      ]);
    }
}
