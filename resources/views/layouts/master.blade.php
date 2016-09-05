<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Intouch Technology: eCommerce Website</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">
	<!-- Mobile Specific Metas
  ================================================== -->
	{{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> --}}
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}" media="screen">
	<!-- jquery ui css -->
	<link rel="stylesheet" href="{{ asset('theme/css/jquery-ui-1.10.1.min.css') }}">
	<link rel="stylesheet" href="{{ asset('theme/css/customize.css') }}">
	<link rel="stylesheet" href="{{ asset('theme/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
	<!-- flexslider css-->
	<link rel="stylesheet" href="{{ asset('theme/css/flexslider.css') }}">
	<!-- fancybox -->
	<link rel="stylesheet" href="{{ asset('theme/js/fancybox/jquery.fancybox.css') }}">

	{{-- custom layout style --}}
	<link rel="stylesheet" href="{{ asset('theme/css/layout/Boxed.css') }}">
	<link rel="stylesheet" href="{{ asset('theme/css/backgrounds/low_contrast_linen.css ') }}">
	<link rel="stylesheet" href="{{ asset('theme/css/color/orange.css ') }}">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<link rel="stylesheet" href="css/font-awesome-ie7.css">
	<![endif]-->
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="{{ asset('theme/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('theme/images/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('theme/images/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('theme/images/apple-touch-icon-114x114.png') }}">
</head>

<body>

	<div id="mainContainer" class="clearfix">

		<!--begain header-->
		<header>
			<div class="upperHeader">
				<div class="container">
					<ul class="pull-right inline">
						<li><a class="invarseColor" href="#">My Account</a></li>
						<li class="divider-vertical"></li>
						<li><a class="invarseColor" href="#">My Wish List (5)</a></li>
						<li class="divider-vertical"></li>
						<li><a class="invarseColor" href="#">Shoping Cart</a></li>
						<li class="divider-vertical"></li>
						<li><a class="invarseColor" href="#">Checkout</a></li>
					</ul>
					<p>
					Welcome to Intouch Technology, <a href="login.html">Login</a> or <a href="register.html">Create new account</a>
					</p>
				</div><!--end container-->
			</div><!--end upperHeader-->

			<div class="middleHeader">
				<div class="container">

					<div class="middleContainer clearfix">

					<div class="siteLogo pull-left">
						<h1><a href="index.html">Intouch Technology</a></h1>
					</div>

					<div class="pull-right">
						<form method="get" action="page" class="siteSearch">
							<div class="input-append">
								<input type="text" class="span2" id="appendedInputButton" placeholder="Search...">
								<button class="btn btn-primary" type="submit" name=""><i class="icon-search"></i></button>
							</div>
						</form>
					</div>

					<div class="pull-right">
						<div class="btn-group">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    <i class="icon-shopping-cart"></i> 3 Items
							    <span class="caret"></span>
							</a>
							<div class="dropdown-menu cart-content pull-right">
								<table class="table-cart">
									<tbody>
									<tr>
										<td class="cart-product-info">
											<a href="#"><img style="width:72px;height:72px;" src="{{ asset('img/products/1.jpg') }}" alt="product image"></a>
											<div class="cart-product-desc">
												<p><a class="invarseColor" href="#">Product Cart #1</a></p>
												<ul class="unstyled">
													<li>Available: Yes</li>
												</ul>
											</div>
										</td>
										<td class="cart-product-setting">
											<p><strong>1x-$500.00</strong></p>
											<a href="#" class="remove-pro" data-toggle="tooltip" data-title="Delete"><i class="icon-trash"></i></a>
										</td>
									</tr>
									<tr>
										<td class="cart-product-info">
											<a href="#"><img style="width:72px;height:72px;" src="{{ asset('img/products/5.jpg') }}" alt="product image"></a>
											<div class="cart-product-desc">
												<p><a class="invarseColor" href="#">Product Cart #2</a></p>
												<ul class="unstyled">
													<li>Available: Yes</li>
												</ul>
											</div>
										</td>
										<td class="cart-product-setting">
											<p><strong>2x-$450.00</strong></p>
											<a href="#" class="remove-pro" data-toggle="tooltip" data-title="Delete"><i class="icon-trash"></i></a>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td class="cart-product-info">
											<a href="#" class="btn btn-small">View cart</a>
											<a href="#" class="btn btn-small btn-primary">Checkout</a>
										</td>
										<td>
											<h3>TOTAL<br>$1,598.30</h3>
										</td>
									</tr>
								</tfoot>
								</table>
							</div>
						</div>
					</div><!--end pull-right-->

					</div><!--end middleCoontainer-->

				</div><!--end container-->
			</div><!--end middleHeader-->

			<div class="mainNav">
				<div class="container">
					<div class="navbar">
					      	
				      	<ul class="nav">
				      		<li class="active"><a href="#"><i class="icon-home"></i></a></li>
				      		<li>
				      			<a href="#">Products &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="#"> <span>-</span> Terminals (2)</a></li>
					      				<li><a href="#"> <span>-</span> Electronics (4)</a></li>
					      				<li>
					      					<a href="#"> <span>-</span> Tools (3) <i class="icon-caret-right pull-right"></i></a>
					      					<div>
								      			<ul>
								      				<li><a href="#"> <span>-</span> Cutting (2)</a></li>
								      				<li><a href="#"> <span>-</span> Stripping the insulation (4)</a></li>
								      				<li><a href="#"> <span>-</span> Crimping tools (0)</a></li>
								      			</ul>
								      		</div>
					      				</li>
					      				<li><a href="#"> <span>-</span> Sensor-Actuator-Interface (SAI) (82)</a></li>
					      				<li><a href="#"> <span>-</span> Electronics housing - OMNIMATE housing (58)</a></li>
					      				<li><a href="#"> <span>-</span> Device connectivity - OMNIMATE (15)</a></li>
					      				<li><a href="#"> <span>-</span> Enclosure systems (54) </a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li><a href="#">Promotions</a></li>
				      		<li><a href="#">How to payment</a></li>
				      		<li><a href="#">About US</a></li>
				      		<li><a href="#">Contact</a></li>
				      	</ul><!--end nav-->

					</div>
				</div><!--end container-->
			</div><!--end mainNav-->
			
		</header>
		<!-- end header -->



		<div class="container">

		@yield('content')

		</div><!--end conatiner-->


		<!--begain footer-->
		<footer>
		<div class="footerOuter">
			<div class="container">
				<div class="row-fluid">

					<div class="span6">
						<div class="titleHeader clearfix">
							<h3>Usefull Links</h3>
						</div>

						
						<div class="usefullLinks">
							<div class="row-fluid">
								<div class="span6">
									<ul class="unstyled">
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> About Us</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> How to payment</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Privecy Police</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Tarms &amp; Condations</a></li>
									</ul>
								</div>

								<div class="span6">
									<ul class="unstyled">
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Products</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Promotions</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Contact</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div><!--end span6-->

					<div class="span3">
						<div class="titleHeader clearfix">
							<h3>Contact Info</h3>
						</div>

						<div class="contactInfo">
							<ul class="unstyled">
								<li>
									<button class="btn btn-small">
										<i class="icon-volume-up"></i>
									</button>
									Call Us: <a class="invarseColor" href="#">086-1752745</a>
								</li>
								<li>
									<button class="btn btn-small">
										<i class="icon-envelope-alt"></i>
									</button>
									<a class="invarseColor" href="#">DevNDesign@DevNDesign.com</a>
								</li>
								<li>
									<button class="btn btn-small">
										<i class="icon-map-marker"></i>
									</button>
									Thailand
								</li>
							</ul>
						</div>

					</div><!--end span3-->

					<div class="span3">
						<div class="titleHeader clearfix">
							<h3>Newslatter</h3>
						</div>

						<div class="newslatter">
							<form method="get" action="page">
								<input class="input-block-level" type="text" name="email" value="" placeholder="Your Name...">
								<input class="input-block-level" type="text" name="email" value="" placeholder="Your E-Mail...">
								<button class="btn btn-block" type="submit" name="">Join Us Now</button>
							</form>
						</div>

					</div><!--end span3-->

				</div><!--end row-fluid-->

			</div><!--end container-->
		</div><!--end footerOuter-->

		<div class="container">
			<div class="row">
				<div class="span12">
					<ul class="payments inline pull-right">
						<li class="visia"></li>
						<li class="paypal"></li>
						<li class="electron"></li>
						<li class="discover"></li>
					</ul>
					<p>© Copyrights 2016 for DevNDesign</p>
				</div>
			</div>
		</div>
		</footer>
		<!--end footer-->

	</div><!--end mainContainer-->


