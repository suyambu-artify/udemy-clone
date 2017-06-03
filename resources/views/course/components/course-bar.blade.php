<div class="bg-gray pad">
	<div class="container">
		<div class="row">
			<div class="course-bar-meta text-white">
				<h2 class="no-margin"><strong>{{ $course->title }}</strong></h2>
				<h3>{!! $course->excerpt !!}</h3>
				<div class="star-ratings-css">
				  <div class="star-ratings-css-top" style="width: {{($average / 5) * 100}}%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
				  <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span></div>
				</div>
				
				<span>{{ $average }} ({{ $reviewCount }} ratings)</span>
				<span>{{ $studentCount }} students enrolled</span>
				<div>
					<span>Created by {{ $course->author->name }}</span>
					<span>Last Updated {{ $course->updated_at or $course->formatted_date }}</span>
					<span>{{ $course->language }}</span>
				</div>
			</div>

			<div class="course-floater">
				<div class="bg-white inline-block course-floater-wrapper">
						<img src="http://placehold.it/350x250" alt="" />
						<div class="course-floater-bottom">
							<h2 class="no-margin">{{ $course->price }}</h2>

							<button>Buy Now</button>
							<button class="add-to-cart text-green">Add to Cart</button>
							<div class="text-center"><span>30-Day Money-Back Guarantee</span></div>

							<h4>Includes</h4>

							<ul>
								<li>42.5 hours on-demand video</li>
								<li>42 Articles</li>
								<li>28 Supplemental Resources</li>
								<li>Full lifetime access</li>
								<li>Access on mobile and TV</li>
								<li>Certificate of Completion</li>
							</ul>
							<div class="text-center"><span>Have a Coupon?</span></div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>