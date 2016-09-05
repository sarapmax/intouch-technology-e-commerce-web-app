@extends('layouts.master')

@section('content')

<div class="row">
				
	<div class="span12">

		<article class="blog-article">
			<div style="padding-bottom:20px;" class="blog-img">
				<center>
					<img style="width:694px;height:246px;" src="{{ asset('img/slide-4.jpg') }}" alt="About image">
				</center>
			</div><!--end blog-img-->

			<div class="blog-content">
				<div class="blog-content-title">
					<h2><a href="#" class="invarseColor">About title to go here with an image</a></h2>
				</div>
				<div class="clearfix">
					<ul class="unstyled blog-content-date">
						<li class="pull-left"><i class="icon-pencil"></i> <a href="#">Huseyin</a></li>
					</ul>
				</div>
				<div class="blog-content-entry">
					<p>
						consectetur adipiscing eli. Nulla tristique posuere felis vel pretium. Sed sit amet nisi elit. Nulla nec congue elit. Nunc vitae dui ornare mi varius placerat. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum.
					</p>

					<blockquote>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					</blockquote>

					<p>
						consectetur adipiscing eli. Nulla tristique posuere felis vel pretium. Sed sit amet nisi elit. Nulla nec congue elit. Nunc vitae dui ornare mi varius placerat. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum.  Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum.
					</p>
				</div>
			</div><!--end blog-content-->
		</article><!--end article-->

		<div class="about-author well">
			<div>
				<h4>About: <a href="#">John Doe</a></h4>
				<p>
					consectetur adipiscing eli. Nulla tristique posuere felis vel pretium. Sed sit amet nisi elit. Nulla nec congue elit. Nunc vitae dui ornare mi varius placerat. 
				</p>
			</div>
		</div><!--end about-author-->



	</div><!--end span12-->

</div><!--end row-->

@endsection
