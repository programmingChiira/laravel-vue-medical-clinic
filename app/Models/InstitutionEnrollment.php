<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionEnrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'institution_logo',
        'institution_name',
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
        'year_of_enrollment',
        'month_of_enrollment',
        'day_of_enrollment',
        'enrollment_requirment_1',
        'enrollment_requirment_2',
        'enrollment_requirment_3',
        'enrollment_requirment_4',
        'enrollment_requirment_5',
        'enrollment_requirment_6',
        'enrollment_requirment_7',
        'enrollment_requirment_8',
        'enrollment_requirment_9',
        'enrollment_requirment_10',
        'enrollment_requirment_11',
        'enrollment_requirment_12',
        'enrollment_requirment_13',
        'enrollment_requirment_14',
        'enrollment_requirment_15',
        'enrollment_requirment_16',
        'enrollment_requirment_17',
        'enrollment_requirment_18',
        'enrollment_requirment_19',
        'enrollment_requirment_20',
    ];
}
