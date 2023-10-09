<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstitutionEnrollmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'institution_logo' => $this->institution_logo,
            'institution_name' => $this->institution_name,
            'institution_email_one' => $this->institution_email_one,
            'institution_email_two' => $this->institution_email_two,
            'institution_phone_one' => $this->institution_phone_one,
            'institution_phone_two' => $this->institution_phone_two,
            'institution_county' => $this->institution_county,
            'institution_address' => $this->institution_address,
            'institution_pinned_location' => $this->institution_pinned_location,
            'institution_type' => $this->institution_type,
            'institution_mode' => $this->institution_mode,
            'institution_gender_distro' => $this->institution_gender_distro,
            'institution_welcome_message' => $this->institution_welcome_message,
            'institution_mission_and_vision' => $this->institution_mission_and_vision,
            'year_of_enrollment' => $this->year_of_enrollment,
            'month_of_enrollment' => $this->month_of_enrollment,
            'day_of_enrollment' => $this->day_of_enrollment,
            'enrollment_requirment_1' => $this->enrollment_requirment_1,
            'enrollment_requirment_2' => $this->enrollment_requirment_2,
            'enrollment_requirment_3' => $this->enrollment_requirment_3,
            'enrollment_requirment_4' => $this->enrollment_requirment_4,
            'enrollment_requirment_5' => $this->enrollment_requirment_5,
            'enrollment_requirment_6' => $this->enrollment_requirment_6,
            'enrollment_requirment_7' => $this->enrollment_requirment_7,
            'enrollment_requirment_8' => $this->enrollment_requirment_8,
            'enrollment_requirment_9' => $this->enrollment_requirment_9,
            'enrollment_requirment_10' => $this->enrollment_requirment_10,
            'enrollment_requirment_11' => $this->enrollment_requirment_11,
            'enrollment_requirment_12' => $this->enrollment_requirment_12,
            'enrollment_requirment_13' => $this->enrollment_requirment_13,
            'enrollment_requirment_14' => $this->enrollment_requirment_14,
            'enrollment_requirment_15' => $this->enrollment_requirment_15,
            'enrollment_requirment_16' => $this->enrollment_requirment_16,
            'enrollment_requirment_17' => $this->enrollment_requirment_17,
            'enrollment_requirment_18' => $this->enrollment_requirment_18,
            'enrollment_requirment_19' => $this->enrollment_requirment_19,
            'enrollment_requirment_20' => $this->enrollment_requirment_20,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
