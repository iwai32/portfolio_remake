<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->truncate();
      DB::table('products')->insert([
        [
          'name' => 'PVSクリーニング',
          'profile_id' => 1,
          'picture1' => 'kozin01.png',
          'picture2' => 'pvs-cleaning.png',
          'product_url' => 'https://pvs-cleaning.com/',
          'repository_url' => null,
          'about' => "実際に使用されるクリーニングサイトを制作。デザイナーのカンプを元にコーディングを行った。\n調べながらで時間がかかってしまったが、学べることも多く貴重な経験であった。",
          'create_date' => '2019-07-01',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
        [
          'name' => 'RpgRanker',
          'profile_id' => 1,
          'picture1' => 'kozin02.png',
          'picture2' => 'rpg-ranker.png',
          'product_url' => 'http://rpg-ranker.herokuapp.com/',
          'repository_url' => 'https://github.com/iwai32/RpgRanker',
          'about' => "Vue.jsとLaravelを使って何か作れないかなと思い、好きなゲームを作りました。\n
          好きなキャラクターを選択し、モンスターを倒すゲームです。\n
          シンプルな作りになっている分、出現するモンスターや与えるダメージをランダムにしたり、ランキング機能をつけることで他のユーザー方とのちょっとした競争などを楽しめる飽きさせない作りを意識して制作しました。",
          'create_date' => '2020-11-04',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
      ]);
    }
}
