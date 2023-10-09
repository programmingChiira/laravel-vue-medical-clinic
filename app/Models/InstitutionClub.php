<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionClub extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'club',
    ];
}
