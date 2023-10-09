<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstitutionGeneralSettingResource extends JsonResource
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
            'institution_logo' => $this->institution_logo,
            'institution_name' => $this->institution_name,
            'institution_year_of_starting' => $this->institution_year_of_starting,
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
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
