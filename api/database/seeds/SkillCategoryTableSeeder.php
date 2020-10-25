<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SkillCategoryTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('skill_categories')->truncate();
    DB::table('skill_categories')->insert([
      [
        'name' => 'HTML',
        'profile_id' => 1,
        'skill_icon_img' => 'html-5.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'CSS',
        'profile_id' => 1,
        'skill_icon_img' => 'css-3.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'jQuery',
        'profile_id' => 1,
        'skill_icon_img' => 'jquery.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'Vue',
        'profile_id' => 1,
        'skill_icon_img' => 'vue.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'Nuxt',
        'profile_id' => 1,
        'skill_icon_img' => 'nuxt.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'php',
        'profile_id' => 1,
        'skill_icon_img' => 'php.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'Laravel',
        'profile_id' => 1,
        'skill_icon_img' => 'laravel.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'MySQL',
        'profile_id' => 1,
        'skill_icon_img' => 'mysql.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'gulp',
        'profile_id' => 1,
        'skill_icon_img' => 'gulp.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'git',
        'profile_id' => 1,
        'skill_icon_img' => 'git.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'Docker',
        'profile_id' => 1,
        'skill_icon_img' => 'docker.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'PS',
        'profile_id' => 1,
        'skill_icon_img' => 'ps.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'Ai',
        'profile_id' => 1,
        'skill_icon_img' => 'ai.svg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
    ]);
  }
}
