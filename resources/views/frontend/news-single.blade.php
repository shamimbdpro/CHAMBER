@extends('layouts.frontend')
@section('contents')

	<!--start main content -->
	<div class="main-content">
		<div class="container">
			<div class="row">
			   <div class="col-md-12">
			   	   <div class="notice_single">
			       <h2>{{$viewNews->latestnews_title }}</h2>
			       <p>{!! $viewNews->latestnews_des !!}</p>
			       <embed src="{{asset('assets/uploads/latestnews')}}/{{$viewNews->latestnews_file}}" type="application/pdf"   height="700px" width="100%">
			      </div>

			   </div>



			</div>
		</div>
	</div>
	<!--End main content -->


  @endsection