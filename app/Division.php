<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = ['division', 'district'];
    protected $hidden = ['rating'];

}