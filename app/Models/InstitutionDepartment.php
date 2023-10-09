<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionDepartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'department_slug',
        'department',
    ];
}
