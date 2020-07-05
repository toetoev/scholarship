@extends('template')
@section('banner')
<section class="banner-area relative about-banner" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Available scholarship		
				</h1>	
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html"> Scholarship</a></p>
			</div>	
		</div>
	</div>
</section>
@endsection
@section('event')
<section class="popular-courses-area section-gap courses-page">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Available scholarship are here!</h1>
					<p>You can search and apply from.</p>
				</div>
			</div>
		</div>					
		<div class="row">
			@foreach($scholars as $scholar)	
			<div class="single-popular-carusel col-lg-3 col-md-6">
				<div class="thumb-wrap relative">
					<div class="thumb relative">
						<div class="overlay overlay-bg"></div>	
						<img class="img-fluid" src="{{asset($scholar->logo)}}" style="width: 250px; height: 200px;">
					</div>
					<div class="meta d-flex justify-content-between">
						<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
					</div>									
				</div>
				<div class="details">
					<a href="course-details.html">
						<h4>
							{{$scholar->uname}}
						</h4>
					</a>
					<p>
						<b>Related Major</b>					
						<span class="d-block">{{$scholar->mname}}</span>			
					</p>
					<a href="{{route('courses.update',$scholar->id)}}" class="btn btn-outline-dark">More Details</a>
				</div>
			</div>		
			@endforeach	
		</div>
	</div>	
</section>
@endsection