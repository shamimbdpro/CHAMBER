 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add slider</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add slider</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
		      <p class="sucmsg">slider added successfully</p>
		   @endif
          <div class="tile">
            <h3 class="tile-title">Add New Slider </h3>
             <form action="{{route('insertslider')}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">
	                <div class="form-group">
	                  <label class="control-label">add slider image</label>
	                  <input class="form-control" type="file" name="slider_img">
	                  		 @if($errors->has('slider_img'))
                                 <p class="help-block">{{$errors->first('slider_img')}}</p>
                             @endif
	                </div>
	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    
     
    </main>

    @endsection