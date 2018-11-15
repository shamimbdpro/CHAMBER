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
							<h2>Event Gallery</h2>
						 </div>
					  </div>
				  </div>
				   <!-- EVENT image -->
			      <div class="middle-content row">
			      	@foreach($events as $event)
					 <div class="col-lg-6 col-md-6 "> <!-- event one -->
					     <div class="row single-event"> 
							 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
								 <div class="row"> 
								   <div class="event">
								   <a href="{{route('event_single',$event->event_id)}}">
								   <img src="{{asset('assets/uploads/events')}}/{{$event->event_photo}}" alt="gallery image" />
									</a>
								  </div>
								 </div>
							 </div>
							 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
								 <div class="row "> 
								   <div class="event_info"> 
									 <p>EVENTS</p>
									 <div class="date">
										<span class="date-start">{{date('d', strtotime($event->event_date))}}</span>
										<span class="month-year-start">{{date('M-y', strtotime($event->event_date))}}</span>
									</div>
								   </div>
								 </div>
							 </div>
							 <div class="event-bottom-info"> 
							  <a href="{{route('event_single',$event->event_id)}}"><h4>{{$event->event_title}}</h4></a>
							  <p>{!! str_limit($event->event_des, 120, ' ...') !!}</p>
							 </div>
						 </div>
					</div> 
					@endforeach
					
						<div class="mycustompaginate">
							{{$events->links()}}
						</div>

			      </div> <!--  end event --->
			   </div>	
			   
          
	       </div>
	   </div>
	</section>
	<!--End main content -->
@endsection