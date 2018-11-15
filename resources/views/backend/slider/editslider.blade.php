 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit Category</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Edit Category</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
		      <p class="sucmsg">slider added successfully</p>
		     @endif
          <div class="tile">
            <h3 class="tile-title">Edit Slider </h3>
             @foreach($editsliders as $editslider)
             <form action="{{route('updateslider',$editslider->slider_id)}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">
	                <div class="form-group">
	                  <label class="control-label">add slider image</label>
	                  <input class="form-control" type="file" name="slider_img" value="{{$editslider->slider_img}}">
	                  		 @if($errors->has('slider_img'))
                                 <p class="help-block">{{$errors->first('slider_img')}}</p>
                             @endif
	                  </div>
                  
                  <img height="100" src="{{asset('assets/uploads/slider/')}}/{{$editslider->slider_img}}">
	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
	            </div>
             </form>
               @endforeach
          </div>
        </div>
        </div>
    
     
    </main>

    @endsection