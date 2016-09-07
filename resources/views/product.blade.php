@extends('layouts.master')

@section('content')

<div class="row">
	<div class="span9">
		<div class="row">
			<div class="product-details clearfix">
				<div class="span5">
					<div class="product-title">
						<h4>{{ $product->name }}</h4>
					</div>
					<div class="product-img">
						<a class="fancybox" href="{{ asset('thumb_image/'.$product->thumb_image) }}"><img src="{{ asset('thumb_image_thumb/'.$product->thumb_image) }}" alt="{{ $product->name }}"></a>
					</div><!--end product-img-->
					<div class="product-img-thumb">
						<?php $images = explode("|",$product->images); ?>
						@foreach(array_slice($images ,1) as $image)
						<a class="fancybox" href="{{ asset('images/'.$image) }}"><img style="width:64px;height:64px;" src="{{ asset('images_thumb/'.$image) }}" alt="{{ $product->name }}"></a>
						@endforeach
					</div><!--end flexslider-thumb-->
				</div><!--end span5-->

				<div class="span4">
					<div class="product-set">
						<div class="product-price">
							<span>
								{{-- <span class="strike-through">$200.00</span>  --}}
								THB {{ number_format($product->price) }}
							</span>
						</div><!--end product-price-->
						<div class="product-rate clearfix">
							<h5 style="color:#0BD21E"><i class="fa fa-circle"> </i> In Stock</h5>
						</div><!--end product-inputs-->
						<div class="product-info">
							<br/>
							<dl class="dl-horizontal">
							 	{!! $product->shortdesc !!}
							</dl>
						</div><!--end product-info-->
						<div class="product-inputs">
							<form method="post" action="page">

								<div class="input-append">
								<input class="span1" type="text" name="" value="1" placeholder="QTY">
								<button class="btn btn-primary"><i class="icon-shopping-cart"></i> Add To Cart</button>

								<button class="btn"><i class="icon-heart"></i> Add to Wishlist</button>
								</div>

							</form><!--end form-->

						</div><!--end product-inputs-->
					</div><!--end product-set-->
				</div><!--end span4-->

			</div><!--end product-details-->

		</div><!--end row-->


		<div class="product-tab">
			<ul class="nav nav-tabs">
			  <li class="active">
			  	<a href="#descraption" data-toggle="tab">Descraption</a>
			  </li>
			  <li>
			  	<a href="#specfications" data-toggle="tab">Specfications</a>
			  </li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="descraption">
					{!! $product->longdesc !!}
				</div>
				<div class="tab-pane" id="specfications">
					{!! $product->specfications !!}
				</div>
			</div><!--end tab-content-->
		</div><!--end product-tab-->


		<div class="related-product">
			<div class="titleHeader clearfix">
				<h3>Related Product</h3>
			</div><!--end titleHeader-->

			<div class="row">
			<ul class="hProductItems clearfix">
				@foreach($productsRelated->slice(0, 3) as $productRelated)
				<li class="span3 clearfix">
					<div class="thumbnail">
						<a href="{{ route('product', $productRelated->slug) }}"><img style="width:212px;" src="{{ asset('thumb_image_thumb/'.$productRelated->thumb_image) }}" alt="{{ $productRelated->name }}"></a>
					</div>
					<div class="thumbSetting">
						<div class="thumbTitle">
							<a href="{{ route('product', $productRelated->slug) }}" class="invarseColor">
								{{ $productRelated->name }}
							</a>
						</div>
						<div class="thumbPrice">
							<span>THB {{ number_format($productRelated->price) }}</span>
						</div>

						<div class="thumbButtons">
							<button class="btn btn-primary btn-small">
								<i class="icon-shopping-cart"></i>  Add To Cart
							</button>
							<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
								<i class="icon-heart"></i>
							</button>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
			</div><!--end row-->
		</div><!--end related-product-->

	</div><!--end span9-->


	<aside class="span3">
	<div class="aside-inner" id="product-aside">
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

	</div><!--end aside-inner-->
	</aside><!--end span3-->

</div><!--end row-->

@endsection
