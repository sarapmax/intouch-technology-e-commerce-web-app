@extends('layouts.master')

@section('content')

<div class="row">

	<div class="span8">
		<div class="flexslider">
			<ul class="slides">
				<li>
					{{-- <img src="img/614x300.jpg" alt="slide1"> --}}
					<img src="{{ asset('img/slide-4.jpg') }}" alt="slide4">
				</li>
				<li>
					{{-- <img src="img/614x300.jpg" alt="slide1"> --}}
					<img src="{{ asset('img/slide-1.jpg') }}" alt="slide1">
				</li>
				<li>
					{{-- <img src="img/614x300.jpg" alt="slide2"> --}}
					<img src="{{ asset('img/slide-2.jpg') }}" alt="slide1">
				</li>
				<li>
					{{-- <img src="img/614x300.jpg" alt="slide3"> --}}
					<img src="{{ asset('img/slide-3.jpg') }}" alt="slide1">
				</li>
			</ul>
		</div><!--end flexslider-->
	</div><!--end span8-->


	<div class="span4">

		<div id="homeSpecial">
			<div class="titleHeader clearfix">
				<h3>Special</h3>
				<div class="pagers">
					<div class="btn-toolbar">
						<div class="btn-group">
							<button class="btn btn-mini vNext"><i class="icon-caret-down"></i></button>
							<button class="btn btn-mini vPrev"><i class="icon-caret-up"></i></button>
						</div>
						<button class="btn btn-mini">View All</button>
					</div>
				</div>
			</div><!--end titleHeader-->


			<ul class="vProductItems cycle-slideshow vertical clearfix"
		    data-cycle-fx="carousel"
		    data-cycle-timeout=0
		    data-cycle-slides="> li"
		    data-cycle-next=".vPrev"
		    data-cycle-prev=".vNext"
		    data-cycle-carousel-visible="2"
		    data-cycle-carousel-vertical="true"
		    >
				<li class="span4 clearfix">
					<div class="thumbImage">
						<a href=""><img style="width:92px;height:92px;" src="{{ asset('img/special/1.jpg') }}" alt=""></a>
					</div>
					<div class="thumbSetting">
						<div class="thumbTitle">
							<a href="#" class="invarseColor">
								Product Special #1
							</a>
						</div>
						<div class="thumbPrice">
							<span>$150.00</span>
						</div>
					</div>
				</li>
				<li class="span4 clearfix">
					<div class="thumbImage">
						<a href=""><img style="width:92px;height:92px;" src="{{ asset('img/special/2.jpg') }}" alt=""></a>
					</div>
					<div class="thumbSetting">
						<div class="thumbTitle">
							<a href="#" class="invarseColor">
								Product Special #2
							</a>
						</div>
						<div class="thumbPrice">
							<span>$150.00</span>
						</div>
					</div>
				</li>
				<li class="span4 clearfix">
					<div class="thumbImage">
						<a href=""><img style="width:92px;height:92px;" src="{{ asset('img/special/3.jpg') }}" alt=""></a>
					</div>
				</li>
			</ul>
		</div><!--end homeSpecial-->

	</div><!--end span4-->

</div><!--end row-->



<div class="row">

	<div class="span12">
		<div id="featuredItems">
			<!-- <div class="span12"> -->
			<div class="titleHeader clearfix">
				<h3>Recent Products</h3>
				<div class="pagers">
					<div class="btn-toolbar">
						<button class="btn btn-mini">View All</button>
					</div>
				</div>
			</div><!--end titleHeader-->
			<!-- </div> -->

			<div class="row">
				<ul class="hProductItems clearfix">
					@foreach($products->slice(0, 4) as $product)
					<li class="span3 clearfix">
						<div class="thumbnail">
							<a href=""><img style="width:212px;height:192px;" src="{{ asset('thumb_image_thumb/'.$product->thumb_image) }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									{{ $product->name }}
								</a>
							</div>
							<div class="thumbPrice">
								<span>THB {{ number_format($product->price) }}</span>
							</div>

							<div class="thumbButtons">
								<button class="btn btn-primary btn-small">
									<i class="icon-shopping-cart"></i> Add to card
								</button>
								<button class="btn btn-small">
									<i class="icon-heart"></i> Wish list
								</button>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div><!--end row-->
		</div><!--end featuredItems-->

		@foreach($categories as $category)
		@if(count($category->product) != 0)
		<div id="featuredItems">
			<!-- <div class="span12"> -->
			<div class="titleHeader clearfix">
				<h3>{{ $category->title }}</h3>
				<div class="pagers">
					<div class="btn-toolbar">
						<button class="btn btn-mini">View All</button>
					</div>
				</div>
			</div>
			
			<!--end titleHeader-->
			<!-- </div> -->
			<div class="row">
				<ul class="hProductItems clearfix">
					@foreach($category->product as $product)
					<li class="span3 clearfix">
						<div class="thumbnail">
							<a href=""><img style="width:212px;height:192px;" src="{{ asset('thumb_image_thumb/'.$product->thumb_image) }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									{{ $product->name }}
								</a>
							</div>
							<div class="thumbPrice">
								<span>THB {{ number_format($product->price) }}</span>
							</div>

							<div class="thumbButtons">
								<button class="btn btn-primary btn-small">
									<i class="icon-shopping-cart"></i> Add to card
								</button>
								<button class="btn btn-small">
									<i class="icon-heart"></i> Wish list
								</button>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div><!--end row-->
		</div><!--end featuredItems-->
		@endif
		@endforeach
	</div><!--end span12-->

</div><!--end row-->


<div class="row">

	<div class="span4">
		<div id="aboutUs">
			<div class="titleHeader clearfix">
				<h3>About Us</h3>
				<div class="pagers">
					<div class="btn-toolbar">
						<button class="btn btn-mini">Know More</button>
					</div>
				</div>
			</div><!--end titleHeader-->
		
			<p>
				Quisque odio sem, molestie interdum sollicitudin ut, mollis a metus. Donec dignissim, odio nec elementum mattis, elit ligula sollicitudin massa, et venenatis neque nibh at urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque egestas, velit non adipiscing pretium, tortor nulla fringilla nisl, ut aliquet felis nisl eu orci. 
			</p>
		</div>
	</div><!--end span4-->

	<div class="span4">
		<div id="twitterFeed">
			<div class="titleHeader clearfix">
				<h3>Twitter Feed</h3>
				<div class="pagers">
					<div class="btn-toolbar">
						<button class="btn btn-mini btn-info"><i class="icon-twitter"></i> Follow Us</button>
					</div>
				</div>
			</div><!--end titleHeader-->

			<div class="tweet">
				<!-- tweets will generate automaticlly here-->
			</div><!--end tweet-->

		</div><!--end twitterFeed-->
	</div><!--end span4-->

	<div class="span4">
		<div id="facebookFeed">
			<div class="titleHeader clearfix">
				<h3>Facebook Like</h3>
			</div><!--end titleHeader-->
		</div><!--end facebookFeed-->
	</div><!--end span4-->

</div><!--end row-->


@endsection