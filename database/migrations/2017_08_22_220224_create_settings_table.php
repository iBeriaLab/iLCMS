<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     * title', 'meta', 'description', 'color', 'user_id', 'language', 'facebook_api_key', 'facebook_api_secret'
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('meta');
            $table->string('description');
            $table->string('user_id');
            $table->string('language');
            $table->string('facebook_api_key');
            $table->string('facebook_api_secret');
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
        Schema::dropIfExists('settings');
    }
}
