<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_career', function (Blueprint $table) {
            $table->id();
            $table->date('date_from')->comment('期間始まり');
            $table->date('date_to')->nullable()->comment('期間終わり');
            $table->string('content', 100)->comment('企業名');
            $table->string('occupation', 100)->nullable()->comment('職種');
            $table->bigInteger('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('profile');
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
        Schema::dropIfExists('profile_career');
    }
}
