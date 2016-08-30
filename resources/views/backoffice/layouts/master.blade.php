<!DOCTYPE html>
<html>
	<head>
		<!-- Title here -->
		<title>Backend - Intouch Technology</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{{ asset('backend-style/css/bootstrap.css') }}" rel="stylesheet">
		<!-- jQuery gritter -->
		<link href="{{ asset('backend-style/css/jquery.gritter.css') }}" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<!-- Custom Color CSS -->
		<link href="{{ asset('backend-style/css/less-style.css') }}" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="{{ asset('backend-style/css/style.css') }}" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>

		<div class="outer">
			
			<!-- Sidebar starts -->
			<div class="sidebar">
			
				<div class="sidey">
			
					<!-- Logo -->
					<div class="logo">
						<h1><a href="index.html"><i class="fa fa-home br-orange"></i> Intouch <span>Technology</span></a></h1>
					</div>
					
					<!-- Sidebar navigation starts -->
					
					<!-- Responsive dropdown -->
					<div class="sidebar-dropdown"><a href="#" class="br-orange"><i class="fa fa-bars"></i></a></div>
					
					<div class="side-nav">
					
						<div class="side-nav-block">
							<!-- Sidebar heading -->
							<h4>Main</h4>
							<!-- Sidebar links -->
							<ul class="list-unstyled">
								<li><a href="{{ url('backoffice/dashboard') }}" class="active"><i class="fa fa-desktop"></i> Dashboard</a></li>
							</ul>
						</div>
						
						<div class="side-nav-block">
							<h4>Menu</h4>
							<ul class="list-unstyled">
								<li><a href="{{ url('backoffice/category') }}"><i class="fa fa-tasks"></i> Category</a></li>
								<li><a href="login.html"><i class="fa fa-cubes"></i> Product</a></li>
								<li><a href="404.html"><i class="fa fa-clone"></i> Order</a></li>
								<li><a href="grid.html"><i class="fa fa-sticky-note"></i> Report</a></li>
							</ul>
						</div>

						<div class="side-nav-block">
							<h4>Config</h4>
							<ul class="list-unstyled">
								<li><a href="0-base.html"><i class="fa fa-gear"></i> Config Shop</a></li>
							</ul>
						</div>
						
						
					</div>
					
					<!-- Sidebar navigation ends -->
					
				</div>
			</div>
			<!-- Sidebar ends -->
			
			<!-- Mainbar starts -->
			<div class="mainbar">
			
				<!-- Mainbar head starts -->
				<div class="main-head">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-4 col-xs-6">
								<!-- Page title -->
								<h2><i class="fa fa-shopping-cart"></i> E-Commerce Backoffice Management</h2>
							</div>
							
							
							<div class="col-md-offset-6 col-md-3 hidden-sm hidden-xs">
								<!-- Head user -->
								<div class="head-user dropdown pull-right">
									<a href="#" data-toggle="dropdown" id="profile">
										<!-- Icon 
										<i class="fa fa-user"></i>  -->
										
										{{-- <img src="img/user2.png" alt="" class="img-responsive img-circle"/> --}}
										
										<!-- User name -->
										<i class="fa fa-user"> </i> {{ Auth::guard('admin')->user()->fullname }} 
										{{-- <span class="label label-danger">5</span>  --}}
										<i class="fa fa-caret-down"></i> 
									</a>
									<!-- Dropdown -->
									<ul class="dropdown-menu" aria-labelledby="profile">
										<li><a href="{{ url('/backoffice/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
					</div>
					
				</div>
				<br/>
				<!-- Mainbar head ends -->
				
				{{-- alert --}}
				@include('backoffice.layouts.partials.alert')
				
				<div class="main-content">
					<div class="container">
						@yield('content')										
					</div>
				</div>
				
			</div>
			<!-- Mainbar ends -->
			
			<div class="clearfix"></div>
		</div>
		
		<!-- Javascript files -->
	<!-- jQuery -->
		<script src="{{ asset('backend-style/js/jquery.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('backend-style/js/bootstrap.min.js') }}"></script>
		<!-- jQuery UI -->
		<script src="{{ asset('backend-style/js/jquery-ui.min.js') }}"></script>
		<!-- Date Time Picker JS -->
		<script src="{{ asset('backend-style/js/bootstrap-datetimepicker.min.js') }}"></script>	
		<!-- Bootstrap wysihtml5 JS -->		
		<script src="{{ asset('backend-style/js/wysihtml5-0.3.0.js') }}"></script>
		<script src="{{ asset('backend-style/prettify.js/') }}"></script>
		<script src="{{ asset('backend-style/js/bootstrap-wysihtml5.min.js') }}"></script>
	
		<!-- jQuery flot -->
		<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
{{-- 		<script src="js/jquery.flot.min.js"></script>     
		<script src="js/jquery.flot.stack.min.js"></script>
		<script src="js/jquery.flot.pie.min.js"></script>
		<script src="js/jquery.flot.resize.min.js"></script> --}}
		
		<!-- Validate JS -->
		{{-- <script src="js/jquery.validate.js"></script> --}}
		<!-- Form wizard steps  JS -->
		{{-- <script src="js/jquery.steps.min.js"></script> --}}
		<!-- jQuery Knob -->
		{{-- <script src="js/jquery.knob.js"></script> --}}
		<!-- jQuery Sparklines -->
		{{-- <script src="js/jquery.sparklines.js"></script> --}}
		<!-- jQuery slim scroll -->
		{{-- <script src="js/jquery.slimscroll.min.js"></script> --}}
		<!-- Data Tables JS -->
		{{-- <script src="js/jquery.dataTables.min.js"></script>	 --}}
		<!-- Pretty Photo JS -->
		{{-- <script src="js/jquery.prettyPhoto.js"></script>	 --}}
		<!-- Rate It JS -->
		{{-- <script src="js/jquery.rateit.min.js"></script>	 --}}
		<!-- Full calendar -->
	    {{-- <script src="js/moment.min.js"></script> --}}
	    {{-- <script src="js/fullcalendar.min.js"></script> --}}
		<!-- jQuery gritter -->
		{{-- <script src="js/jquery.gritter.min.js"></script> --}}
		<!-- jQuery gritter notification -->
		{{-- <script src="js/custom.notification.js"></script> --}}
		<!-- Respond JS for IE8 -->
		<script src="{{ asset('backend-style/js/respond.min.js') }}"></script>
		<!-- HTML5 Support for IE -->
		<script src="{{ asset('backend-style/js/html5shiv.js') }}"></script>
		
		<!-- Javascript for this page -->      
		<!-- Custom JS -->
		<script src="{{ asset('backend-style/js/custom.js') }}"></script>
		
	</body>	
</html>