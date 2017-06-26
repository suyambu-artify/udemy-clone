@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="pad">
				@foreach($courses as $i => $course)
					
					<div class="col-lg-3 text-center pad-md">
						<a href="{{ route('course-detail', ['course' => $course->slug] ) }}" style="display:inline-block" class="js-popover" data-id="popover-{{ $i }}" data-animation="true">
							<div class="course-item-container">
								<img class="img img-responsive" src="{{ $course->image }}" />
								<div class="course-item-bottom">
									<h3>{{ $course->title }}</h3>
									<span>{{ $course->author->name }}</span>
									<div class="text-right">
										<p class="course-item-price">${{ $course->price }}</p>
									</div>
								</div>

								@include('course.components.popover', ['index' => $i])
							</div>
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection