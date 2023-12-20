<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'duration',
        'course_id',
        'date_end',
        'user_id',
        'cost'
    ];
}