{{-- 	<!-- Sidebar Widget
	================================================== -->
	<div class="switcher">
		<h3>Site Switcher</h3>
		<a class="Widget-toggle-link">+</a>

		<div class="switcher-content clearfix">
			<div class="layout-switch">
				<h4>Layout Style</h4>
				<div class="btn-group">
					<a id="wide-style" class="btn">Wide</a>
	  				<a id="boxed-style" class="btn">Boxed</a>
				</div>
			</div><!--end layout-switch-->

			<div class="color-switch clearfix">
				<h4>Color Style</h4>
				<a id="orange-color" class="color-switch-link">orange</a>
				<a id="blue-color" class="color-switch-link">blue</a>
				<a id="green-color" class="color-switch-link">green</a>
				<a id="brown-color" class="color-switch-link">brown</a>
				<a id="red-color" class="color-switch-link">red</a>
			</div><!--end color-switch-->

			<div class="pattern-switch">
				<h4>BG Pattern</h4>
				<a style="background:url({{ asset('theme/img/backgrounds/retina_wood.png')  }});">retina_wood</a>
				<a style="background:url({{ asset('theme/img/backgrounds/bgnoise_lg.png')  }});">bgnoise_lg</a>
				<a style="background:url({{ asset('theme/img/backgrounds/purty_wood.png')  }});">purty_wood</a>
				<a style="background:url({{ asset('theme/img/backgrounds/irongrip.png')  }});">irongrip</a>
				<a style="background:url({{ asset('theme/img/backgrounds/low_contrast_linen.png')  }});">low_contrast_linen</a>
				<a style="background:url({{ asset('theme/img/backgrounds/tex2res5.png')  }});">tex2res5</a>
				<a style="background:url({{ asset('theme/img/backgrounds/wood_pattern.png')  }});">wood_pattern</a>
			</div><!--end pattern-switch-->

		</div><!--end switcher-content-->
	</div>
	<!-- End Sidebar Widget--> --}}


	<!-- JS
	================================================== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
	<!-- jQuery.Cookie -->
	<script src="{{ asset('theme/js/jquery.cookie.js') }}"></script>
	<!-- bootstrap -->
    <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
    <!-- flexslider -->
    <script src="{{ asset('theme/js/jquery.flexslider-min.js') }}"></script>
    <!-- cycle2 -->
    <script src="{{ asset('theme/js/jquery.cycle2.min.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.cycle2.carousel.min.js') }}"></script>
    <!-- tweets -->
    <script src="{{ asset('theme/js/jquery.tweet.js') }}"></script>
    <!-- fancybox -->
    <script src="{{ asset('theme/js/fancybox/jquery.fancybox.js') }}"></script>
    <!-- custom function-->
    <script src="{{ asset('theme/js/custom.js') }}"></script>
    
</body>

</html>