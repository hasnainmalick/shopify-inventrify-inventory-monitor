<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $fillable=[
        'session_id',
        'email',
        'time',
        'time_zone',
        'status'
    ];
}
