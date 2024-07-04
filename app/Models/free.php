<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class free extends Model
{
    // use HasFactory;
    protected $fillable = [
        'user_id',
        'invite_userid',
        'invite',
        'created_date',
        'ended_date',
        'flag',
    ];
}
