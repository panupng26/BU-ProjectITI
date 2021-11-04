<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStudent extends Model
{
    use HasFactory;
    protected $fillable = [
        'student1_id',
        'student2_id',
        'student3_id',
        'advisor_id',
        'director1_id',
        'director2_id',
        'typeproject_id',
        'name_th',
        'description_th',
        'name_eng',
        'description_eng'
    ];

    protected $primaryKey = 'project_id' ;
}
