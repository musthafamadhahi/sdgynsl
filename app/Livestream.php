<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livestream extends Model
{
    protected $fillable = ['name', 'link', 'email', 'status'];
}
