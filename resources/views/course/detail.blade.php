@extends('layouts.my-courses-detail')
@section('content')
	@include('course.components.course-bar')
	<div class="container pad-md">
		<div class="row">

			<div class="col-lg-8">
				<h2>Requirements</h2>

				<ul>
					{!! $course->requirements !!}
				</ul>

				<h2>Description</h2>
				<div id="description" class="description hide-content">
					{!! $course->description !!}
				</div>
				<a href="#" class="read-more" data-target="description"><strong>View More</strong></a>
			</div>

		</div>

		<div class="row">

			<div class="col-lg-8">
				<h2>Curriculum for this Course</h2>
				
				@include('course.components.course-curriculum')
			</div>

		</div>
	</div>
@endsection