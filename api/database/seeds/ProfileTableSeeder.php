<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('profile')->truncate();
      DB::table('profile')->insert([
        'name' => '岩井康平',
        'birth_day' => Carbon::create(1997,3,2),
        'one_thing' => '好きな食べ物はステーキです！'
      ]);
    }
}
