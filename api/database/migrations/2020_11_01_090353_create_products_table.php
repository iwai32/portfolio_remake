<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->string('name')->comment('プロダクト名');
      $table->bigInteger('profile_id')->unsigned();
      $table->foreign('profile_id')->references('id')->on('profiles');
      $table->string('picture1', 255)->nullable()->default('no_product.img')->comment('プロダクト画像1');
      $table->string('picture2', 255)->nullable()->default('no_product.img')->comment('プロダクト画像2');
      $table->string('product_url', 255)->nullable()->comment('プロダクトURL');
      $table->string('repository_url', 255)->nullable()->comment('リポジトリURL');
      $table->text('about')->nullable()->comment('プロダクト詳細');
      $table->dateTime('create_date')->comment('プロダクト作成日');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('products');
  }
}
