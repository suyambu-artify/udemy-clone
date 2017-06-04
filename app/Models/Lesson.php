<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function lectures()
    {
        return $this->belongsTo('App\Models\Lecture');
    }

    // public function course()
    // {
    // 	return $this->
    // }
}
