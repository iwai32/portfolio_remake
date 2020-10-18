<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfilePrTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('profile_pr')->truncate();
    DB::table('profile_pr')->insert([
      [
        'content' => '自分が得意なこと、好きなことを仕事にしたいと思い職業適正検査を行い,Webコーダーやプログラマーに向いてると知り、職業訓練校を受講。',
        'profile_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'content' => '職業訓練では、分からないことがあっても講師に聞かずにできるだけ自分で解決することをモットーに授業を受けていました。',
        'profile_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'content' => 'インターンシップでは、仲間とコミュニケーションを取り、意見交換をしながら同じ目標に向かって制作を進めていました。',
        'profile_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'content' => 'インターンシップや日々の学習でフロントの経験を積んでいくなかでWebの裏側に興味を持ち、PHPとSQLの学習後、バックエンドの研修をメインに行っていた株式会社Gizumoに入社しました。',
        'profile_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'content' => '作業時は常に効率や可読性を考え、新しく学んだことは積極的に取り入れるようにしています。',
        'profile_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
    ]);
  }
}
