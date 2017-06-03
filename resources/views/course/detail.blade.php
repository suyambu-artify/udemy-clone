@extends('layouts.my-courses-detail')
@section('content')
	@include('course.components.course-bar')
	<div class="container">
		<div class="row">

			{{ json_encode($course) }}
		</div>
	</div>
@endsection