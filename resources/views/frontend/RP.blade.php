
@extends('layouts.frontend')
@section('contents')

	<!--start main content -->
	<section class="main-content">
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
			      <div class="row"> 
					  <div class="col-lg-12"> 
						  <div class="heading1">
							<h2>Membership Qualification, Rights and Privileges</h2>
						 </div>
					  </div>
				  </div>
				  <div class="row"> 
				    <div class="rp-text"> 
					  	 	@if($rppageinfo->rp_status==1)
					      <img src="{{asset('assets/uploads/pages/'.$rppageinfo->rp_ban)}}" alt="Right and Previllage Image.jpg" />
					     @endif
						  {!!$rppageinfo->rp_des!!}				
				   </div>
				  </div>
				
				  
			   </div>			
          
	       </div>
	   </div>
	</section>
	<!--End main content -->
	@endsection