<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_departments', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name')->nullable();
            $table->string('teacher_slug')->nullable();
            $table->string('department')->nullable();
            $table->text('department_slug')->nullable(); // Change the data type to text
            $table->string('department_role')->nullable();
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
        Schema::dropIfExists('teacher_departments');
    }
}
