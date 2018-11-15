		<section class="client-area">
		<div class="container">
			<div class="row justify-content-lg-center">
				<div class="col-lg-9">
					<div class="owl-carousel owl-theme client-slider custom-carousel">
						@foreach($sponsors as $sponsor)
						<div class="item wow fadeInUp">
							<div class="client-single">
								 <img src="{{asset('assets/uploads/sponsor')}}/{{$sponsor->sponsor_img}}" alt="Sponsor image">
							</div>
						</div>

						@endforeach
					
						
					</div>
				</div>	
			</div>	
		</div>	