@extends('layouts.video')
@section('styles')
<style>
	video {
	    position: fixed; right: 0; bottom: 0;
	    min-width: 100%; min-height: 100%;
	    width: auto; height: auto; z-index: 997;
	    background-size: cover;
	}

	.side-toggle {
		position: absolute;
		top: 3%;
		left: 5%;
		z-index: 998;
	}

	#sidebar {
		z-index: 1003;
		position: absolute;
		top: 0;
		height: 100%;
		background: #fff;
	}

	.close-btn {
		position: absolute;
		left: 246px;
		top: 20px;
		z-index: 999;
		color: #fff;
		font-size: 28px;
		cursor: pointer;
	}

</style>
@endsection
@section('content')
	<div id="sidebar" class="hidden">
		<div class="course-lectures">
			@foreach($course->lectures as $lecture)
			<div class="lecture">	
				<div class="row">
					<div class="col-xs-8">
						<a href="#lesson-{{ $lecture->id }}" data-toggle="collapse">
							<strong>{{ $lecture->title }}</strong>
						</a>
					</div>
					<div class="col-xs-4">
						<span>{{ count($lecture->lessons) }} Lectures</span>
					</div>
				</div>
			</div>

			<div id="lesson-{{ $lecture->id }}" class="course-lesson collapse">
				@foreach($lecture->lessons as $lesson)
					<div class="lesson">
					<span><a href="{{ route('my-course-video', ['course' => $course->slug, 'video' => $lesson->position ]) }}">{{ $lesson->title }}</a></span> 
					<span class="lesson-time">{{ $lesson->time }}</span></div>
				@endforeach
			</div>
			@endforeach
		</div>
	</div>
	<span class="close-btn hidden">X</span>
	<div class="container">
		<div class="row pad">
			<div class="dark">
				<button class="side-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
			</div>
			<video id="vid1" controls crossorigin autoplay>
			  <source src="{{ $lesson->video_url }}" type="video/mp4">
			</video>
		</div>
	</div>
@endsection

@section('scripts')
	<script>
		// var players = plyr.setup({autoplay: true});

		document.getElementById('vid1').addEventListener('loadedmetadata', function() {
  			this.currentTime = 0;
		}, false);

		$(document).ready(function() {
			$('.side-toggle').click(function() {
				$('#sidebar').toggleClass('hidden');
				$('.close-btn').toggleClass('hidden');
			})

			$('.close-btn').click(function() {
				$('.side-toggle').trigger('click');
			})
		})


	</script>
@endsection