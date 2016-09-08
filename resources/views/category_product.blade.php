@extends('layouts.master')

@section('content')

<div class="row">

		<aside class="span3">

			<div class="categories">
				<div class="titleHeader clearfix">
					<h3>Categories</h3>
				</div><!--end titleHeader-->
				<ul class="unstyled">
					@foreach($product_category as $product_category_count)
					<li><a class="invarseColor" href="{{ route('category', $product_category_count->category->slug) }}">{{ $product_category_count->category->title }} <span style="color:#f16325;">({{ number_format($product_category_count->totalProduct) }})</span></a></li>
					@endforeach
				</ul>
			</div><!--end categories-->
			<div class="special">
				<div class="titleHeader clearfix">
					<h3>Recent Products</h3>
				</div><!--end titleHeader-->

				<ul class="vProductItemsTiny">
					@foreach($productsRecent->slice(0, 6) as $productRecent)
					<li class="span4 clearfix">
						<div class="thumbImage">
							<a href="{{ route('product', $productRecent->slug) }}"><img style="width:92px;" src="{{ asset('thumb_image_thumb/'.$productRecent->thumb_image) }}" alt="{{ $productRecent->name }}"></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="{{ route('product', $productRecent->slug) }}" class="invarseColor">
									{{ $productRecent->name }}
								</a>
							</div>
							<div class="thumbPrice">
								<span>THB {{ number_format($productRecent->price) }}</span>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div><!--end special-->

		</aside><!--end aside-->


		<div class="span9">

			<div id="productSlider" class="carousel slide">
				<!-- Carousel items -->
			    <div class="carousel-inner">
			      <div class="active item"><img style="width:694px;height:200px;" src="{{ asset('img/slide-4.jpg') }}" alt="slide4"></div>
			      <div class="item"><img style="width:694px;height:200px;" src="{{ asset('img/slide-1.jpg') }}" alt="slide4"></div>
			      <div class="item"><img style="width:694px;height:200px;" src="{{ asset('img/slide-2.jpg') }}" alt="slide4"></div>
			    </div>

			    <!-- Carousel nav -->
			    <a class="carousel-control left" href="#productSlider" data-slide="prev">&lsaquo;</a>
			    <a class="carousel-control right" href="#productSlider" data-slide="next">&rsaquo;</a>
			</div><!--end productSlider-->


			<div class="productFilter clearfix">
				<div class="sortBy inline pull-left">
					<form style="margin:0px;" method="get" action="{{ url('products') }}">
					Sort By :
					<select name="sortItem" onchange="this.form.submit()">
						<option value="">Select</option>
						<option value="name-asc">Name (A-Z)</option>
						<option value="name-asc">Name (Z-A)</option>
						<option value="price-asc">Price (Low-Hight)</option>
						<option value="price-desc">Price (Height-Low)</option>
					</select>
					</form>
				</div>

				<div class="showItem inline pull-left">
					<form style="margin:0px;" method="get" action="{{ url('products') }}">
					Show :
					<select name="showItem" onchange="this.form.submit()">
						<option value="">Select</option>
						<option value="15">15</option>
						<option value="25">25</option>
						<option value="50">50</option>
						<option value="75">75</option>
						<option value="100">100</option>
					</select>
					</form>
				</div><!--end sortBy-->


				<div class="displaytBy inline pull-right">
					Display :
					<div class="btn-group">
						<button class="btn btn-primary active"><i class="icon-th"></i></button>
						<button class="btn"><i class="icon-list"></i></button>
					</div>
				</div><!--end displaytBy-->

			</div><!--end productFilter-->


			<div class="row is-flex">
				<ul class="hProductItems clearfix">
          @foreach($category_product as $products)
					@foreach($products->product as $product)
					<li class="span3 box clearfix">
						<div class="thumbnail">
							<a href="{{ route('product', $product->slug) }}"><img style="width:212px;height:192px;" src="{{ asset('thumb_image_thumb/'.$product->thumb_image) }}" alt=""></a>
						</div>
						<div class="thumbSetting">
							<div class="thumbTitle">
								<a href="" class="invarseColor">{{ $product->name }}</a>
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
        @endforeach
				</ul>
				@if($category_product->lastPage() > 1)
				<div class="pagination pagination-right">
					<?php $link_limit = 7; ?>

					@if ($category_product->lastPage() > 1)
					    <ul>
					        <li class="{{ ($category_product->currentPage() == 1) ? ' disabled' : '' }}">
					            <a href="{{ $category_product->url(1) }}">First</a>
					         </li>
					        @for ($i = 1; $i <= $category_product->lastPage(); $i++)
					            <?php
					            $half_total_links = floor($link_limit / 2);
					            $from = $category_product->currentPage() - $half_total_links;
					            $to = $category_product->currentPage() + $half_total_links;
					            if ($category_product->currentPage() < $half_total_links) {
					               $to += $half_total_links - $category_product->currentPage();
					            }
					            if ($category_product->lastPage() - $category_product->currentPage() < $half_total_links) {
					                $from -= $half_total_links - ($category_product->lastPage() - $category_product->currentPage()) - 1;
					            }
					            ?>
					            @if ($from < $i && $i < $to)
					                <li class="{{ ($category_product->currentPage() == $i) ? ' active' : '' }}">
					                    <a href="{{ $category_product->url($i) }}">{{ $i }}</a>
					                </li>
					            @endif
					        @endfor
					        <li class="{{ ($category_product->currentPage() == $category_product->lastPage()) ? ' disabled' : '' }}">
					            <a href="{{ $category_product->url($products->lastPage()) }}">Last</a>
					        </li>
					    </ul>
					@endif
					<br/><br/>
					<span>Showing {!! $category_product->count() !!} of {!! $category_product->lastpage() !!} page(s)</span>
				</div><!--end pagination-->
				@endif
			</div><!--row-->
		</div><!--end span9-->
	</div><!--end row-->

@endsection
