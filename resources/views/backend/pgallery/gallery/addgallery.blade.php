 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add Gallery</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add Gallery</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
		      <p class="sucmsg">Gallery added successfully</p>
		     @endif
          <div class="tile">
            <h3 class="tile-title">Add New Gallery </h3>
             <form action="{{route('insertgallery')}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">
                    <div class="form-group">
	                  <label class="control-label">Gallery Image</label>
	                  <input class="form-control" type="file" name="pgallery_img" alt="Gallery Image">
	                  		 @if($errors->has('pgallery_img'))
                                 <p class="help-block">{{$errors->first('pgallery_img')}}</p>
                             @endif
	                </div>

                <div class="form-group">
                    <label for="exampleSelect1">Category</label>
                    <select class="form-control" id="ceategoru" name="pgallery_cat">
                      @foreach($categoryitems as $categoryitem)
                      <option value="{{$categoryitem->gallerycat_id}}">{{$categoryitem->gallerycat_name}}</option>
                      @endforeach
                    </select>
                 </div>
         


                <div class="form-group">
                    <label for="exampleSelect1">Publication Status</label>
                    <select class="form-control" id="exampleSelect1" name="pgallery_status">
                      <option value="1">Publish Gallery</option>
                      <option value="0">Unpublish Gallery</option>
                    </select>
                 </div>


	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Gallery</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    
     
    </main>

    @endsection