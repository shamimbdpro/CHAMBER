@extends('layouts.frontend')
@section('contents')
	<!-- start slider area -->
	<section class="slider">
		<div class="container-fluid">
			<div class="row">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			
				  <div class="carousel-inner">
				  	<?php $x=0;?>
				  	@foreach($viewsliders as $viewslider)
				  	 	<?php $x++;?>
					<div class="carousel-item <?php if($x==1){echo 'active';}else{ echo '';}?>">
					  <img class="d-block w-100" src="{{asset('assets/uploads/slider')}}/{{$viewslider->slider_img}}" alt="First slide">
					</div>
					@endforeach
					
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</section> <!-- End slider area -->
	<!--start main content -->
	<div class="main-content">
	  <div class="container">
	     <div class="row">
               <!-- left content -->
			   <div class="col-lg-3">
			   	   <div class="left-content">
			
			         <!---- left menu ---->
                   @include('frontend.template.leftmenu')
				   <!-- megazine -->
				   <div class="megazine">
				   	<a href="{{route('view_newslatter')}}" target="__blnak">
				     <img src="{{asset('assets/uploads/newslatter')}}/{{$newslatter_get->newslatter_img}}" class="img-fluid">
				     </a>
				   </div>
				   <!-- sponsor -->
				   <div class="sponsor">
                       <span>Sponsor</span>
                        <a href="{{$sponsorpromote->sponsor_promote_link}}" target="__blnak">
                        	<img border="0" width="100%" alt="" src="{{asset('assets/uploads/newslatter')}}/{{$sponsorpromote->sponsor_promote_img}}" style="_padding-left:5%; margin-top:20px;"></a>				
				  </div>
			   </div>
			   </div>
			   <!-- middle content -->
			   <div class="col-lg-6">
			      <div class="middle-content">
				    <div class="conent-one"> <!-- content 1 -->
						<div class="heading1">
						  <h2>Welcome</h2>
						</div>
						<div class="text1">
						 {!! str_limit($welcomemsg->welcomemsg, 530, ' ...') !!}<a href="{{route('welcome_single',$welcomemsg->id)}}">read more</a>
						</div>
					</div> <br />
				
					<br />
					@foreach($messages as $message)
					<div class="conent-two"> <!-- content 3 -->
						<div class="heading1">
						  <h2>{{$message->message_title}}</h2>
						</div>
						<div class="text1">
						 <div class="content-img">
						   <img src="{{asset('assets/uploads/message')}}/{{$message->message_photo}}" alt="priminister img">
						 </div>
					
					 {!! str_limit($message->message_des, 530, ' ...') !!}<a href="{{route('message_view',$message->id)}}">read more</a>
						</div>
					</div> <br />
					<br />
					@endforeach
			
				   <!--photo gallery-->
				    <div class="photo-gallery">
						<div class="heading1">
						  <h2>Photo Gallery</h2>
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
					<!--end photo gallery-->
			      </div>			
			   </div>			
               <!-- right content -->
			   <div class="col-lg-3">
			      <div class="right-content">
			          <div class="sitelink main"> <!-- News -->
                        <span>Our News On</span>
						<marquee behavior="scroll" direction="up" loop="true"  onmouseover="this.stop()" onmouseout="this.start()">
                        <ul class="news-site-link">
                        	@foreach($ourallnews as $nws)
                            <li>
                                <a href="{{$nws->ournews_link}}" target="_blank">
                                    <img src="{{asset('assets/uploads/ournews')}}/{{$nws->ournews_photo}}">

                                </a>
                            </li>
                            @endforeach
                         
                        </ul>
						</marquee>
                    </div>
					<!-- vides -->
					   @include('frontend.template.videolist')
					<!-- quick link -->
					<div class="quicklink extralink">
						<span>Quicklinks</span>
						<ul>
							@foreach($quicklink as $getlink)
						  <li><a href="{{$getlink->link_url}}" target="_blank">{{str_limit($getlink->link_title, 70, ' ...')}}</a></li>
					       @endforeach
						</ul>
					 </div>
					 <!-- Notice -->
					 <div class="quicklink" >
					
						<div class="view-more text-right">
					    	<span> Notice </span>
					 
					    	<a href="{{route('viewallnotice')}}">View All</a>
					     </div>


						 <div class="quicklink latest"id="v-tricker2">
							<ul class="listnone bullet bullet-angle-double-right">
								@foreach($notices as $notice)

								<li><a href='{{route('notice_single',$notice->notice_id)}}'>{{str_limit($notice->notice_title, 150, ' ...')}}</a></li>
								
								@endforeach
							</ul>
						</div> 
						
						 
					 </div>   <!-- End Notice  -->
					 <br />
					 
					 <div class="heading1 latestnews">
						<h2>Latest news</h2>
						<div class="view-more text-right">
						  <a href="{{route('viewallnews')}}">View All</a>
						</div>
					 </div>
					 <div class="quicklink latest"id="v-tricker1">
						<ul class="listnone bullet bullet-angle-double-right">
							@foreach($latestnews as $latest)
							<li><a href='{{route('news_single',$latest->latestnews_id)}}'>{{$latest->latestnews_title}}</a></li>
							@endforeach
						</ul>
					</div>
					
			    </div>
			 </div>
	  </div>
	</div>
	</div>
	<!--End main content -->

	@include('frontend.template.testimonianl')

	</section>	

	@endsection