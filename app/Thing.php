<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    protected $fillable = ['id', 'abled', 'title', 'slug', ];
}
