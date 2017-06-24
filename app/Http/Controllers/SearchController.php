<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class SearchController extends Controller
{
	public function __construct()
	{
		$this->unallowedWords = ['the', 'be', 'to', 'of', 'and', 'a', 'in', 'that', 'have', 'i'];
	}

    public function search(Request $request)
    {
    	$term = $request->search || "";
    	$normalized = array_diff(explode(' ', $term), $this->unallowedWords);
    	$query = implode("|",$normalized);

    	$course = Course::where('title', 'regexp', $term)->get();

    	return view('course.results', compact('course', 'term'));
    }

    public function query(Request $request)
    {

    	$term = $request->search || "";
    	$normalized = array_diff(explode(' ', $term), $this->unallowedWords);
    	$query = implode("|",$normalized);

    	$course = Course::where('title', 'regexp', $term)->paginate(10);

    	return view('course.results', compact('course', 'term'));
    }
}
