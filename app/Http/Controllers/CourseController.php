<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
    	$id = Auth::user()->id;
    	$courses = User::find($id)->courses()->get();
    	dd($courses);
    }
}
