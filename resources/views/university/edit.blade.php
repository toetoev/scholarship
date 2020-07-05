@extends('admin')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">University</div>
						<div class="card-body">
							<form action="{{route('university.update',$university->id)}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="name" class="control-label mb-1">University Name</label>
											<input id="name" name="name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
											aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value ="{{$university->name}}">
											<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>

											@if ($errors->has('name'))
											<i class="zmdi zmdi-alert-octagon"></i>
											<span class="text-danger">{{ $errors->first('name') }}</span>
											@endif

										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="email" class="control-label mb-1">Email</label>
											<input type="email" id="email" name="email"  class="form-control" required value ="{{$university->email}}">

											@if ($errors->has('email'))
											<i class="zmdi zmdi-alert-octagon"></i>
											<span class="text-danger">{{ $errors->first('email') }}</span>
											@endif

										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="phone" class="control-label mb-1">Phone</label>
											<input id="phone" name="phone" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
											aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value ="{{$university->phone}}">
											<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>

											@if ($errors->has('phone'))
											<i class="zmdi zmdi-alert-octagon"></i>
											<span class="text-danger">{{ $errors->first('phone') }}</span>
											@endif

										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="site" class="control-label mb-1">Site URL</label>
											<input id="site" name="site" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
											aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value ="{{$university->site_url}}">
											<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>

											@if ($errors->has('site'))
											<i class="zmdi zmdi-alert-octagon"></i>
											<span class="text-danger">{{ $errors->first('site') }}</span>
											@endif

										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-success">
											<label for="country" class="control-label mb-1">Select Country</label>

											<select id="country" name="country" class="custom-select mr-sm-2">
												@foreach($countries as $country)
												<option value="{{$country->id}}" 
													<?php if ($university->country_id == $country->id): ?>
														selected
														<?php endif; ?>>
														{{$country->name}}
													</option>
													@endforeach
												</select>
											</div>
										</div>


										<div class="col-md-6">
											<div class="form-group has-success">
												<label for="region" class="control-label mb-1">Select Region</label>

												
												<select id="region" name="region" class="custom-select mr-sm-2">

													@foreach($regions as $region)
													<option value="{{$region->id}}" 
														<?php if ($university->region_id == $region->id): ?>
															selected
															<?php endif; ?>>
															{{$region->region}}
														</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>	

										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-success">
													<label for="address" class="control-label mb-1">Address</label>
													<textarea name="address" id="textarea-input" rows="4" class="form-control" placeholder ="">{{$university->address}}</textarea>
													@if ($errors->has('address'))
													<i class="zmdi zmdi-alert-octagon"></i>
													<span class="text-danger">{{ $errors->first('address') }}</span>
													@endif
												</div>

											</div>

											<div class="col-md-6">
												<div class="row">
													<div class="form-group has-success">
														<label for="logo" class="control-label mb-1">Logo</label>
														<input type="file" name="logo" class="form-control-file">
														<input type="hidden" name="oldlogo" value="{{asset($university->logo)}}">

														@if ($errors->has('logo'))
														<i class="zmdi zmdi-alert-octagon"></i>
														<span class="text-danger">{{ $errors->first('logo') }}</span>
														@endif

													</div>

												</div>
												<div class="row">
													<div class="form-group has-success">
														<label for="attach" class="control-label mb-1">Attachment</label>
														<input type="file" name="attach" class="form-control-file">
														<input type="hidden" name="oldattach" value="{{asset($university->attachment)}}">
														@if ($errors->has('

														attach'))
														<i class="zmdi zmdi-alert-octagon"></i>
														<span class="text-danger">{{ $errors->first('attach') }}</span>
														@endif

													</div>

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