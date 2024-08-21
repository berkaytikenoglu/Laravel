<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tc_identity');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phonenumber')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('big_avatar')->default('https://t4.ftcdn.net/jpg/03/34/03/41/360_F_334034105_JGk5y6htQnTYBpu0TOr8zxlRVw2IV49e.jpg');
            $table->string('normal_avatar')->default('https://t4.ftcdn.net/jpg/03/34/03/41/360_F_334034105_JGk5y6htQnTYBpu0TOr8zxlRVw2IV49e.jpg');
            $table->string('min_avatar')->default('https://t4.ftcdn.net/jpg/03/34/03/41/360_F_334034105_JGk5y6htQnTYBpu0TOr8zxlRVw2IV49e.jpg');
            $table->string('permission')->nullable()->default('1');
            $table->string('gender')->nullable()->default('3');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
