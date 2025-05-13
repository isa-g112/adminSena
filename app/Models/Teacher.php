<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function Area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function Trainingcenter(){
        return $this->belongsTo('App\Models\Trainingcenter');
    }

    public function Coursemodel(){
        return $this->belongsToMany('App\Models\Course');
    }

}
