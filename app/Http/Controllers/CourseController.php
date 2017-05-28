<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class CourseController extends Controller
{
    public function userCourses()
    {
    	$id = Auth::user()->id;
    	$courses = User::find($id)->courses()->get();
    	return view('course.user', compact('courses'));
    }

    public function index()
    {
    	$courses = Course::paginate(20);
    	return view('course.index', compact('courses'));
    }
}
