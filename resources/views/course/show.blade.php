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
					<a class="btn btn-primary">Continue to lecture 12</a>
					<div class="rating pad-sm">
						<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
					</div>
					<p>{{ $course->completed()->lessons_completed }} out of {{ $course->completed()->lessons_total }} completed </p>

					<div class="progress">
						<div class="bar" style="width:{{ ($course->completed()->lessons_completed / $course->completed()->lessons_total) * 100 }}%;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection