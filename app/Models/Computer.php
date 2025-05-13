<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public function Aprrendice(){

       return $this->belongsTo('App\Models\Apprendice');
    }
}

