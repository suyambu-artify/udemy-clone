<div class="course-lectures">
	@foreach($course->lectures as $lecture)
	<div class="lecture"><a href="#lesson-{{ $lecture->id }}" data-toggle="collapse">{{ $lecture->title }}</a></div>

	<div id="lesson-{{ $lecture->id }}" class="course-lesson collapse">
		@foreach($lecture->lessons as $lesson)
			<p class="lesson">{{ $lesson->title }}</p>
		@endforeach
	</div>
	@endforeach
</div>