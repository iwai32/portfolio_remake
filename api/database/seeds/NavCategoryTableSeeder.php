<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('nav_categories')->truncate();
      DB::table('nav_categories')->insert([
        [
          'name' => 'Profile',
          'link' => '/profile',
          'is_admin' => 0,
          'is_external_link' => 0
        ],
        [
          'name' => 'Skill',
          'link' => '/skill',
          'is_admin' => 0,
          'is_external_link' => 0
        ],
        [
          'name' => 'Works',
          'link' => '/works',
          'is_admin' => 0,
          'is_external_link' => 0
        ],
        [
          'name' => 'Github',
          'link' => 'https://github.com/iwai32?tab=repositories',
          'is_admin' => 0,
          'is_external_link' => 1
        ],
        [
          'name' => 'Profile',
          'link' => '/admin/edit-profile"',
          'is_admin' => 1,
          'is_external_link' => 0
        ],
        [
          'name' => 'Skill',
          'link' => '/admin/edit-skills',
          'is_admin' => 1,
          'is_external_link' => 0
        ],
        [
          'name' => 'Works',
          'link' => '/admin/edit-works',
          'is_admin' => 1,
          'is_external_link' => 0
        ]
      ]);
    }
}
