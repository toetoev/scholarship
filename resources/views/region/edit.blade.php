@extends('admin')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">Region</div>
						<div class="card-body">
							<form action="{{route('region.update',$region->id)}}" method="post" novalidate="novalidate">
								@csrf
								@method('PUT')
								<div class="form-group has-success">
									<label for="region" class="control-label mb-1">Region Name</label>
									<input id="region" name="region" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
									aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="{{$region->region}}">
									<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>

									@if ($errors->has('region'))
										<i class="zmdi zmdi-alert-octagon"></i>
									    <span class="text-danger">{{ $errors->first('region') }}</span>
									@endif

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