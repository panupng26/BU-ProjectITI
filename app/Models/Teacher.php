<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'role_id',
        'name',
        'users_id',
        'email'
    ];
    protected $primaryKey = 'teacher_id';
    public function role()
    {
        return $this->hasOne(RoleTeacher::class,'role_teachers_id','role_id');
    }
}
