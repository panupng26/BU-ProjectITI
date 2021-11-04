<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestTeacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_login_id',
        'name',
        'student1_id',
        'student2_id',
        'student3_id',
        'advisor_id',
        'director1_id',
        'director2_id',
        'description',
        'status_id'
    ];
    protected $primaryKey = 'request_teacher_id';
    
    public function student1()
    {
        return $this->hasOne(Student::class,'id_student','student1_id');
    }
    public function student2()
    {
        return $this->hasOne(Student::class,'id_student','student2_id');
    }
    public function student3()
    {
        return $this->hasOne(Student::class,'id_student','student3_id');
    }
    public function studentrequest()
    {
        return $this->hasOne(Student::class,'users_id','student_login_id');
    }
}
