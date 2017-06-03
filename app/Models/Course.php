<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $appends = ['formatted_date', 'language'];

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

    public function getFormattedDateAttribute()
    {
        // May 15th, 2017, 2:45pm
        $dt = new Carbon($this->created_at);
        return $dt->format('m/Y');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function getlanguageAttribute()
    {
        return ucfirst($this->languages);
    }

    public function lectures()
    {
        return $this->hasMany('App\Models\Lecture');
    }
}
