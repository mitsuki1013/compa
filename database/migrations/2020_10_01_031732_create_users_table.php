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
            $table->increments('id');
            $table->string('name')->comment('ニックネーム', 20);
            $table->string('email', 250)->unique();
            $table->string('profile_img')->nullable();
            $table->string('password');
            $table->string('pr_comment', 200)->nullable();
            $table->boolean('gender');
            $table->tinyInteger('age');
            $table->tinyInteger('location');
            $table->string('hobby', 50)->nullable();
            $table->string('job')->nullable();
            $table->tinyInteger('smoking');
            $table->tinyInteger('number_people');
            $table->tinyInteger('day');
            $table->tinyInteger('sake');
            $table->tinyInteger('tag_1')->nullable();
            $table->tinyInteger('tag_2')->nullable();
            $table->tinyInteger('tag_3')->nullable();
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
