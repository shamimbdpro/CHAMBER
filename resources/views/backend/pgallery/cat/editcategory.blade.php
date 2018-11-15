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
		      <p class="sucmsg">Category added successfully</p>
		     @endif
          <div class="tile">
            <h3 class="tile-title">Edit Category </h3>
            
             <form action="{{route('updatepcat',$pcats->gallerycat_id)}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">
                <div class="form-group">
                    <label class="control-label">Category Name</label>
                    <input class="form-control" type="text" name="gallerycat_name" value="{{$pcats->gallerycat_name}}">
                         @if($errors->has('gallerycat_name'))
                                 <p class="help-block">{{$errors->first('gallerycat_name')}}</p>
                             @endif
                  </div>  


	                <div class="form-group">
	                  <label class="control-label">Update Category Image</label>
	                  <input class="form-control" type="file" name="gallerycat_img" value="{{$pcats->gallerycat_img}}">
	                  		 @if($errors->has('gallerycat_img'))
                                 <p class="help-block">{{$errors->first('gallerycat_img')}}</p>
                             @endif
	                  </div>
                    <img height="100" width="120" src="{{asset('assets/uploads/photogallery/catimage')}}/{{$pcats->gallerycat_img}}" alt="Image">
	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Category</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    
     
    </main>

    @endsection