@extends('admin')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Scholarship Form</div>
						<div class="card-body">
							<form action="{{route('scholar.update',$scholar->id)}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
								@csrf
								@method('PUT')

								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="description" class="control-label mb-1">Description</label>
											<textarea name="description" id="textarea-input" rows="4" class="form-control" >{{$scholar->description}}</textarea>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="eligibility" class="control-label mb-1">Eligibility</label>
											<textarea name="eligibility" id="textarea-input" rows="4" class="form-control">{{$scholar->eligibility}}</textarea>
										</div>
									</div>

								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="inclusion" class="control-label mb-1">Scholarship Inclusion</label>
											
											<input id="inclusion" name="inclusion" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
											aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="{{$scholar->inclusion}}">
											<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="deadline" class="control-label mb-1">Dead Line</label>
											
											<input type="date" class="form-control" name="deadline" value="{{$scholar->deadline}}">
										</div>
									</div>
								</div>

								<div class="row">
										<div class="col-md-6">
										<label for="deadline" class="control-label">Course Duration</label>
										<div class="t-datepicker">
											
												<div class="t-check-in"></div>
												<div class="t-check-out"></div>
										</div>
										</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="logo" class="control-label mb-1">Logo</label>	
											<input type="file" name="logo" class="form-control-file">
											<input type="hidden" name="oldlogo" value="{{asset($scholar->logo)}}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="university" class="control-label mb-1">Select University</label>

											<select id="university" name="university" class="custom-select mr-sm-2">
												@foreach($universities as $university)
												<option value="{{$university->id}}" 
													<?php if ($scholar->university_id == $university->id): ?>
														selected
														<?php endif; ?>>
														{{$university->name}}
													</option>
													@endforeach
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="major" class="control-label mb-1">Select Major</label>

											<select id="major" name="major" class="custom-select mr-sm-2">
												@foreach($majors as $major)
												<option value="{{$major->id}}" 
													<?php if ($scholar->major_id == $major->id): ?>
														selected
														<?php endif; ?>>
														{{$major->name}}
													</option>
													@endforeach
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="grade" class="control-label mb-1">Select Grade</label>
											
											<select id="grade" name="grade" class="custom-select mr-sm-2">
												@foreach($grades as $grade)
												<option value="{{$grade->id}}" 
													<?php if ($scholar->grade_id == $grade->id): ?>
														selected
														<?php endif; ?>>
														{{$grade->grade}}
													</option>
													@endforeach
											</select>
										</div>
									</div>
								</div>

								<div>
									<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
										<i class="fa fa-lock fa-lg"></i>&nbsp;
										<span id="payment-button-amount">Save</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$("#startdate").change(function(){
			var startdate = $("#startdate").val();
			console.log(startdate);
			$("#date").val(startdate);
		})
		$("#enddate").change(function(){
			var enddate = $("#enddate").val();
			var date = $("#date").val();
			console.log(date,enddate);
			if(date<=enddate){
				alert("error") ;
			}
		})
	})
</script>
@endsection