<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprendice extends Model
{
    public function Computer(){
       return $this->hasOne('App\Models\Computer');
    }


    public function Course(){
        return $this->belongsTo('App\Models\Course');
    }
}
