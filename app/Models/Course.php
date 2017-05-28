<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    public function author()
    {
    	return $this->belongsTo('App\User');
    }
}
