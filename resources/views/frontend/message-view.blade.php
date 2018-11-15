@extends('layouts.frontend')
@section('contents')
     

	<!--start main content -->
	<section class="main-content">
	  <div class="container">
	     <div class="row">
       
			   <!-- middle content -->
			   <div class="col-lg-9">
			      <div class="row"> 
					  <div class="col-lg-12"> 
						  <div class="heading1">
							<h2>Greetings from {{$message_view->message_name}}</h2>
						 </div>
					  </div>
				  </div>
				  <br />
			      <div class="middle-content row">
					 <div class="col-lg-4"> 
					    <div class="director-info message"> 
						  <img src="{{asset('assets/uploads/message')}}/{{$message_view->message_photo}}" alt="director image" />
						</div>
					 </div>
					 <div class="col-lg-8"> 
					   <div class="director-message"> 
						<p>
						 {!! $message_view->message_des !!}
					   </p>
					   <div class="message_footer">
					   	   <h6>{{$message_view->message_name}}</h6
					   	   	<p>{!! $message_view->message_Designation !!}</p>
					   </div>
					   </div>
					 </div>
					
					
			      </div>			
			   </div>

              <!-- left content -->
			   <div class="col-lg-3">
			     <div class="left-content">
			      <!-- left menu -->
	                   @include('frontend.template.leftmenu')
				   		<!-- vides -->
					  @include('frontend.template.videolist')
				  
			   </div>
			   </div>


          
	       </div>
	   </div>
	</section>
	<!--End main content -->
	@endsection