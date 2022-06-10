<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'mood',
        'content',
        'create_time',
        'update_time',
    ];
}
