<!DOCTYPE html>
<html>
	<head>
		<!-- Title here -->
		<title>Register - Intouch Technology E-Commerce Backoffice</title>
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
					  <li class="active"><a href="#login" data-toggle="tab" class="br-orange"><i class="fa fa-edit	"></i> Register</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">			  
					  <div class="tab-pane fade active in" id="register">
						<!-- Register form -->
					  
						<div class="alert alert-warning">When you registered, you still can't login <strong>until you receive activated from another users.</strong></div>

						
						<form role="form" method="post" action="{{ url('/backoffice/register') }}">
						  <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
							<label for="name">Full Name</label>
							<input  type="text" name="fullname" class="form-control" id="fullname" value="{{ old('fullname') ?: '' }}" placeholder="Enter your fullname">
							@if ($errors->has('fullname'))
		                       	<span class="help-block">{{ $errors->first('fullname') }}</span>
		                    @endif
						  </div>
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		                    	<label for="email" class="control-label">Your email address</label>
		                    	<input type="text" name="email" class="form-control" id="email" value="{{ old('email') ?: '' }}" placeholder="Enter your email">
		                    	@if ($errors->has('email'))
		                        	<span class="help-block">{{ $errors->first('email') }}</span>
		                    	@endif
		                	</div>
						  	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    			<label for="password" class="control-label">Choose a password</label>
                    			<input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                    			@if ($errors->has('password'))
                        			<span class="help-block">{{ $errors->first('password') }}</span>
                    			@endif
                			</div>
                			<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            	<label class="control-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Re-Enter your password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        	</div>
                        	<input type="hidden" name="activated" value="0">
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