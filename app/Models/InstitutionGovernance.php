<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionGovernance extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'first_name',
        'middle_name',
        'last_name',
        'phone_no',
        'email',
    ];
}