<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Googledrivepeper extends Model
{
    use HasFactory;

    protected $fillable = [
        'linkweb',
    ];
    protected $primaryKey = 'googledrive_id';
}
