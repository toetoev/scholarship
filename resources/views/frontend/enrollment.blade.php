@extends('template')
@section('banner')
<section class="banner-area relative about-banner" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Enrollment				
				</h1>	
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Enrollment</a></p>
			</div>	
		</div>
	</div>
</section>
@endsection
@section('event')
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Enrollment From</h1>
					<p>You need to fill enrollment form to apply scholarship</p>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-lg-12">
				<form action="{{route('enrollment.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					@if(Session::has("success"))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong>Your email is successfully send.</strong>
					</div>
					@endif
					<div class="row mx-auto">
						<div class="col-md-1"></div>
						<div class="col-md-5 form-group">
							<input type="hidden" name="scholarid" value="{{$detail}}">
							
							<label for="name" class="control-label mb-1"><b>Name</b></label>
							<input name="name" class="common-input mb-20 form-control" required="" type="text" >
							
							<label for="dob" class="control-label mb-1"><b>Date of birth</b></label>
							<input type="date" class="form-control" name="dob" required>

							<label for="gender" class="control-label mt-3"><b>Gender</b></label>
							
							<div class="form-check-inline mx-3">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="gender" value="male">male
								</label>
							</div>
							<div class="form-check-inline">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="gender" value="female">female
								</label>
							</div>
							<div class="form-check-inline">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="gender" value="other">other
								</label>
							</div>
							<br>

							<label for="phone" class="control-label mb-1"><b>Phone</b></label>
							<input name="phone" class="common-input mb-20 form-control" required="" type="text">

							<label for="country" class="control-label mb-1"><b>Select Country</b></label>

							<select id="country" name="country" class="form-control">
								<option selected>Choose Country</option>
								@foreach($countries as $country)
								<option value="{{$country->id}}">
									{{$country->name}}
								</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-5 form-group">

							<label for="citizen" class="control-label mb-1">Select Citizen</label>

							<select id="citizen" name="citizen" class="form-control">
								<option selected>Choose Citizen</option>
								@foreach($countries as $country)
								<option value="{{$country->id}}">
									{{$country->name}}
								</option>
								@endforeach
							</select>

							<label for="university" class="control-label mb-1"><b>Select University</b></label>

							<select id="university" name="university" class="form-control">
								<option selected>Choose University</option>
								@foreach($universities as $uni)
								<option value="{{$uni
								->id}}">
								{{$uni->name}}
							</option>
							@endforeach
						</select>


						<label for="grade" class="control-label mb-1">Select Grade</label>

						<select id="grade" name="grade" class="form-control">
							<option selected>Choose Grade</option>
							@foreach($grades as $grade)
							<option value="{{$grade
							->id}}">
							{{$grade->grade}}
						</option>
						@endforeach
					</select>

					<div class="form-group">
						<label for="sel1">Select English Level</label>
						<select class="form-control" id="sel1" name="level">
							<option selected>Choose Skill</option>
							<option value="elementary">Elementary</option>
							<option value="intermediate">Intermediate</option>
							<option value="upperinter">Upper Intermediate</option>
							<option value="advance">Advance</option>
							<option value="none">None of these above</option>
						</select>
					</div>

					<div class="form-group has-success">
						<label for="photo" class="control-label mb-1">Photo</label>
						<input type="file" name="photo" class="form-control-file">
					</div>

					<div class="form-group has-success">
						<label for="attach" class="control-label mb-1">Attachment</label>
						<input type="file" name="attach" class="form-control-file">
					</div>
				</div>
			</div>
			
			<div class="button-group-area text-center">
					<input type="submit" name="" class="genric-btn primary" value="Apply">
			</div>

				<!-- <input type="submit" name="" class="" value="Apply"> -->
			</div>
		</form>	
	</div>
</div>
</div>	
</section>
@endsection