<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaundryAppointment extends Model
{
    protected $fillable = [
        'l_id',
        'l_date',
        'l_time',
        'users_id',
    ];
}
