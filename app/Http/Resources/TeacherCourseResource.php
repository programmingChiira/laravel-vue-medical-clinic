<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherCourseResource extends JsonResource
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
            'teacher_name' => $this->teacher_name,
            'teacher_slug' => $this->teacher_slug,
            'course' => $this->course,
            'course_slug' => $this->course_slug,
            'department' => $this->department,
            'department_slug' => $this->department_slug,
            'class_stream' => $this->class_stream,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
