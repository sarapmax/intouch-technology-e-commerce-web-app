<div style="padding-left: 15px;padding-right: 15px;">
	<div class="container">
		<div class="flash-message">
			@foreach (['danger', 'warning', 'success', 'info'] as $msg)
		    	@if(Session::has('alert-' . $msg))
		    		<div class="alert alert-{{ $msg }} alert-dismissible" role="alert"">
		    			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    			{!! Session::get('alert-' . $msg) !!}
		    		</div>
		    	@endif
		  	@endforeach
		</div>
	</div>
</div>