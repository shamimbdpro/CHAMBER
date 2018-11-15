@extends('layouts.frontend')
@section('contents')

	<!--start main content -->
	<div class="main-content">
	  <div class="container">
	     <div class="row">
               <!-- left content -->
			   <div class="col-lg-3">
			     <div class="left-content">
				  @include('frontend.template.leftmenu')
			 @include('frontend.template.videolist')
				  
			   </div>
			   </div>
			   <!-- middle content -->
			   <div class="col-lg-9">
			      <div class="middle-content">
				     <div class="heading1">
						<h2>Our Objective</h2>
					 </div>
					 <div class="objective-details"> 
					 	@if($objective->ob_status==1)
					       <img src="{{asset('assets/uploads/pages/'.$objective->ob_ban)}}" alt="Objective Banner.jpg" />
					    @endif
						 {!! $objective->ob_des !!}
			      </div>			
			   </div>			
          
	  </div>
	</div>
	</div>
	<!--End main content -->
	@endsection