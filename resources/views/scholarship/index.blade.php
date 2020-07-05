@extends('admin')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- DATA TABLE -->
					<h3 class="title-5 m-b-35">data table</h3>
					<div class="table-data__tool">
						<div class="table-data__tool-left">
							<div class="rs-select2--light rs-select2--md">
								<select class="js-select2" name="property">
									<option selected="selected">All Properties</option>
									<option value="">Option 1</option>
									<option value="">Option 2</option>
								</select>
								<div class="dropDownSelect2"></div>
							</div>
							<div class="rs-select2--light rs-select2--sm">
								<select class="js-select2" name="time">
									<option selected="selected">Today</option>
									<option value="">3 Days</option>
									<option value="">1 Week</option>
								</select>
								<div class="dropDownSelect2"></div>
							</div>
							<button class="au-btn-filter">
								<i class="zmdi zmdi-filter-list"></i>filters
							</button>
						</div>
						<div class="table-data__tool-right">
							<form action="{{route('scholar.create')}}" method="get">
								<button class="au-btn au-btn-icon au-btn--green au-btn--small" type="submit">
									<i class="zmdi zmdi-plus"></i>add item	
								</button>
							</form>					
						</div>
					</div>

					@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong>{{ $message }}</strong>
					</div>
					@endif

					@if ($message = Session::get('danger'))
					<div class="alert alert-danger alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong>{{ $message }}</strong>
					</div>
					@endif

					<div class="table-responsive table-responsive-data2">
						<table class="table table-data2">
							<thead>
								<tr>
										<th>
											<label class="au-checkbox">
												<input type="checkbox">
												<span class="au-checkmark"></span>
											</label>
										</th>
										<th>Description</th>
										<th>Eligibility</th>
										<th>Inclusion</th>
										<th>Deadline</th>
										<th>Action</th>
								</tr>
							</thead>                
							<tbody>
								@foreach($scholars as $scholar)
								<tr class="tr-shadow">
										<td>
											<label class="au-checkbox">
													<input type="checkbox">
													<span class="au-checkmark"></span>
											</label>
										</td>
										<td>{{$scholar->description}}</td>
										<td>{{$scholar->eligibility}}</td>
										<td>{{$scholar->inclusion}}</td>
										<td>{{$scholar->deadline}}</td>
										<td>
											<img src="{{asset($scholar->logo)}}" width="50" height="50">
										</td>
										<td>
											<div class="table-data-feature">
												<a href="{{route('scholar.edit', $scholar->id)}}">
													<button class="item mx-2" data-toggle="tooltip" data-placement="top" title="Edit">
														<i class="zmdi zmdi-edit"></i>
													</button>
												</a>
												<form action="{{route('scholar.destroy', $scholar->id)}}" method="post">
													@csrf
													@method('DELETE')
													<button class="item" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are u sure to delete!')">
														<i class="zmdi zmdi-delete"></i>
													</button>
												</form>
											</div>
										</td>
								</tr>
								<tr class="spacer"></tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<!-- END DATA TABLE -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection