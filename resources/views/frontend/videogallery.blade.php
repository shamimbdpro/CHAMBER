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
			      <div class="row"> 
					  <div class="col-lg-12"> 
						  <div class="heading1">
							<h2>Video Gallery</h2>
						 </div>
					  </div>
				  </div>
			      <div class="middle-content row">
			      	@foreach($get_videos as $get_video)
					 <div class="col-lg-4 col-md-4 "> <!-- gallery one -->
					    <div class="gallery">
						   <a href="#" class="js-video-button-2 video" data-video-id='{{$get_video->video_link}}'>
						    <img src="http://img.youtube.com/vi/{{$get_video->video_thumb}}/0.jpg" alt="Video Thaumbnail">
						   <h4>{{str_limit($get_video->video_title, 58, '')}}</h4>
							</a>
						</div>
					</div> 

					@endforeach
					<div class="mycustompaginate">
				  	  {{$get_videos->links()}}
				    </div>
			      </div>			
			   </div>			
          
	       </div>
	   </div>
	</section>
	<!--End main content -->
	@endsection