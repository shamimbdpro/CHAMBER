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
							<h2>Photo Gallery</h2>
						 </div>
					  </div>
				  </div>
			      <div class="middle-content row">
			      	@foreach($view_gallery as $view_gallalry_item)
					 <div class="col-lg-4 col-md-4 "> <!-- gallery one -->
					    <div class="gallery">
						   <a href="{{route('single_gallery',$view_gallalry_item->gallerycat_id)}}">
						 <img src="{{asset('assets/uploads/photogallery/catimage')}}/{{$view_gallalry_item->gallerycat_img}}" alt="Category Image">
						   <h4>{{$view_gallalry_item->gallerycat_name}}<i class="fa fa-chevron-right"></i>
							</h4>
							</a>
						</div>
					</div> 

					@endforeach
					<div class="mycustompaginate">
				    {{$view_gallery->links()}}
				    </div>
			      </div>			
			   </div>			
          
	       </div>
	   </div>
	</section>
	<!--End main content -->
	@endsection