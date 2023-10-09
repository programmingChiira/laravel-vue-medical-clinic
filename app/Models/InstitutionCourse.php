<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'course',
        'department',
    ];
}
