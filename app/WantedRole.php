<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WantedRole extends Model
{
    protected $fillable = ['logo','class','spec','additionalInfo','demand'];
}
