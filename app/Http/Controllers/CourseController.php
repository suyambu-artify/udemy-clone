<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Lecture;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;

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

    public function detail(Request $request)
    {
        $course = Course::where('slug', '=', $request->course)->first();
        $average = number_format($course->reviews()->avg('rating'), 1);
        $reviewCount = count($course->reviews);
        $studentCount = DB::table('course_user')->where('course_id', '=', $course->id)->count();
        return view('course.detail', compact('course', 'reviewCount', 'studentCount', 'average'));
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
        $position = $course->lectures()->where('position', '=', $course->completed()->lessons_completed + 1)->first()->position;
        return view('course.show', compact('course', 'position'));
    }

    public function myVideoCourse(Request $request)
    {
      
        $course = Course::where('slug', '=', $request->course)->first();
        if(!$course) {
            // dd($course);
            return redirect()->route('home');
        }
        $query = Lesson::where('position', '=', $request->video)->first();
        $lesson = $query ? $query : null;
        return view('course.video-view', compact('course','lesson'));
    }
}
