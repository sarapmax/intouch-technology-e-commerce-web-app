<!DOCTYPE html>
<html>
	<head>
		<!-- Title here -->
		<title>Backoffice - Intouch Technology E-Commerce</title>
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
		<!-- jQuery Datatables -->
		<link href="{{ asset('backend-style/css/jquery.dataTables.css') }}" rel="stylesheet">
		
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
								<li><a href="{{ route('backoffice.dashboard.index') }}" class="active"><i class="fa fa-desktop"></i> Dashboard</a></li>
							</ul>
						</div>
						
						<div class="side-nav-block">
							<h4>Menu</h4>
							<ul class="list-unstyled">
								<li><a href="{{ route('backoffice.category.index') }}"><i class="fa fa-tasks"></i> Category</a></li>
								<li><a href="{{ route('backoffice.product.index') }}"><i class="fa fa-cubes"></i> Product</a></li>
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
		<script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('backend-style/js/bootstrap.min.js') }}"></script>

		<!-- jQuery UI -->
		<script src="{{ asset('backend-style/js/jquery-ui.min.js') }}"></script>
		<!-- Date Time Picker JS -->
		<script src="{{ asset('backend-style/js/bootstrap-datetimepicker.min.js') }}"></script>	
		<!-- Bootstrap wysihtml5 JS -->		
		<script src="{{ asset('backend-style/js/wysihtml5-0.3.0.js') }}"></script>
		<script src="{{ asset('backend-style/js/prettify.js/') }}"></script>
		<script src="{{ asset('backend-style/js/bootstrap-wysihtml5.min.js') }}"></script>

		<!-- Data Tables JS -->
		<script src="{{ asset('backend-style/js/jquery.dataTables.min.js') }}"></script>	
		<!-- Respond JS for IE8 -->
		<script src="{{ asset('backend-style/js/respond.min.js') }}"></script>
		<!-- HTML5 Support for IE -->
		<script src="{{ asset('backend-style/js/html5shiv.js') }}"></script>
		
		<!-- Javascript for this page -->      
		<!-- Custom JS -->
		<script src="{{ asset('backend-style/js/custom.js') }}"></script>

		{{-- TynyMCE Text Editor --}}
		<script src="{{ asset('tinymce/tinymce.min.js') }}"></script>

		<script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
		

		<script>
		/* ****************************************** */
		/* Data Table JS */
		/* ****************************************** */

		$(document).ready(function() {
			$('#data-table').dataTable({
			   "sPaginationType": "full_numbers"
			});

			tinymce.init({
		    	selector: '#shortdesc',
		    	plugins: 'link',
		    	content_css: [
			    	'//https://fonts.google.com/?selection.family=Open+Sans',
			    	'//www.tinymce.com/css/codepen.min.css'
			  	]
		  	});

		  	// tinymce.init({
		   //  	selector: '#longdesc',
		   //  	plugins: [
			  //   	'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			  //   	'searchreplace wordcount visualblocks visualchars code fullscreen',
			  //   	'insertdatetime media nonbreaking save table contextmenu directionality',
			  //   	'emoticons template paste textcolor colorpicker textpattern imagetools'
			  // 	],
			  // 	toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
			  // 	toolbar2: 'print preview media | forecolor backcolor emoticons',
			  // 	image_advtab: true,
			  // 	content_css: [
			  //   	'//https://fonts.google.com/?selection.family=Open+Sans',
			  //   	'//www.tinymce.com/css/codepen.min.css'
			  // 	]
		  	// });

		  	tinymce.init({
		    	selector: '#specfication',
		    	plugins: 'link table',
		    	content_css: [
			    	'//https://fonts.google.com/?selection.family=Open+Sans',
			    	'//www.tinymce.com/css/codepen.min.css'
			  	]
		  	});

		  	var editor_config = {
			    path_absolute : "{{ url('/') }}/",
			    selector: "#longdesc",
			    plugins: [
			      	"advlist autolink lists link image charmap print preview hr anchor pagebreak",
			      	"searchreplace wordcount visualblocks visualchars code fullscreen",
			      	"insertdatetime media nonbreaking save table contextmenu directionality",
			      	"emoticons template paste textcolor colorpicker textpattern"
			    ],
			    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
			    relative_urls: false,
			    file_browser_callback : function(field_name, url, type, win) {
			      	var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
			      	var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

			      	var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
			      	if (type == 'image') {
			      	  cmsURL = cmsURL + "&type=Images";
			      	} else {
			      	  cmsURL = cmsURL + "&type=Files";
			      	}

			      	tinyMCE.activeEditor.windowManager.open({
			        	file : cmsURL,
			        	title : 'Filemanager',
			        	width : x * 0.8,
			        	height : y * 0.8,
			        	resizable : "yes",
			        	close_previous : "no"
			      	});
			    }
			};

			tinymce.init(editor_config);
		});

		$('#lfm').filemanager('image');
		</script>

		
	</body>	
</html>