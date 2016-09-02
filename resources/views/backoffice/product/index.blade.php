@extends('backoffice.layouts.master')

@section('content')

<div class="page-content">
	<!-- Heading -->
	<div class="single-head">
		<!-- Heading -->
		<h3 class="pull-left"><i class="fa fa-cubes orange fa-lg"></i> Product</h3>
		<!-- Bread crumbs -->
		<div class="breads pull-right">
			<a href="{{ route('backoffice.product.create') }}" class="btn btn-warning"><i class="fa fa-plus-square"> </i> Add Product</a>
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
						<th>Created</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{ $product->name }}</td>
						<td>{{ $product->category->title }}</td>
						<td>{!! $product->longdesc !!}</td>
					{{-- 	<td>
							<a class="btn" title="Edit" href="{{ route('backoffice.category.edit', $category->id) }}"><i class="fa fa-lg fa-edit blue"> </i></a>
            				{{ Form::open(['method' => 'DELETE','route' => ['backoffice.category.destroy', $category->id],'id'=>'deleteCategory', 'onsubmit' => 'return ConfirmDelete()', 'style'=>'display:inline']) }}
            					<input type="hidden" name="title" value="{{ $category->title }}">
                            	<button style="background-color: #fcfcfc;" title="Delete" class="btn" type="submit" onClick="return confirm('DELETE ?')"><i class="fa fa-lg fa-trash red"></i></button>
                            {{ Form::close() }}
						</td> --}}
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="clearfix"></div>
		</div>
		</div>
	
	
</div>
@endsection