<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depeche extends Model
{
    protected $fillable = ['name','members','achievementpoints','created_at','updated_at'];
}
