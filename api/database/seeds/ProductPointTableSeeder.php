<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductPointTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('product_points')->truncate();
      DB::table('product_points')->insert([
        [
          'point' => 'Scssのmixinを利用したブレイクポイントの設定',
          'product_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
        [
          'point' => 'お問い合わせフォームの作成',
          'product_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
        [
          'point' => 'flexboxでの制御',
          'product_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
        [
          'point' => 'Vue.jsとLaravelを使用したSPAでの作成',
          'product_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
        [
          'point' => 'アトミックデザインでのコンポーネント管理',
          'product_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
        [
          'point' => 'ランキング機能の実装',
          'product_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
        [
          'point' => 'モバイルファーストでの作成',
          'product_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
      ]);
    }
}
