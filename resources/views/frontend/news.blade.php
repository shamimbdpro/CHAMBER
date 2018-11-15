@extends('layouts.frontend')
@section('contents')

	<!--start main content -->
	<div class="main-content">
		<div class="container">
			@foreach($viewallnews as $viewalln)
			<div class="row single-notice">  <!-- single notice -->
				   <div class="col-lg-9 col-md-8">
					  <div class="notice-list">
						 <ul>
							<li>{{$viewalln->latestnews_title }}</li>
						 </ul>
					  </div>
				   </div>
				  <div class="col-lg-3 col-md-4 text-right">
					 <div class="notice-button">
						 <a href="{{route('news_single',$viewalln->latestnews_id)}}" class="btn btn-info" role="button" >view</a>

                     @if (file_exists(public_path().'/assets/uploads/latestnews/'.$viewalln->latestnews_file )) 

						 <a href="{{asset('assets/uploads/latestnews')}}/{{$viewalln->latestnews_file}}" class="btn btn-info" role="button" download>download</a>
 						@else
                       <button href="#" class="btn btn-danger" role="button" download>No downloadable</button>

                        @endif



					 </div>
				  </div>
				 
		    </div>	
             @endforeach
             <div class="mycustompaginate">
              {{$viewallnews->links()}}
            </div>
		</div>
	</div>
	<!--End main content -->
@endsection