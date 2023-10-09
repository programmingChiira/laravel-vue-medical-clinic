<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionGeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'institution_logo',
        'institution_name',
        'institution_year_of_starting',
        'institution_email_one',
        'institution_email_two',
        'institution_phone_one',
        'institution_phone_two',
        'institution_county',
        'institution_address',
        'institution_pinned_location',
        'institution_type',
        'institution_mode',
        'institution_gender_distro',
        'institution_welcome_message',
        'institution_mission_and_vision',
    ];
}
