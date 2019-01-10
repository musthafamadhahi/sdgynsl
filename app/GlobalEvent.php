<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalEvent extends Model
{
    protected $fillable = [
        'title', 'date', 'time','venue','description','register','files','likes','going'
    ];
}
