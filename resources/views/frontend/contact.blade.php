@extends('layouts.frontend')
@section('contents')
     

	<!--start main content -->
	<div class="main-content">
	  <div class="container">
	     <div class="row">
               <!-- left content -->
			   <div class="col-lg-3">
			     <div class="left-content contact-us">
                   <h3>Contact us</h3>
                   <div class="contact-ifno"> 
                   	<ul class="widget-link-list">
                        {!! $organizationinfo->contact_details !!}
                        </ul>
                   </div>
                   <div class="widget-single-col">
								<ul class="widget-link-list" style="padding-bottom: 30px">
									<li>
										@foreach($social as $social_icon)
									   <a href="{{$social_icon->social_link}}"><i class="fa {{$social_icon->social_name}}"></i></a>
									   @endforeach
									</li>
								</ul>

				</div>

			   </div>
			   </div>
			   <!-- middle content -->
			   <div class="col-lg-9">
			      <div class="middle-content">
			
					<!-- contact form -->
					 <div class="heading2">
						<h2>Get in touch</h2>
					 </div>
					    <div class="row justify-content-md-center ">
                           <div class="col-md-6 ">
						    @if (Session('status'))
		                       <div class="alert alert-success text-center">
		                        <strong>Thanks for your Contact</strong>
		                      </div>
	                          @endif
	                      </div>
	                      </div>
					<div class="contactus">
					 <form action="{{route('insertcontact')}}" method="post">
					 	@csrf
					  <div class="row ">
						<div class="col-lg-6 mb-10">
						  <input type="text" class="form-control" placeholder="Full Name" name="contact_name" value="{{old('contact_name')}}">
						   @if($errors->has('contact_name'))
                                 <p class="help-block">{{$errors->first('contact_name')}}</p>
                             @endif
						</div>
						<div class="col-lg-6  mb-10">
						  <input type="email" class="form-control" placeholder="Email Address" name="contact_email" value="{{old('contact_email')}}">
						    @if($errors->has('contact_email'))
                                 <p class="help-block">{{$errors->first('contact_email')}}</p>
                             @endif
						</div>
					  </div> 
					  <div class="row">
						<div class="col  mb-10">
						  <textarea placeholder="Type Your Message" class="form-control" name="contact_message">{{old('contact_message')}}</textarea>
						    @if($errors->has('contact_message'))
                                 <p class="help-block">{{$errors->first('contact_message')}}</p>
                             @endif
						</div>
					  </div>
					  <button type="submit" class="btn btn-secedary">Submit</button>
					</form>
					</div>  <!-- End Conact form -->
					<br />
					<br />
					<br />
					
					
			      </div>			
			   </div>			
          
	  </div>
	  <div class="row"> 
	  <div class="col-lg-12"> 
          <!-- Google map -->
			 <div class="contact-details"> 
				 {!! $organizationinfo->map !!}

			</div> <!-- end map -->
	  </div>
	  </div>
	</div>
	</div>
	<!--End main content -->
	@endsection