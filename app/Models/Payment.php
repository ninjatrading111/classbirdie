<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'user_id',
        'pay_intent',
        'pay_amount',
        'pay_method_type',
        'pay_currency',
        'pay_type',
        'pay_created',
        'pay_ended',
        'pay_status',
        'flag'
    ];
}
