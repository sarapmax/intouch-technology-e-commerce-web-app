<div class="container">
	<div class="row">
		@if ( session()->has('info'))
		    <div class="alert alert-info" role-"alert">
		        {{ session()->get('info') }}
		    </div>
		@endif
	</div>
</div>