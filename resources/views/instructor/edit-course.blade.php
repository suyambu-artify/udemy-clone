@extends('layouts.course-detail')
@section('content')
	<div class="bg-blue pad text-white">
		<div class="container">
			<h2 class="no-margin">Course Edit</h2>
		</div>
	</div>
	<div class="container">
		<div class="pad">
			<form class="form" method="POST" action="{{ route('course-update', ['id' => $course->id]) }}">
				{{ csrf_field() }}
				<div class="form-group">
					<input name="title" class="form-control" type="text" value="{{ $course->title }}" />
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Update</button>
				</div>
			</form>
		</div>

	</div>
@endsection