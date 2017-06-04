<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
}
