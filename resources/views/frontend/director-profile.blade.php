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
			     
				  <br />
			      <div class="middle-content row">
					 <div class="col-lg-4"> 
					    <div class="director-info"> 
						  <img src="{{asset('assets/uploads/directors')}}/{{$director_profile->director_img}}" alt="director image" />
						   <h3> {{$director_profile->director_name}}</h3>
						   <p>{{$director_profile->director_title}}</p>
						</div>
					 </div>
					 <div class="col-lg-8"> 
					     <div class="heading1">
						  <h2>{{$director_profile->director_name}}'s Message</h2>
						</div>
					   <div class="director-message"> 
						<p>
						 {!! $director_profile->director_message !!}
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