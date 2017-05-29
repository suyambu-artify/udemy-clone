<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Category;
use App\Models\SubCategory;

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

    public function show(Request $request)
    {
        $category = Category::where('slug', '=', $request->category)->first();
        $courses = Course::where('category_id', '=', $category->id)->get();
        return view('course.index', compact('courses'));
    }

    public function showSpecific(Request $request)
    {

        $specific = SubCategory::where('slug', '=', $request->subCategory)->first();
        $courses = Course::where('sub_category_id', '=', $specific->id)->get();
        return view('course.index', compact('courses'));
    }

    public function myDetailCourse(Request $request)
    {

        $course = Course::where('slug', '=', $request->slug)->first();
        return view('course.show', compact('course'));
    }
}
