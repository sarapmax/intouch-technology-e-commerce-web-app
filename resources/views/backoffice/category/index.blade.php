@extends('backoffice.layouts.master')

@section('content')

<div class="page-content">
	<!-- Heading -->
	<div class="single-head">
		<!-- Heading -->
		<h3 class="pull-left"><i class="fa fa-tasks orange fa-lg"></i> Category</h3>
		<!-- Bread crumbs -->
		<div class="breads pull-right">
			<a href="{{ route('backoffice.category.create') }}" class="btn btn-warning"><i class="fa fa-plus-square"> </i> Add Category</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- Table Page -->
	<div class="page-tables">
		<!-- Table -->
		<div class="table-responsive">
			<table cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
				<thead>
					<tr >
						<th>Category Title</th>
						<th style="width:200px;">Created</th>
						<th style="width:100px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td>{{ $category->title }}</td>
						<td>{{ $category->created_at->format('d/m/Y') }}</td>
						<td>
							<a class="btn" title="Edit" href="{{ route('backoffice.category.edit', $category->id) }}"><i class="fa fa-lg fa-edit blue"> </i></a>
            				{{ Form::open(['method' => 'DELETE','route' => ['backoffice.category.destroy', $category->id],'id'=>'deleteCategory', 'onsubmit' => 'return ConfirmDelete()', 'style'=>'display:inline']) }}
            					<input type="hidden" name="title" value="{{ $category->title }}">
                            	<button style="background-color: #fcfcfc;" title="Delete" class="btn" type="submit" onClick="return confirm('Do you want to delete this category ?')"><i class="fa fa-lg fa-trash red"></i></button>
                            {{ Form::close() }}
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