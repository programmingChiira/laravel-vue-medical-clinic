<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_courses', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name')->nullable();
            $table->string('teacher_slug')->nullable();
            $table->text('course')->nullable();
            $table->text('course_slug')->nullable();
            $table->text('department')->nullable();
            $table->text('department_slug')->nullable();
            $table->text('class_stream')->nullable();
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
        Schema::dropIfExists('teacher_courses');
    }
}
