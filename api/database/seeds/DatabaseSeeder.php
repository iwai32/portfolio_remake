<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    $this->call([
      // UsersTableSeeder::class,
      ProfileTableSeeder::class,
      ProfileCareerTableSeeder::class,
      ProfilePrTableSeeder::class,
      ProfileSpecialHobbyTableSeeder::class,
      ProfileSpecialSkillTableSeeder::class,
      SkillCategoryTableSeeder::class,
      SkillCategoryDetailTableSeeder::class,
      SkillCategoryCommentTableSeeder::class,
      ProductTableSeeder::class,
      ProductDetailTableSeeder::class,
      ProductPointTableSeeder::class,
      NavCategoryTableSeeder::class,
    ]);

    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }
}
