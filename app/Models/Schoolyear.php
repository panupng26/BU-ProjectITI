<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolyear extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
    ];
    protected $primaryKey = 'schoolyear_id';
}
