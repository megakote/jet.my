<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('email')->unique();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->integer('tel')->nullable();
            $table->string('skype')->nullable();
            $table->date('birth')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('lang_skills')->nullable();
            $table->string('id_cart')->nullable();
            $table->string('visa')->nullable();
            $table->boolean('in_base')->default(false);
            $table->boolean('skype_conf')->default(false);
            $table->string('education')->nullable();
            $table->string('experience')->nullable();
            $table->string('city')->nullable();
            $table->string('vs')->nullable();
            $table->string('company')->nullable();
            $table->integer('role_id')->nullable();
            $table->integer('sex_id')->default(0);
            $table->dateTime('payed_to')->nullable();
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
