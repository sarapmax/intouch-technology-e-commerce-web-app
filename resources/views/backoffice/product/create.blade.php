@extends('backoffice.layouts.master')

@section('content')

<div class="page-content">
	<!-- Heading -->
	<div class="single-head">
		<!-- Heading -->
		<h3 class="pull-left"><i class="fa fa-plus-square fa-lg"> </i> Add Product</h3>
		<!-- Bread crumbs -->
		<div class="breads pull-right">
			<a href="{{ route('backoffice.product.index') }}" class="btn btn-warning"><i class="fa fa-tasks"> </i> Product</a>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="page-form">
		{{ Form::open(array('route' => 'backoffice.product.store', 'method' => 'POST', 'class' => 'form-horizontal')) }}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label class="col-md-2 control-label">Category : </label>
				<div class="col-md-6">
					<select name="category_id" class="form-control">
						<option value="">Select Category</option>
					</select>
					@if ($errors->has('category_id'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('category_id') }}</span>
                    @endif
				</div>
			</div>
			<hr/>
			<div class="form-group">
				<label class="col-md-2 control-label">Product Name : </label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="name" placeholder="Enter product name" value="{{ old('name') }}">
					@if ($errors->has('name'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('name') }}</span>
                    @endif
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Price : </label>
				<div class="col-md-2">
					<div class="input-group">
						<input type="number" class="form-control" name="price" placeholder="Enter product price" value="{{ old('price') }}">
						<span class="input-group-addon">฿</span>
					</div>
					@if ($errors->has('price'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('price') }}</span>
                    @endif
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Stock Amount : </label>
				<div class="col-md-2">
					<input type="number" class="form-control" name="stock" placeholder="Enter product stock amount" value="{{ old('stock') }}">
					@if ($errors->has('stock'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('stock') }}</span>
                    @endif
				</div>
			</div>
			<hr/>
			<div class="form-group">
				<label class="col-md-2 control-label">Product Short Description : </label>
				<div class="col-md-10">
					<textarea name="shortdesc" id="shortdesc" rows="6">{!! old('shortdesc') !!}</textarea>
					@if ($errors->has('shortdesc'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('shortdesc') }}</span>
                    @endif
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Product Description : </label>
				<div class="col-md-10">
					<textarea name="longdesc" id="longdesc" rows="15">{!! old('longdesc') !!}</textarea>
					@if ($errors->has('longdesc'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('longdesc') }}</span>
                    @endif
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Product Specfication : </label>
				<div class="col-md-10">
					<textarea name="specfication" id="specfication" rows="10">{!! old('specfication') !!}</textarea>
					@if ($errors->has('specfication'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('specfication') }}</span>
                    @endif
				</div>
			</div>
			  <div class="input-group">
      <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
          <i class="fa fa-picture-o"></i> Choose
        </a>
      </span>
      <input id="thumbnail" class="form-control" type="text" name="filepath">
    </div>
    <img id="holder" style="margin-top:15px;max-height:100px;">
		{{ Form::close() }}
</div>
	
</div>

@endsection