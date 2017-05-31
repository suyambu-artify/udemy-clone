@extends('layouts.my-courses-detail')
@section('content')
	<div class="bg-gray text-white">

		{{ json_encode($course) }}
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
				</div>
			</div>
		</div>
	</div>
@endsection