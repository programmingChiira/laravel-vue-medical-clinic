<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'class',
    ];
}
