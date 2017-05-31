@extends('layouts.my-courses')
@section('content')
	<div class="container">
		<div class="row pad">
			@foreach($courses as $course)
				<div class="col-lg-3 text-center">
					<div class="course-item-container">
						<img class="img img-responsive" src="{{ $course->image }}" />
						<a href="{{ route('my-course-detail', ['slug' => $course->slug ]) }}">
							<div class="course-item-bottom">
								<h3>{{ $course->title }}</h3>
								<span>{{ $course->author->name }}</span>
								<div class="text-right">
									<p class="course-item-price">${{ $course->price }}</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection