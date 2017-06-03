<div id="popover-{{ $i }}" style="display: none" class="course-popover">

	<h4><strong>{{ $course->title }}</strong></h4>
	
	<div>
		<span>{{ $course->completed()->lessons_total }} Lectures</span>
		<span></span>
	</div>

	<span>Published: {{ $course->formatted_date }} </span>

	<hr />

	<p>{!! $course->excerpt !!}</p>

	<ul>
		{!! $course->highlights !!}
	</ul>
	<hr />

	<button class="btn btn-primary">Add to Cart</button>

	{{-- {{json_encode($course)}} --}}
</div>