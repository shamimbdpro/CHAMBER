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
				   		<!-- vides -->
		           @include('frontend.template.videolist')
			   </div>
			   </div>
			   <!-- middle content -->
			   <div class="col-lg-9">
			      <div class="row"> 
					  <div class="col-lg-12"> 
						  <div class="heading1">
							<h2>Photo Gallery</h2>
						 </div>
					  </div>
				  </div>
				   <!-- gallery image -->
			      <div class="middle-content row">
			      	@foreach($show_gallery as $show_g)
					 <div class="col-lg-4 col-md-4 "> <!-- gallery one -->
					    <div class="gallery">
						   <a href="">
						 	 <img src="{{asset('assets/uploads/photogallery/galleryimage')}}/{{$show_g->pgallery_img}}" alt="Gallery Image">
							</a>
						</div>
					</div> 
					@endforeach
			       <div class="mycustompaginate">
			     	    {{$show_gallery->links()}}
				    </div>

		
			      </div>  <!-- end gallery image -->
				  
					<!--photo gallery-->
                  <div class="latest-photo-gallery" style="padding-top:30px"> 
				    <div class="photo-gallery">
						<div class="heading1">
						  <h2>Latest Gallery</h2>
						</div>
						<div class="owl-carousel owl-theme gellary-slider custom-carousel">
							@foreach($recent_gallery as $recent_gallery_img)
							<div class="item wow fadeInUp">
								<div class="gallery-single">
								  <a href="{{route('single_gallery',$recent_gallery_img->gallerycat_id)}}">
									<img src="{{asset('assets/uploads/photogallery/catimage/')}}/{{$recent_gallery_img->gallerycat_img}}" alt="Gallery Image">
									 <p>{{$recent_gallery_img->gallerycat_name}}</p>
								    </a>
								</div>
							</div>
							@endforeach
					
						</div>
					</div>	
				  </div>
				<!--end photo gallery-->
				  
			   </div>			
          
	       </div>
	   </div>
	</section>
	<!--End main content -->
	@endsection