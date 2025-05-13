<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function Apprendice(){
        return $this->hasMany('App\Models\Apprendice');
    }

    public function Trainingcenter(){
        return $this->belongsToMany('App\Models\Trainingcenter');
    }

    public function Area(){
        return $this->hasOne('App\Models\Area');
    }

    public function Course(){
        return $this->belongsToMany('App\Models\Course');
    }
}

