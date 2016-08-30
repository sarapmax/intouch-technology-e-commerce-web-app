@extends('backoffice.layouts.master')

@section('content')

<div class="page-content">
	<!-- Heading -->
	<div class="single-head">
		<!-- Heading -->
		<h3 class="pull-left"><i class="fa fa-plus-square"> </i> Add Category</h3>
		<!-- Bread crumbs -->
		<div class="breads pull-right">
			<a href="{{ url('backoffice/category') }}" class="btn btn-black"><i class="fa fa-tasks"> </i> Category</a>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="page-form">
		<form class="form-horizontal" role="form" method="post" action="{{ url('backoffice/category') }}">
			<div class="form-group">
				<label class="col-md-2 control-label">Title : </label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="title" placeholder="Enter Category Title">
					@if ($errors->has('title'))
                        <span style="color:#a94442;" class="help-block">{{ $errors->first('title') }}</span>
                    @endif
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-warning"><i class="fa fa-check-square"> </i> Submit</button>
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</div>
		</form>
</div>
	
</div>

@endsection