<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courseteacher extends Model
{
    public function scopeWithCourseAndTeacher($query) {
    return $query->with(['course', 'teacher']);
}

public function scopePaginateResults($query, $perPage = 10) {
    return $query->paginate($perPage);
}






}
