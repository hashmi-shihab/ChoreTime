<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CookingAppointment extends Model
{
    protected $fillable = [
        'c_id',
        'c_date',
        'c_time',
        'users_id',
    ];
}
