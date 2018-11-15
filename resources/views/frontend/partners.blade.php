@extends('layouts.frontend')
@section('contents')

	<!--start main content -->
	<section class="main-content">
	  <div class="container">
	     <div class="row">
               <!-- left content -->
			   <div class="col-lg-3">
			     <div class="left-content">
			       <!-- left menu -->
	                   @include('frontend.template.leftmenu')
			          @include('frontend.template.videolist')
				  
			   </div>
			   </div>
			   <!-- middle content -->
			   <div class="col-lg-9">
			      <div class="row"> 
					  <div class="col-lg-12"> 
						  <div class="heading1">
							<h2>Our Partners</h2>
						 </div>
					  </div>
				  </div>
				  <div class="row">

				  	@foreach($sponsors as $sponsor)
				     <!-- partner item 1 -->
				    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"> 
					    <div class="partner"> 
					      <img src="{{asset('assets/uploads/sponsor/')}}/{{$sponsor->sponsor_img}}" alt="partners image" />
				        </div>
					</div>

					@endforeach
			
					
				  </div>
			   </div>	<!-- end middle content		 -->
          
	       </div>
	   </div>
	</section>
	<!--End main content -->
	@endsection