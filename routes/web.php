<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/', array('as' => 'home', 'uses' => 'CourseController@index'));
Route::get('/courses', 'CourseController@index')->middleware('auth')->name('home');
Route::get('/courses/{course}', 'CourseController@detail')->name('course-detail');
Route::get('/courses/c/{category}', 'CourseController@show')->name('course-category');
Route::get('/courses/c/{category}/{subCategory}', 'CourseController@showSpecific')->name('category-specific');
Route::get('/my-courses', 'CourseController@userCourses')->middleware('auth')->name('user-courses');
Route::get('/my-course-detail/{slug}', 'CourseController@myDetailCourse')->middleware('auth')->name('my-course-detail');
Route::get('/{course}/{video}', 'CourseController@myVideoCourse')->middleware('auth')->name('my-course-video');

Route::get('/search', 'SearchController@search')->name('course-search');
Route::post('/search', 'SearchController@query')->name('course-query');

