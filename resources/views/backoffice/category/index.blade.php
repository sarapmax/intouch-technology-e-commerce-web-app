@extends('backoffice.layouts.master')

@section('content')

<div class="page-content">
	<!-- Heading -->
	<div class="single-head">
		<!-- Heading -->
		<h3 class="pull-left"><i class="fa fa-tasks orange"></i> Category</h3>
		<!-- Bread crumbs -->
		<div class="breads pull-right">
			<a href="{{ url('backoffice/category/create') }}" class="btn btn-black"><i class="fa fa-plus-square"> </i> Add Category</a>
		</div>
		<div class="clearfix"></div>
	</div>
	
	
</div>

@endsection