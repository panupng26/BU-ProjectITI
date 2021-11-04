<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sendpeper extends Model
{
    use HasFactory;
    protected $fillable = [
        'typetest_id',
        'student_login_id',
        'linkweb',
        'description',
        'status_peper_id'
    ];
    protected $primaryKey = 'sendpeper_id';
}
