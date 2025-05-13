<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function Course(){
        return $this->belongsToMany('App\Models\Course');
    }


    public function Teacher(){
        return $this->hasmany('App\Models\Teacher');
    }
}

