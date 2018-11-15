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
			     <!-- EVENT image -->
			      <div class="middle-content row">
				     <div class="event-indivusla"> 
					    <img src="{{asset('assets/uploads/events')}}/{{$eventsingle->event_photo}}" alt="event photo" />
						<div class="event-single-date"> 
						  <span>{{date('d-m-y', strtotime($eventsingle->event_date))}}</span>
						  <span class="event-time">{{$eventsingle->event_time}}</span>
						</div>
						 <div class="event-bottom-info"> 
							 <h4>{{$eventsingle->event_title}}</h4>
				            	  <p>{!!$eventsingle->event_des !!}</p>
						</div>
					 </div>
			 
				
			      </div>  <!-- end gallery image -->
			   </div>	
			   
          
	       </div>
	   </div>
	</section>
	<!--End main content -->
@endsection