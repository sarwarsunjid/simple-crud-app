<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $fillable = ['name', 'location', 'address'];
}
