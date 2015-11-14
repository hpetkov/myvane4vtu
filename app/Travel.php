<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = [
        'user_id', 'bags', 'airconditioner', 'radio', 'information', 'price', 'from_city', 'to_city', 'max_persons', 'travel_date',
    ];
}
