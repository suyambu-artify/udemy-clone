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
			<div class="lesson"><span>{{ $lesson->title }}</span> <span class="lesson-time">{{ $lesson->time }}</span></div>
		@endforeach
	</div>
	@endforeach
</div>