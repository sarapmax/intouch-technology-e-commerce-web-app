@extends('backoffice.layouts.master')

@section('content')

<div class="page-content">
	<!-- Heading -->
	<div class="single-head">
		<!-- Heading -->
		<h3 class="pull-left"><i class="fa fa-edit fa-lg"> </i> Edit Product</h3>
		<!-- Bread crumbs -->
		<div class="breads pull-right">
			<a href="{{ route('backoffice.product.index') }}" class="btn btn-warning"><i class="fa fa-cubes"> </i> Product</a>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="page-form">
  
		{{ Form::model($product, ['method' => 'PATCH','route' => ['backoffice.product.update', $product->id], 'class' => 'form-horizontal', 'files' => true]) }}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="live" value="1">
			<div class="form-group">
				<label class="col-md-2 control-label"><span style="color:#a94442">* </span> Category : </label>
				<div class="col-md-6">
					<select name="category_id" class="form-control">
						<option value="">Select Category</option>
						@foreach($categories as $category)
							<option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected="selected" @endif @if (old('category_id') == $category->id) selected="selected" @endif >{{ $category->title }}</option>
						@endforeach
					</select>
					@if ($errors->has('category_id'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('category_id') }}</span>
                    @endif
				</div>
			</div>
			<hr/>
			<div class="form-group">
				<label class="col-md-2 control-label"><span style="color:#a94442">* </span> Product Name : </label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" value="{{ old('name', $product->name) }}">
					@if ($errors->has('name'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('name') }}</span>
                    @endif
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label"><span style="color:#a94442">* </span> Price : </label>
				<div class="col-md-2">
					<div class="input-group">
						<input type="number" class="form-control" name="price" placeholder="Enter product price" value="{{ old('price', $product->price) }}">
						<span class="input-group-addon">฿</span>
					</div>
					@if ($errors->has('price'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('price') }}</span>
                    @endif
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label"><span style="color:#a94442">* </span> Stock Amount : </label>
				<div class="col-md-2">
					<input type="number" class="form-control" name="stock" placeholder="Enter product stock amount" value="{{ old('stock', $product->stock) }}">
					@if ($errors->has('stock'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('stock') }}</span>
                    @endif
				</div>
			</div>
			<hr/>
			<div class="form-group">
				<label class="col-md-2 control-label">Product Short Description : </label>
				<div class="col-md-10">
					<textarea name="shortdesc" id="shortdesc" rows="6">{!! old('shortdesc', $product->shortdesc) !!}</textarea>
					@if ($errors->has('shortdesc'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('shortdesc') }}</span>
                    @endif
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Product Description : </label>
				<div class="col-md-10">
					<textarea name="longdesc" id="longdesc" rows="15">{!! old('longdesc', $product->longdesc) !!}</textarea>
					@if ($errors->has('longdesc'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('longdesc') }}</span>
                    @endif
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Product Specfication : </label>
				<div class="col-md-10">
					<textarea name="specfications" id="specfications" rows="10">{!! old('specfications', $product->specfications) !!}</textarea>
					@if ($errors->has('specfications'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('specfications') }}</span>
                    @endif
				</div>
			</div>
			<hr/>
			<div class="form-group">
				<label class="col-md-2 control-label"><span style="color:#a94442">* </span> Product Thumbnail Image : </label>
				<div class="col-md-3">
					<input type="file" name="thumb_image" class="form-control">
					@if ($errors->has('thumb_image'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('thumb_image') }}</span>
                    @endif
				</div>
				<div class="col-md-7">
					@if($product->thumb_image)
						<img style="width:100px;" src="{{ asset('thumb_image_thumb/'.$product->thumb_image) }}" class="img-responsive img-thumbnail" alt="">
                    @endif
				</div>
			</div><hr/>
			<div class="form-group">
				<label class="col-md-2 control-label">Product Images ( multiple images ) : </label>
				<div class="col-md-3">
					<input type="file" name="images[]" class="form-control" multiple>
					@if ($errors->has('images'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('images') }}</span>
                    @endif
				</div>
				<div class="col-md-7">
					@if($product->images)
						<?php $images = explode("|",$product->images); ?>
						@foreach(array_slice($images ,1) as $image)
							<img style="width:100px;" src="{{ asset('images_thumb/'.$image) }}" class="img-responsive img-thumbnail" alt=""/>
						@endforeach
                    @endif
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<button type="submit" class="btn btn-warning"><i class="fa fa-check"></i> Submit</button>
				</div>
			</div>
        </div>
		{{ Form::close() }}
	</div>
	
</div>

@endsection