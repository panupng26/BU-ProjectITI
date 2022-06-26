<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'student_id' => $this->student_id,
            'status_project1_id' => $this->status_project1_id,
            'status_test1_project1' => $this->status_test1_project1,
            'status_test2_project1' => $this->status_test2_project1,
            'status_project2_id' => $this->status_project2_id,
            'status_test1_project2' => $this->status_test1_project2,
            'status_test2_project2' => $this->status_test2_project2,
            'project_id' => $this->project_id,
            'id_student' => $this->id_student,
            'name' => $this->name,
            'project1_schoolyear_id' => $this->project1_schoolyear_id,
            'project1_schoolterm_id' => $this->project1_schoolterm_id,
            'project2_schoolyear_id' => $this->project2_schoolyear_id,
            'project2_schoolterm_id' => $this->project2_schoolterm_id,
            'users_id' => $this->users_id,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at
        ];
    }
}
