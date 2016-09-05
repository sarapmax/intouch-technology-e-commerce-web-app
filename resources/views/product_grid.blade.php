@extends('layouts.master')

@section('content')

<div class="row">

		<aside class="span3">

			<div class="categories">
				<div class="titleHeader clearfix">
					<h3>Categories</h3>
				</div><!--end titleHeader-->
				<ul class="unstyled">
					<li><a class="invarseColor" href="#">Terminals (2)</a></li>
					<li><a class="invarseColor" href="#">Electronics (4)</a></li>
					<li><a class="invarseColor active" href="#">Tools (3)</a>
						<ul class="submenu">
							<li><a class="invarseColor" href="#">Cutting (2)</a></li>
							<li><a class="invarseColor active" href="#">Stripping the insulation (4)</a></li>
							<li><a class="invarseColor" href="#">Crimping tools (0)</a></li>
						</ul>
					</li>
					
					<li><a class="invarseColor" href="#">Sensor-Actuator-Interface (SAI) (82)</a></li>
					<li><a class="invarseColor" href="#">Electronics housing - OMNIMATE housing (58)</a></li>
					<li><a class="invarseColor" href="#">Device connectivity - OMNIMATE (15)</a></li>
					<li><a class="invarseColor" href="#">Enclosure systems (54)</a></li>
				</ul>
			</div><!--end categories-->

			<div class="pro-range-slider">
				<div class="titleHeader clearfix">
					<h3>Shop By Price</h3>
				</div><!--end titleHeader-->
				<div class="price-range">
					<p class="clearfix">
					  <label>Price:</label>
					  <input type="text" id="amount">
					</p>
					<div id="slider-range"></div>
				</div>
			</div><!--end pro-range-slider-->


			<div class="special">
				<div class="titleHeader clearfix">
					<h3>Special</h3>
				</div><!--end titleHeader-->

				<ul class="vProductItemsTiny">
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
							<ul class="rating">
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
							</ul>
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
							<ul class="rating">
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
							</ul>
						</div>
					</li>
					<li class="span4 clearfix">
						<div class="thumbImage">
							<a href=""><img style="width:92px;height:92px;" src="{{ asset('img/special/3.jpg') }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									Product Special #3
								</a>
							</div>
							<div class="thumbPrice">
								<span>$150.00</span>
							</div>
							<ul class="rating">
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
							</ul>
						</div>
					</li>
				</ul>
			</div><!--end special-->

		</aside><!--end aside-->


		<div class="span9">

			<div id="productSlider" class="carousel slide">
				<!-- Carousel items -->
			    <div class="carousel-inner">
			      <div class="active item"><img style="width:694px;height:240px;" src="{{ asset('img/slide-4.jpg') }}" alt="slide4"></div>
			      <div class="item"><img style="width:694px;height:240px;" src="{{ asset('img/slide-1.jpg') }}" alt="slide4"></div>
			      <div class="item"><img style="width:694px;height:240px;" src="{{ asset('img/slide-2.jpg') }}" alt="slide4"></div>
			    </div>

			    <!-- Carousel nav -->
			    <a class="carousel-control left" href="#productSlider" data-slide="prev">&lsaquo;</a>
			    <a class="carousel-control right" href="#productSlider" data-slide="next">&rsaquo;</a>
			</div><!--end productSlider-->


			<div class="productFilter clearfix">

				<div class="sortBy inline pull-left">
					Sort By
					<select name="sortItem">
						<option value="Default">Default</option>
						<option value="">Name (A-A)</option>
						<option value="">Name (Z-A)</option>
						<option value="">Price (Low-Hight)</option>
						<option value="">Price (Height-Low)</option>
						<option value="">Highest Rating</option>
						<option value="">Lowest Rating</option>
						<option value="">Model (A-Z)</option>
						<option value="">Model (Z-A)</option>
					</select>
				</div>

				<div class="showItem inline pull-left">
					Show
					<select name="showItem">
						<option value="15">15</option>
						<option value="25">25</option>
						<option value="50">50</option>
						<option value="75">75</option>
						<option value="100">100</option>
					</select>
				</div><!--end sortBy-->


				<div class="displaytBy inline pull-right">
					Display
					<div class="btn-group">
						<button class="btn btn-primary active"><i class="icon-th"></i></button>
						<button class="btn"><i class="icon-list"></i></button>
					</div>
				</div><!--end displaytBy-->

			</div><!--end productFilter-->


			<div class="row">
				<ul class="hProductItems clearfix">
					<li class="span3 clearfix">
						<div class="thumbnail">
							<a href=""><img style="width:212px;height:192px;" src="{{ asset('img/products/1.jpg') }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									Product Example #1
								</a>
							</div>
							<div class="thumbPrice">
								<span>$150.00</span>
							</div>

							<div class="thumbButtons">
								<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
									<i class="icon-shopping-cart"></i>
								</button>
								<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
									<i class="icon-heart"></i>
								</button>
							
							</div>

							<ul class="rating">
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-off"></i></li>
							</ul>
						</div>
					</li>
					<li class="span3 clearfix">
						<div class="thumbnail">
							<a href=""><img style="width:212px;height:192px;" src="{{ asset('img/products/2.jpg') }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									Product Example #2
								</a>
							</div>
							<div class="thumbPrice">
								<span>$150.00</span>
							</div>

							<div class="thumbButtons">
								<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
									<i class="icon-shopping-cart"></i>
								</button>
								<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
									<i class="icon-heart"></i>
								</button>
							
							</div>

							<ul class="rating">
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
							</ul>
						</div>
					</li>
					<li class="span3 clearfix">
						<div class="thumbnail">
							<a href=""><img style="width:212px;height:192px;" src="{{ asset('img/products/3.jpg') }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									Product Example #3
								</a>
							</div>
							<div class="thumbPrice">
								<span>$150.00</span>
							</div>

							<div class="thumbButtons">
								<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
									<i class="icon-shopping-cart"></i>
								</button>
								<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
									<i class="icon-heart"></i>
								</button>
							
							</div>
						</div>
					</li>
					<li class="span3 clearfix">
						<div class="thumbnail">
							<a href=""><img style="width:212px;height:192px;" src="{{ asset('img/products/4.jpg') }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									Product Example #4
								</a>
							</div>
							<div class="thumbPrice">
								<span><span class="strike-through">$200.00</span> $150.00</span>
							</div>

							<div class="thumbButtons">
								<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
									<i class="icon-shopping-cart"></i>
								</button>
								<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
									<i class="icon-heart"></i>
								</button>
							
							</div>

							<ul class="rating">
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
							</ul>
						</div>
					</li>

					<li class="span3 clearfix">
						<div class="thumbnail">
							<a href=""><img style="width:212px;height:192px;" src="{{ asset('img/products/5.jpg') }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									Product Example #5
								</a>
							</div>
							<div class="thumbPrice">
								<span>$150.00</span>
							</div>

							<div class="thumbButtons">
								<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
									<i class="icon-shopping-cart"></i>
								</button>
								<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
									<i class="icon-heart"></i>
								</button>
							
							</div>
						</div>
					</li>
					<li class="span3 clearfix">
						<div class="thumbnail">
							<a href=""><img style="width:212px;height:192px;" src="{{ asset('img/products/6.jpg') }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									Product Example #6
								</a>
							</div>
							<div class="thumbPrice">
								<span>$150.00</span>
							</div>

							<div class="thumbButtons">
								<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
									<i class="icon-shopping-cart"></i>
								</button>
								<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
									<i class="icon-heart"></i>
								</button>
							
							</div>

							<ul class="rating">
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
							</ul>
						</div>
					</li>
					<li class="span3 clearfix">
						<div class="thumbnail">
							<a href=""><img style="width:212px;height:192px;" src="{{ asset('img/products/7.jpg') }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									Product Example #7
								</a>
							</div>
							<div class="thumbPrice">
								<span><span class="strike-through">$200.00</span> $150.00</span>
							</div>

							<div class="thumbButtons">
								<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
									<i class="icon-shopping-cart"></i>
								</button>
								<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
									<i class="icon-heart"></i>
								</button>
							
							</div>

							<ul class="rating">
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
							</ul>
						</div>
					</li>
					<li class="span3 clearfix">
						<div class="thumbnail">
							<a href=""><img style="width:212px;height:192px;" src="{{ asset('img/products/8.jpg') }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="#" class="invarseColor">
									Product Example #8
								</a>
							</div>
							<div class="thumbPrice">
								<span>$150.00</span>
							</div>

							<div class="thumbButtons">
								<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
									<i class="icon-shopping-cart"></i>
								</button>
								<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
									<i class="icon-heart"></i>
								</button>
							
							</div>
						</div>
					</li>
				</ul>
			</div><!--end row-->

			<div class="pagination pagination-right">
				<span class="pull-left">Showing 9 of 20 pages:</span>
				<ul>
					<li><a class="invarseColor" href="">Prev</a></li>
					<li class="active"><a class="invarseColor" href="">1</a></li>
					<li><a class="invarseColor" href="">2</a></li>
					<li><a class="invarseColor" href="">2</a></li>
					<li><a class="invarseColor" href="">3</a></li>
					<li><a class="invarseColor" href="">Next</a></li>
				</ul>
			</div><!--end pagination-->

		</div><!--end span9-->

	</div><!--end row-->

@endsection