@extends('layouts.course-detail')
@section('content')
	<div class="bg-blue pad text-white">
		<div class="container">
			<h2 class="no-margin">Instructor Dashboard</h2>
		</div>
	</div>
	<div class="container">
		@foreach($courses as $course)
			<a href="{{ route('course-edit', ['id' => $course->id ]) }}">
				<div class="bg-white pad-sm">
					<div class="row">
						<div class="col-lg-3">
							<img class="img img-responsive" src="{{ $course->image }}" alt="">
						</div>
						<div class="col-lg-9">
							<h4>{{ $course->title }}</h4>
							<p>{{ $course->author->name }}</p>
						</div>
					</div>
				</div>
			</a>
		@endforeach
	</div>
@endsection