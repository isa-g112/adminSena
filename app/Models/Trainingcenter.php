<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainingcenter extends Model
{
    public function Course(){
        return $this->hasOne('App\Models\Course');
    }

    public function Teacher(){
        return $this->hasMany('App\Models\Teacher');
    }

}
