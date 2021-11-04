<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'status_project1_id',
        'status_project2_id',
        'project_id',
        'id_student',
        'name',
        'project1_schoolyear_id',
        'project1_schoolterm_id',
        'project2_schoolyear_id',
        'project2_schoolterm_id',
        'users_id',
        'email',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $primaryKey = 'student_id';

    public function project1_schoolyear()
    {
        return $this->hasOne(Schoolyear::class,'schoolyear_id','project1_schoolyear_id');
    }
    public function project1_schoolterm()
    {
        return $this->hasOne(Schoolterm::class,'schoolterm_id','project1_schoolterm_id');
    }
    public function project2_schoolyear()
    {
        return $this->hasOne(Schoolyear::class,'schoolyear_id','project2_schoolyear_id');
    }
    public function project2_schoolterm()
    {
        return $this->hasOne(Schoolterm::class,'schoolterm_id','project2_schoolterm_id');
    }
}
