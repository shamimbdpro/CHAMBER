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
				   		<!-- vides -->
				       @include('frontend.template.videolist')
				  
			   </div>
			   </div>
			   <!-- middle content -->
			   <div class="col-lg-9">
			    
				  <br />
			      <div class="middle-content row">
				
					 <div class="col-lg-12"> 
					     <div class="heading1">
						  <h2>Welcome to</h2>
						</div>
					   <div class="director-message"> 
						<p>
						 {!! $welcome_single->welcomemsg !!}
					   </p>
					   </div>
					 </div>
					
					
			      </div>			
			   </div>			
          
	       </div>
	   </div>
	</section>
	<!--End main content -->
	@endsection