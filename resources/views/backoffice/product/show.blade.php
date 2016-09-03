@extends('backoffice.layouts.master')

@section('head-css')
	<!-- jQuery prettyPhoto -->
	<link href="{{ asset('backend-style/css/prettyPhoto.css') }}" rel="stylesheet">
@endsection


@section('content')

<div class="page-content">
	<!-- Heading -->
	<div class="single-head">
		<!-- Heading -->
		<h3 class="pull-left"><i class="fa fa-cube orange fa-lg"></i> Product - {{ $product->name }}</h3>

		<div class="breads pull-right">
			<a href="{{ route('backoffice.product.index') }}" class="btn btn-warning"><i class="fa fa-cubes"> </i> Product</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="page-gallery">
		<div class="row">
	    	<center>
	    		<a  href="{{ asset('thumb_image/'.$product->thumb_image) }}" class="prettyphoto">
					<img src="{{ asset('thumb_image_thumb/'.$product->thumb_image) }}" class="img-responsive img-thumbnail" alt="{{$product->name}}"/>
				</a>
	    	</center>
		</div><br/>
		<div class="row">
			<center>
				<?php $images = explode("|",$product->images); ?>
				@foreach(array_slice($images ,1) as $image)
				<a  href="{{ asset('images/'.$image) }}" class="prettyphoto">
					<img style="width:120px;" src="{{ asset('images_thumb/'.$image) }}" class="img-responsive img-thumbnail" alt="{{$product->name}}"/>
				</a>
				@endforeach
			</center>
		</div><br/>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover">
					<tr>
						<th>Category</th>
						<td>{{ $product->category->title }}</td>
					</tr>
					<tr>
						<th>Product Name</th>
						<td>{{ $product->name }}></td>
					</tr>
					<tr>
						<th>Price</th>
						<td>THB {{ number_format($product->price) }}</td>
					</tr>
					<tr>
						<th>Stock Remain</th>
						@if($product->stock > 0)
							<td class="green">In stock ( {{ number_format($product->stock) }} )</td>
						@else
							<td class="red">Out of stock</td>
						@endif
					</tr>
					<tr>
						<th>Short Description</th>
						<td>{!! $product->shortdesc !!}</td>
					</tr>
					<tr>
						<th>Long Description</th>
						<td>{!! $product->longdesc !!}</td>
					</tr>
					<tr>
						<th>Specfications</th>
						<td>{!! $product->specfications !!}</td>
					</tr>
					<tr>
						<th>Created</th>
						<td>{{ $product->created_at->format('d/m/Y H:i:s') }}</td>
					</tr>
					<tr>
						<th>Updated</th>
						<td>{{ $product->updated_at->format('d/m/Y H:i:s') }}</td>
					</tr>
					<tr>
						<th>Edit product</th>
						<td>
							<a class="btn btn-warning" title="Edit" href="{{ route('backoffice.product.edit', $product->id) }}"><i class="fa fa-edit"> Edit</i></a>
						</td>
					</tr>
				</table>
			</div>
		</div>

	</div>
	
	
</div>
@endsection

@section('bottom-js')
	<script src="{{ asset('backend-style/js/jquery.prettyPhoto.js') }}"></script>

	<script type="text/javascript">
		$(".prettyphoto").prettyPhoto({
			overlay_gallery: false, social_tools: false
		});
	</script>
@endsection