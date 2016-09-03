@extends('backoffice.layouts.master')

@section('content')

<div class="page-content">
	<!-- Heading -->
	<div class="single-head">
		<!-- Heading -->
		<h3 class="pull-left"><i class="fa fa-user orange fa-lg"></i> Admin</h3>
		<!-- Bread crumbs -->
	{{-- 	<div class="breads pull-right">
			<a href="{{ route('backoffice.category.create') }}" class="btn btn-warning"><i class="fa fa-plus-square"> </i> Add Category</a>
		</div> --}}
		<div class="clearfix"></div>
	</div>
	<!-- Table Page -->
	<div class="page-tables">
		<!-- Table -->
		<div class="table-responsive">
			<table cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
				<thead>
					<tr >
						<th>Activation</th>
						<th>Email</th>
						<th>Full Name</th>
						<th>Created</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($admins as $admin)
					<tr>
						<td>
							@if($admin->activated)
								<p class="green"><strong><i class="fa fa-check"> </i> Activated</strong></p>
							@else
								<p class="red"><strong><i class="fa fa-close"> </i> Not Activate</strong></p>
							@endif
						</td>
						<td>{{ $admin->email }}</td>
						<td>{{ $admin->fullname }}</td>
						<td>{{ $admin->created_at->format('d/m/Y') }}</td>
						<td>
							@if(!$admin->activated)
								<a class="btn btn-success" title="Edit" onClick="return confirm('Are you sure to activate {{ $admin->email }} ?')" href="{{ route('backoffice.admin.activate_admin', $admin->id) }}"><i class="fa fa-key"> </i> Activate</a>

							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection