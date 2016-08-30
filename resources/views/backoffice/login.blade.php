<!DOCTYPE html>
<html>
	<head>
		<!-- Title here -->
		<title>Login - Intouch Technology E-Commerce Backoffice</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{{ asset('backend-style/css/bootstrap.min.css') }}" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="{{ asset('backend-style/css/font-awesome.min.css') }}" rel="stylesheet">	
		<!-- Custom Color CSS -->
		<link href="{{ asset('backend-style/css/less-style.css') }}" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="{{ asset('backend-style/css/style.css') }}" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>

		<div class="outer-page">
			
			 <!-- Login page -->
			 <div class="login-page">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified">
					  <li class="active"><a href="#login" data-toggle="tab" class="br-orange"><i class="fa fa-sign-in"></i> Login</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					  <div class="tab-pane fade active in" id="login">
					  
						<!-- Login form -->
						
						<form role="form" method="post" action="{{ url('/backoffice/login') }}">
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	                    		<label for="email" class="control-label">Email</label>
	                    		<input type="text" name="email" class="form-control" id="email" placeholder="Enter your email">
	                   			@if ($errors->has('email'))
	                        		<span class="help-block">{{ $errors->first('email') }}</span>
	                    		@endif
	                		</div>
							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                    		<label for="password" class="control-label">Password</label>
	                    		<input type="password" name="password" class="form-control" id="password" placeholder="Enter your email">
			                    @if ($errors->has('password'))
			                        <span class="help-block">{{ $errors->first('password') }}</span>
			                    @endif
	               	 		</div>
						  	<div class="checkbox">
                    			<label><input type="checkbox" name="remember"> Remember me</label>
                			</div>
						  <input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <button type="submit" class="btn btn-warning btn-sm">Submit</button>
						  <button type="reset" class="btn btn-default btn-sm">Reset</button>
						</form>
						
					  </div>
					  
					</div>
					
			 </div>	
			
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="{{ asset('backend-style/js/jquery.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('backend-style/js/bootstrap.min.js') }}"></script>
		<!-- Respond JS for IE8 -->
		<script src="{{ asset('backend-style/js/respond.min.js') }}"></script>
		<!-- HTML5 Support for IE -->
		<script src="{{ asset('backend-style/js/html5shiv.js') }}"></script>
		
		<!-- Javascript for this page -->
		
		<!-- Javascript for this page -->
      
        <script type="text/javascript">

		</script>
		
	</body>	
</html>