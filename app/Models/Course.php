<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function slug()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function completed()
    {

        return DB::table('course_user')->where([
            ['user_id', '=', Auth::user()->id], 
            ['course_id', '=', Auth::user()->id]
        ])->first();
    }
}
