@extends('layouts.frontend')
@section('contents')

	<!--start main content -->
	<div class="main-content">
		<div class="container">
			<div class="row">
			   <div class="col-md-12">
			   	   <div class="notice_single">
			       <embed src="{{asset('assets/uploads/newslatter')}}/{{$view_newslatter->newslatter_pdf}}" type="application/pdf"   height="700px" width="100%">
			      </div>

			   </div>



			</div>
		</div>
	</div>
	<!--End main content -->


  @endsection