<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherDepartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'teacher_name',
        'teacher_slug',
        'department',
        'department_slug',
        'department_role',
    ];
}
