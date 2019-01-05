<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'title', 'date', 'time','venue','description','register','files','like','going'
    ];

}
