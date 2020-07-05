@extends('template')
@section('banner')
<section class="banner-area relative about-banner" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Scholarship	Detail	
				</h1>	
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html">Scholarship Detail</a></p>
			</div>	
		</div>
	</div>
</section>
@endsection
@section('event')
<section class="course-details-area pt-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 left-contents">
					@foreach($details as $detail)
				<div class="main-image">
					<img class="img-fluid" src="{{asset($detail->logo)}}" alt="" style="width: 600px; height: 250px;">
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">

					<div class="jq-tab-menu">
						<div class="jq-tab-title active" data-tab="1">Info</div>
						<div class="jq-tab-title" data-tab="2">Description</div>
						<div class="jq-tab-title" data-tab="3">Eligibility</div>
						<div class="jq-tab-title" data-tab="4">Course Inclusion</div>
					</div>
					<div class="jq-tab-content-wrapper">
						<div class="jq-tab-content active" data-tab="1">
							<p>
								<div class="row">
									<div class="col-md-3">
										<b>University Name</b>
									</div>
									<div class="col-md-7">
										{{$detail->uname}}
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<b>Phone Number</b>
									</div>
									<div class="col-md-7">
										{{$detail->uphone}}
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<b>Email</b>
									</div>
									<div class="col-md-7">
										{{$detail->umail}}
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<b>Address</b>
									</div>
									<div class="col-md-7">
										{{$detail->address}}
									</div>
								</div>
							</p>	
						</div>
						<div class="jq-tab-content" data-tab="2">
							{{$detail->description}}
									
						</div>
						<div class="jq-tab-content" data-tab="3">
							{{$detail->eligibility}}
						</div>
						<div class="jq-tab-content" data-tab="4">
							{{$detail->inclusion}}
						</div>                               
					</div>
				</div>
			</div>
			<div class="col-lg-4 right-contents">
				<ul>
					<li>
						<a class="justify-content-between d-flex" href="#">
							<p>Start Date</p>
							<span>{{$detail->course_start}}</span>
						</a>
					</li>
					<li>
						<a class="justify-content-between d-flex" href="#">
							<p>End Date</p>
							<span>{{$detail->course_end}}</span>
						</a>
					</li>
					<li>
						<a class="justify-content-between d-flex" href="#">
							<p>Deadline</p> 
							<span>{{$detail->deadline}}</span>
						</a>
					</li>
					<li>
						<a class="justify-content-between" href="#">
							Download enrollment form <a href="{{asset($detail->attachment)}}" download class="d-inline-block float-right btn btn-dark text-white" style="margin-top: -6px;">Here</a>
						</a>
					</li>
				</ul>
				<a href="{{route('enrollment.show',$detail->id)}}" class="primary-btn text-uppercase">Enroll the form</a>
			</div>
			@endforeach
		</div>
	</div>	
</section>
@endsection