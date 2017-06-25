<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Level;

class SearchController extends Controller
{
	public function __construct()
	{
		$this->unallowedWords = ['the', 'be', 'to', 'of', 'and', 'a', 'in', 'that', 'have', 'i'];
	}

    public function search(Request $request)
    {
    	$term = $request->search ? $request->search : "";
    	$normalized = array_diff(explode(' ', $term), $this->unallowedWords);
    	$query = implode("|",$normalized);

    	$courses = Course::where('title', 'regexp', $term)->paginate(10);
        $levels = (new Level)->get();

        // dd($courses->first()->getAverageReviewAttribute());
    	return view('course.results', compact('courses', 'term', 'levels'));
    }

    public function query(Request $request)
    {

    	$term = $request->search ? $request->search : "";
    	dd($term);
    	$normalized = array_diff(explode(' ', $term), $this->unallowedWords);
    	$query = implode("|",$normalized);

    	$courses = Course::where('title', 'regexp', $term)->paginate(10);

    	return view('course.results', compact('courses', 'term', 'levels'));
    }
}
