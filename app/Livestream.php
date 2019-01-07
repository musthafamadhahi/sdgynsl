<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livestreams extends Model
{
    protected $fillable = ['name', 'link', 'email', 'status'];
}
