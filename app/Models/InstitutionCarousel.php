<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionCarousel extends Model
{
    use HasFactory;

    protected $fillable = [
        'institution_first_carousel',
        'institution_second_carousel',
        'institution_third_carousel',
    ];
}
