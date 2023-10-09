<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionExtracurricular extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'extracurricular',
    ];
}
