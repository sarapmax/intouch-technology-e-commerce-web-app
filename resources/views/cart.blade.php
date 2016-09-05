@extends('layouts.master')

@section('content')

<div class="row">

	<div class="span12">
		<table class="table">
			<thead>
				<tr>
					<th>Image</th>
					<th class="desc">Descraption</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					<th>Sub Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a href="#"><img style="width:92px;height:92px;" src="{{ asset('img/special/3.jpg') }}" alt=""></a>
					</td>
					<td class="desc">
						<h4><a href="#" class="invarseColor">
							Product Cart #1
						</a></h4>
						<ul class="rating clearfix">
							<li><i class="star-on"></i></li>
							<li><i class="star-on"></i></li>
							<li><i class="star-on"></i></li>
							<li><i class="star-off"></i></li>
							<li><i class="star-off"></i></li>
						</ul>
						<ul class="unstyled">
							<li>Available In Stock</li>
							<li>No. CtAw9458</li>
						</ul>
					</td>
					<td class="quantity">
						<div class="input-prepend input-append">
							<button class="btn"><i class="icon-chevron-left"></i></button>
							<input type="text" name="" value="1">
							<button class="btn"><i class="icon-chevron-right"></i></button>
						</div>
					</td>
					<td class="sub-price">
						<h2>$150.00</h2>
					</td>
					<td class="total-price">
						<h2>$150.00</h2>
						Ex-Tax: $8.00
					</td>
					<td>
						<button class="btn btn-small" data-title="Refresh" data-placement="top" data-toggle="tooltip"><i class="icon-refresh"></i></button>
						<button class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-toggle="tooltip"><i class="icon-pencil"></i></button>
						<button class="btn btn-small btn-danger" data-title="Remove" data-placement="top" data-toggle="tooltip"><i class="icon-trash"></i></button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="#"><img style="width:92px;height:92px;" src="{{ asset('img/special/1.jpg') }}" alt=""></a>
					</td>
					<td class="desc">
						<h4><a href="#" class="invarseColor">
							Product Cart #2
						</a></h4>
						<ul class="rating clearfix">
							<li><i class="star-on"></i></li>
							<li><i class="star-on"></i></li>
							<li><i class="star-on"></i></li>
							<li><i class="star-on"></i></li>
							<li><i class="star-off"></i></li>
						</ul>
						<ul class="unstyled">
							<li>Available In Stock</li>
							<li>No. CtAw9458</li>
						</ul>
					</td>
					<td class="quantity">
						<div class="input-prepend input-append">
							<button class="btn"><i class="icon-chevron-left"></i></button>
							<input type="text" name="" value="1">
							<button class="btn"><i class="icon-chevron-right"></i></button>
						</div>
					</td>
					<td class="sub-price">
						<h2>$150.00</h2>
					</td>
					<td class="total-price">
						<h2>$150.00</h2>
						Ex-Tax: $8.00
					</td>
					<td>
						<button class="btn btn-small" data-title="Refresh" data-placement="top" data-toggle="tooltip"><i class="icon-refresh"></i></button>
						<button class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-toggle="tooltip"><i class="icon-pencil"></i></button>
						<button class="btn btn-small btn-danger" data-title="Remove" data-placement="top" data-toggle="tooltip"><i class="icon-trash"></i></button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="#"><img style="width:92px;height:92px;" src="{{ asset('img/special/2.jpg') }}" alt=""></a>
					</td>
					<td class="desc">
						<h4><a href="#" class="invarseColor">
							Product Cart #3
						</a></h4>
						<ul class="unstyled">
							<li>Available In Stock</li>
							<li>No. CtAw9458</li>
							<li>Nicka Corparation</li>
							<li>25 Points</li>
						</ul>
					</td>
					<td class="quantity">
						<div class="input-prepend input-append">
							<button class="btn"><i class="icon-chevron-left"></i></button>
							<input type="text" name="" value="1">
							<button class="btn"><i class="icon-chevron-right"></i></button>
						</div>
					</td>
					<td class="sub-price">
						<h2>$150.00</h2>
					</td>
					<td class="total-price">
						<h2>$150.00</h2>
						Ex-Tax: $8.00
					</td>
					<td>
						<button class="btn btn-small" data-title="Refresh" data-placement="top" data-toggle="tooltip"><i class="icon-refresh"></i></button>
						<button class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-toggle="tooltip"><i class="icon-pencil"></i></button>
						<button class="btn btn-small btn-danger" data-title="Remove" data-placement="top" data-toggle="tooltip"><i class="icon-trash"></i></button>
					</td>
				</tr>
			</tbody>
		</table>
	</div><!--end span12-->


	<div class="span7">
		<div class="cart-accordain" id="cart-acc">

			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#estimate">
						<i class="icon-caret-right"></i> Estimate Shipping &amp; Taxes
					</a>
				</div>
				<div id="estimate" class="accordion-body collapse in">
					<div class="accordion-inner">
						<form class="form-horizontal">
						  <div class="control-group">
						    <div class="control-label">
						    	<strong>Your Country</strong>
						    </div>
						    <div class="controls">
						      <select name="">
						      	<option value="">-- Select Country --</option>
						      	<option value="">Country1</option>
						      	<option value="">Country2</option>
						      	<option value="">Country3</option>
						      	<option value="">Country4</option>
						      	<option value="">Country5</option>
						      	<option value="">Country6</option>
						      </select>
						    </div>
						  </div><!--end control-group-->
						  <div class="control-group">
						    <div class="control-label">
						    	<strong>Your Region</strong>
						    </div>
						    <div class="controls">
						      <select name="">
						      	<option value="">-- Select Region --</option>
						      	<option value="">region1</option>
						      	<option value="">region2</option>
						      	<option value="">region3</option>
						      	<option value="">region4</option>
						      	<option value="">region5</option>
						      	<option value="">region6</option>
						      </select>
						    </div>
						  </div><!--end control-group-->
						  <div class="control-group">
						    <label class="control-label" for="inputpostCode">
						    	<strong>Your Post Code</strong>
						    </label>
						    <div class="controls">
						      <input type="text" id="inputpostCode" placeholder="Post Code...">
						    </div>
						  </div><!--end control-group-->
						  <div class="control-group">
						    <div class="controls">
						      <button type="submit" class="btn btn-primary">Get Quotes</button>
						    </div>
						  </div><!--end control-group-->
						</form>
					</div>
				</div>
			</div><!--end accordion-group-->

			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#discount-code">
						<i class="icon-caret-right"></i> Apply Discount Code
					</a>
				</div>
				<div id="discount-code" class="accordion-body collapse">
					<div class="accordion-inner">
						<form class="form-horizontal">
						  <div class="control-group">
						    <label class="control-label" for="inputDiscount">
						    	<strong>Discount Code</strong>
						    	</label>
						    <div class="controls">
						      <input type="text" id="inputDiscount" placeholder="Inter Discount Code...">
						    </div>
						  </div><!--end control-group-->
						  <div class="control-group">
						    <div class="controls">
						      <button type="submit" class="btn btn-primary">Apply Coupon</button>
						    </div>
						  </div><!--end control-group-->
						</form>
					</div>
				</div>
			</div><!--end accordion-group-->

			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#gift-voucher">
						<i class="icon-caret-right"></i> Use Gift Voucher
					</a>
				</div>
				<div id="gift-voucher" class="accordion-body collapse">
					<div class="accordion-inner">
						<form class="form-horizontal">
						  <div class="control-group">
						    <label class="control-label" for="inputVoucher">
						    	<strong>Voucher Code</strong>
						    	</label>
						    <div class="controls">
						      <input type="text" id="inputVoucher" placeholder="Inter Voucher Code...">
						    </div>
						  </div><!--end control-group-->
						  <div class="control-group">
						    <div class="controls">
						      <button type="submit" class="btn btn-primary">Apply Voucher </button>
						    </div>
						  </div><!--end control-group-->
						</form>
					</div>
				</div>
			</div><!--end accordion-group-->

		</div><!--end cart-accordain-->
	</div><!--end span7-->


	<div class="span5">
		<div class="cart-receipt">
			<table class="table table-receipt">
				<tr>
					<td class="alignRight">Sub Total</td>
					<td class="alignLeft">$600.00</td>
				</tr>
				<tr>
					<td class="alignRight">Pricing Sharge</td>
					<td class="alignLeft">$15.00</td>
				</tr>
				<tr>
					<td class="alignRight">Promotion Discound</td>
					<td class="alignLeft">$0.00</td>
				</tr>
				<tr>
					<td class="alignRight">VAT</td>
					<td class="alignLeft">$12.00</td>
				</tr>
				<tr>
					<td class="alignRight"><h2>Total</h2></td>
					<td class="alignLeft"><h2>$825.00</h2></td>
				</tr>
				<tr>
					<td class="alignRight"><button class="btn">Contuine Shoping</button></td>
					<td class="alignLeft"><button class="btn btn-primary">Checkout</button></td>
				</tr>
			</table>
		</div>
	</div><!--end span5-->


</div><!--end row-->

@endsection