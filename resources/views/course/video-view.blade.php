@extends('layouts.video')
@section('styles')
<style>
	video {
	    position: fixed; right: 0; bottom: 0;
	    min-width: 100%; min-height: 100%;
	    width: auto; height: auto; z-index: 998;
	    background-size: cover;
	}

	.side-toggle {
		position: absolute;
		top: 3%;
		left: 5%;
		z-index: 999;
	}

</style>
@endsection
@section('content')
	<div class="container">
		<div class="row pad">
			<button class="side-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
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

	</script>
@endsection