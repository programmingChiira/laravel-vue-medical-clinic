<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'slug' => $this->slug,
            'email' => $this->email,
            'phone_no' => $this->phone_no,
            'user_role' => $this->user_role,
            'student_adm_no' => $this->student_adm_no,
            'student_upi_no' => $this->student_upi_no,
            'gender' => $this->gender,
            'teacher_tsc_no' => $this->teacher_tsc_no,
            'student_career_option' => $this->student_career_option,
            'user_account_status' => $this->user_account_status,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
