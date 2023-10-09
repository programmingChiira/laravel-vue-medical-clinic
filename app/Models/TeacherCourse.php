<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'teacher_name',
        'teacher_slug',
        'course',
        'course_slug',
        'department',
        'department_slug',
        'class_stream',
    ];
}
