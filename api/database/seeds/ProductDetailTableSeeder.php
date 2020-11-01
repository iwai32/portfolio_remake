<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('product_details')->truncate();
      DB::table('product_details')->insert([
        [
          'definition' => '制作時間',
          'detail' => '58時間',
          'product_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
        [
          'definition' => 'ブレイクポイント',
          'detail' => '767px',
          'product_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
        [
          'definition' => '制作時間',
          'detail' => '360時間',
          'product_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
        [
          'definition' => 'ブレイクポイント',
          'detail' => '768px,1025px',
          'product_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ],
      ]);
    }
}
