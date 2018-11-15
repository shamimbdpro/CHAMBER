<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="{{$organizationinfo->meta}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/bootstrap.min.css">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:300,300i,400,500,700" rel="stylesheet"> 
	<!-- font-awesome -->
	<link href="{{asset('assets/frontend')}}/css/font-awesome.min.css" rel="stylesheet">
	<!--owl carousel -->
    <link href="{{asset('assets/frontend')}}/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/modal-video.min.css" rel="stylesheet">
	<!-- main style -->
	<link href="{{asset('assets/frontend')}}/css/style.css" rel="stylesheet">
    <!-- Responsive css -->
	<link href="{{asset('assets/frontend')}}/css/responsive.css" rel="stylesheet">
    <title>{{$organizationinfo->title}}</title>
  </head>
  <body>
     <!-- start header area -->
    <header class="header_area animated navbar-fixed-top">
    <div class="container">
        <div class="row align-items-center p-0">
            <!-- Menu Area Start -->
            <div class="col-lg-12 ">
                <div class="menu_area">
                    <nav class="navbar navbar-expand-xl navbar-light p-0" data-spy="affix" data-offset-top="17">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('assets/uploads/logo')}}/{{$logo->logo}}" alt="prosoft logo"></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
						</button>
                        <!-- Menu Area -->
                        <div class="collapse navbar-collapse mainmenu" id="ca-navbar">
                            <ul class="navbar-nav ml-auto" id="nav">
                            
                              @foreach($getmenu as $menulist)
                              @if($menulist->menu_display ==11)
                                 <li class="nav-item"><a class="nav-link" href="{{url($menulist->menu_url)}}">{{$menulist->menu_name}}</a>
                                     <ul class="submenu">
										<?php $submenulists=DB::table('submenus')->where('menu_id',$menulist->id)->get(); ?>

                                     	 @foreach($submenulists as $submenulist)
                                     	<li class="nav-item"><a class="nav-link" href="#">{{$submenulist->submenu_name}}</a></li>
                                         @endforeach

                                     </ul>
                                 </li>
                                 @endif
                              @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
   </header> <!-- End header area -->
     
   @yield('contents')
	<!-- star client area -->

		
	<!-- end client area -->
       <!--start widget section-->
        <section class="widget-section">
			<div class="container">
				<div class="row">
						<div class="col-lg-3 col-sm-6 col-12 wow fadeInUp">
							<div class="widget-single-col">
								<h6>Contact Us</h6>
								<ul class="widget-link-list">
								  
                                     {!! $organizationinfo->contact_details !!}
								
								
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12 wow fadeInUp">
							<div class="widget-single-col">
								<h6>Product</h6>
								<ul class="widget-link-list ">
									<li><a href="#"><p>Discover features</p></a></li>
									<li><a href="#"><p>CMS integration</p></a></li>
									<li><a href="#"><p>Weekly sessions</p></a></li>
									<li><a href="#"><p>Free trials and demo</p></a></li>
									<li><a href="#"><p>CMS integration</p></a></li>
									<li><a href="#"><p>Free trials and demo</p></a></li>

								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12 wow fadeInUp">
							<div class="widget-single-col">
								<h6>Learning</h6>
								<ul class="widget-link-list">
									<li><a href="www.smartsoftware.inc"><p>Resources</p></a></li>
									<li><a href="#"><p>API documentation</p></a></li>
									<li><a href="#"><p>Admin guide</p></a></li>
									<li><a href="#"><p>FAQ</p></a></li>
									<li><a href="#"><p>terms and condition</p></a></li>
									<li><a href="#"><p>privancy policy</p></a></li>
								</ul>

							</div>
						</div> 
					<div class="col-lg-3 col-sm-6 col-12 wow fadeInUp">
						<div class="widget-single-col">
							  <div class="widget-single-col">
								<h6>Service</h6>
								<ul class="widget-link-list">
								
									<li><a href="#"><p>software Management</p></a></li>
									<li><a href="#"><p>Web Design</p></a></li>
									<li><a href="#"><p>API Integration</p></a></li>
									<li><a href="#"><p>Data Management</p></a></li>
									<li>
										@foreach($social as $social_icon)
									   <a href="{{$social_icon->social_link}}"><i class="fa {{$social_icon->social_name}}"></i></a>
									   @endforeach
									</li>
								</ul>

							</div>
						</div>
					</div> 
				</div>
			</div>
        </section>
	  <!-- End widget area -->
	  <!--  start footer area -->
	  <footer class="footer">
	    <div class="container">
		   <div class="row">
		      <div class="col-lg-6 col-md-6 col-sm-12">
			     <div class="footer-left">
				   <p>All Right Reserved | <a href="http://www.bangladeshchamber.ca/">{{$organizationinfo->copyright}}</a></p>
				 </div>
			  </div> 
			  <div class="col-lg-6 col-md-6 col-sm-12">
			     <div class="footer-right">
				     <p>Develop By | <a target="__blank" href="http://www.smartsoftware.com.bd/"> Smart Software Inc </a></p>
				 </div>
			  </div>
		   </div>
		</div>
	  </footer>
    <!--  End footer area -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/frontend')}}/js/jquery-3.3.1.slim.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/modal-video.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/popper.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/bootstrap.min.js" ></script>
    <!--owl carousel-->
   <script src="{{asset('assets/frontend')}}/js/owl.carousel.min.js"></script>
   <script src="{{asset('assets/frontend')}}/js/jquery.marquee.min.js"></script>
   <script src="{{asset('assets/frontend')}}/js/jquery.vticker.min.js"></script>
   <script src="{{asset('assets/frontend')}}/js/custom.js"></script>
   <script>
 $(function() {
  $('#v-tricker1').vTicker('init', {
  	speed:1000,
  	 pause:2000,
    showItems:4,
    padding:2
});
  $('#v-tricker2').vTicker('init', {speed: 1000,
    showItems:4,
     pause:2000,
    padding:2});
  });
</script>

<script>//  2. popup video
		$(".video").modalVideo({
		   channel: 'youtube',
		  youtube: {
			controls:1,
			showinfo:0,
            autoplay:true,
		  }   
	   });</script>

</body>
</html>
