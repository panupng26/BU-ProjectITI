<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Typepeper extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nametype',
        'description'
    ];
    protected $primaryKey = 'typepeper_id';
}
