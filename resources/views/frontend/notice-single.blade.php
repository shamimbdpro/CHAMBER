@extends('layouts.frontend')
@section('contents')

	<!--start main content -->
	<div class="main-content">
		<div class="container">
			<div class="row">
			   <div class="col-md-12">
			   	   <div class="notice_single">
			       <h2>{{$view_notice->notice_title}}</h2>
			       <p>{!! $view_notice->notice_des !!}</p>
			       <embed src="{{asset('assets/uploads/notice')}}/{{$view_notice->notice_file}}" type="application/pdf"   height="700px" width="100%">
			      </div>

			   </div>



			</div>
		</div>
	</div>
	<!--End main content -->


  @endsection