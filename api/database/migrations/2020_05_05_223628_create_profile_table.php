<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->comment('名前');
            $table->date('birth_day', 100)->nullable()->comment('誕生日');
            $table->string('one_thing', 100)->nullable()->comment('一言');
            $table->string('my_icon_img', 255)->nullable()->comment('アイコン画像');
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
        Schema::dropIfExists('profile');
    }
}
