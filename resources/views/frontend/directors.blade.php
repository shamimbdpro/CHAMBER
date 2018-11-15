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
				      <div class="heading1">
						<h2>Our Directors</h2>
					 </div>
				  </div>
				  
			      <div class="middle-content row">
			      	@foreach($directors as $director)
					 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> <!-- director one -->
					    <div class="director">
						   <a href="{{route('directorsingle',$director->director_id)}}">
						   <img src="{{asset('assets/uploads/directors')}}/{{$director->director_img}}" alt="gallery image" />
							  <div class="team-content text-center">
									<h3 class="team-name"><a href="director-profile.html">{{$director->director_name}}</a></h3>
									 <p class="team-meta">Director</p>
									 @if($director->director_email)
								     <p class="email"><i class="fa fa-envelope-o"></i> {{$director->director_email}}</p>
								     @endif
									 <p class="phone"><i class="fa fa-mobile"></i> {{$director->director_phone}}</p>
							  </div>
							</a>
						</div>
					</div>

					@endforeach

					</div>
			      </div>			
			   </div>			
          
	       </div>
	   </div>
	</section>
	<!--End main content -->

	

	@endsection