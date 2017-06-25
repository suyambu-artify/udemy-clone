<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        $courses = Course::where('author_id', '=', $user->id)->get();
        return view('instructor.index', compact('courses'));
    }

    public function edit(Request $request)
    {
        $course = Course::where('id', '=', $request->id)->first();
        return view('instructor.edit-course', compact('course'));
    }

    public function update(Request $request)
    {
        $course = Course::where('id', '=', $request->id)->first();
        $course->title = $request->title;
        $course->save();
        return back();
    }
}
