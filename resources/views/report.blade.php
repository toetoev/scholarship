@extends('admin')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- DATA TABLE -->
					<h3 class="title-5 m-b-35">User List</h3>
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
					</div>

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
									<th>Name</th>
									<th>Email</th>
									<th>University Applied</th>
									<th>Action</th>
								</tr>
							</thead>                
							<tbody>
								@foreach($details as $detail)
								<tr class="tr-shadow">
									<td>
										<label class="au-checkbox">
											<input type="checkbox">
											<span class="au-checkmark"></span>
										</label>
									</td>
									<td>{{$detail->name}}</td>
									<td>{{$detail->mail}}</td>
									<td>{{$detail->uname}}</td>
									
									<td>
										<div class="table-data-feature">
											<a href="{{route('report.show', $detail->id)}}">
												<button class="item" data-toggle="tooltip" data-placement="top" title="Detail">
													<i class="fas fa-info"></i>
												</button>
											</a>
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
