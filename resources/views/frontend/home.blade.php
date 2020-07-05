@extends('template')
@section('banner')
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-between">
			<div class="banner-content col-lg-9 col-md-12">
				<h1 class="text-uppercase">
					Scholarship Application		
				</h1>
				<p class="text-white">
					You can apply scholarship in this website
				</p>
				<a href="{{route('courses.index')}}" class="primary-btn text-uppercase">Get More</a>
			</div>										
		</div>
	</div>					
</section>
@endsection
@section('event')
<section class="top-category-widget-area pt-90 pb-90 ">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Enjoy your school life!</h1>
					<p>Some activities are shown here.</p>
				</div>
			</div>
		</div>	
		<div class="row">		
			<div class="col-lg-4">
				<div class="single-cat-widget">
					<div class="content relative">
						<div class="overlay overlay-bg"></div>
						<a href="#" target="_blank">
							<div class="thumb">
								<img class="content-image img-fluid d-block mx-auto" src="{{asset('education/img/blog/collaboration.jpeg')}}" alt="">
							</div>
							<div class="content-details">
								<h4 class="content-title mx-auto text-uppercase">Collaboration</h4>
								<span></span>								        
								<p>Make collaboration with team</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-cat-widget">
					<div class="content relative">
						<div class="overlay overlay-bg"></div>
						<a href="#" target="_blank">
							<div class="thumb">
								<img class="content-image img-fluid d-block mx-auto" src="{{asset('education/img/blog/library.jpeg')}}"  alt="">
							</div>
							<div class="content-details">
								<h4 class="content-title mx-auto text-uppercase">Library</h4>
								<span></span>								        
								<p>One of the place do you love</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-cat-widget">
					<div class="content relative">
						<div class="overlay overlay-bg"></div>
						<a href="#" target="_blank">
							<div class="thumb">
								<img class="content-image img-fluid d-block mx-auto" src="{{asset('education/img/blog/discussion.jpeg')}}" alt="">
							</div>
							<div class="content-details">
								<h4 class="content-title mx-auto text-uppercase">Discussion</h4>
								<span></span>
								<p>Make group discussion</p>
							</div>
						</a>
					</div>
				</div>
			</div>												
		</div>
		<div class="row search_posts mt-5">

		</div>
	</div>	
</section>
@endsection