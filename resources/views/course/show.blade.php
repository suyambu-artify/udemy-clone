@extends('layouts.my-courses-detail')
@section('content')
	<div class="bg-gray text-white">
		<div class="container">
			<div class="row pad">
				<div class="col-lg-6">
					<img src="{{ $course->image }}" alt="">
				</div>
				<div class="col-lg-6">
					<h2>{{ $course->title }}</h2>
					<a class="btn btn-primary" href="{{ route('my-course-video', ['course' => $course->slug, 'video' => $position ]) }}">Continue to lecture {{ $position}}</a>
					<div class="rating pad-sm">
						<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
					</div>
					<p>{{ $course->completed()->lessons_completed }} out of {{ $course->lessons_total }} completed </p>

					<div class="progress">
						<div class="bar" style="width:{{ ($course->completed()->lessons_completed / $course->lessons_total) * 100 }}%;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<h2><strong>About this Course</strong></h2>
			{!! $course->description !!}
			<hr/>
			<h2>Features</h2>
			<ul>
				{!! $course->highlights !!}
			</ul>
			<hr/>
		</div>

		<div class="row">
			<h2>Instructor</h2>
			{!! $course->author->bio !!}
		</div>
	</div>
@endsection