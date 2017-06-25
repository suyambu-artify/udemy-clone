@extends('layouts.course-detail')
@section('content')
	<div class="bg-green pad text-white">
		<div class="container">
			<h2 class="no-margin">Search Results for "{{ $term }}"</h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-3 pad-md-top">
				<div class="row">
					<div class="col-xs-6">

						<div class="dropdown">
						  <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Level
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						  	@foreach($levels as $level)
						  		<li role="presentation">
						  		<a role="menuitem" tabindex="-1">
						  		<span class="checkbox"><label>
						  		<input type="checkbox" ng-checked="">
						  		<span class="checkbox-label">{{ $level }}<span class="uni-embed">(967)</span></span> </label> </span> </a> </li>
						  	@endforeach
						  </ul>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="dropdown">
							<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Price
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li role="presentation">
									<a role="menuitem" tabindex="-1">
									<span class="checkbox"><label>
									<input type="checkbox" ng-checked="">
									<span class="checkbox-label">Free</span> 
									</a>
								</li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1">
									<span class="checkbox"><label>
									<input type="checkbox" ng-checked="">
									<span class="checkbox-label">Paid</span> 
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		@foreach($courses as $course)
			<div class="pad">
				<div class="border-gray">
					<div class="row">
						<div class="col-md-3">
							<a href="{{ route('course-detail', ['course' => $course->slug ]) }}"><img class="img-responsive" src="{{ $course->image }}" alt=""></a>
						</div>
						<div class="col-md-9">
							<a href="{{ route('course-detail', ['course' => $course->slug ]) }}"><h4><strong>{{ $course->title }}</strong></h4></a>
							<p>{{ $course->author->name }}</p>
							<div class="row">
								<div class="col-md-9">
									{!! $course->excerpt !!}
									<ul class="list-inline">
										<li>341 lectures</li>
										<li>43 hours</li>
										<li>All levels</li>
									</ul>
								</div>
								<div class="col-md-3">
									<span>{{ $course->price }}</span>
									<a href="{{ route('course-detail', ['course' => $course->slug ]) }}"><p>{{ $course->average_review }}</p></a>
									<a href="{{ route('course-detail', ['course' => $course->slug ]) }}"><p>({{ $course->reviews->count() }} ratings)</p></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	<div class="container">
		{{ $courses->links() }}
	</div>
@endsection
@section('scripts')
	<div></div>
@endsection