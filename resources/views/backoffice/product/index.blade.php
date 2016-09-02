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
						<th>Category</th>
						<th>Image Thumbnail</th>
						<th>Product Name</th>
						<th>Product Price</th>
						<th>Stock Remain</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{ $product->category->title }}</td>
						<td><img class="img-responsive img-thumbnail" style="width:100px;" src="{{ asset('thumb_image/'.$product->thumb_image) }}" alt="{{ $product->name }}"></td>
						<td>{{ $product->name }}</td>
						<td>THB {{ number_format($product->price) }}</td>
						@if($product->live)
							<td class="green">In stock ( {{ number_format($product->stock) }} )</td>
						@else
							<td class="red">Out of stock</td>
						@endif
						<td>
							<a class="btn" title="View" href="{{ route('backoffice.product.show', $product->id) }}"><i class="fa fa-lg fa-eye green"> </i></a>
						</td>
						<td>
							<a class="btn" title="Edit" href="{{ route('backoffice.product.edit', $product->id) }}"><i class="fa fa-lg fa-edit blue"> </i></a>
            				{{ Form::open(['method' => 'DELETE','route' => ['backoffice.product.destroy', $product->id],'id'=>'deleteCategory', 'onsubmit' => 'return ConfirmDelete()', 'style'=>'display:inline']) }}
            					<input type="hidden" name="title" value="{{ $product->name }}">
                            	<button style="background-color: #fcfcfc;" title="Delete" class="btn" type="submit" onClick="return confirm('DELETE ?')"><i class="fa fa-lg fa-trash red"></i></button>
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