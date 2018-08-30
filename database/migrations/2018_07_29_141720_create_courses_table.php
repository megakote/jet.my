<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('type');
            $table->string('name');
            $table->string('duration')->nullable();
            $table->string('slug');
            $table->date('date')->nullable();
            $table->text('content');
            $table->text('description');
            $table->integer('price');
            $table->integer('order')->default(50);
            $table->boolean('on_main')->default(false);
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
        Schema::dropIfExists('courses');
    }
}
