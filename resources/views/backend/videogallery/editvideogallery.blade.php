 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add Video</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add video</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
		      <p class="sucmsg">Video added successfully</p>
		   @endif
          <div class="tile">
            <h3 class="tile-title">Add New Video </h3>
             <form action="{{route('updatevgallery',$getgalleryInfos->id)}}" method="post">
             	@csrf
	            <div class="tile-body">
	                <div class="form-group">
                    <label class="control-label">Video Title</label>
                    <input class="form-control" type="text" name="video_title" value="{{$getgalleryInfos->video_title}}">
                         @if($errors->has('video_title'))
                                 <p class="help-block">{{$errors->first('video_title')}}</p>
                             @endif
                  </div> 
                   <div class="form-group">
                    <label class="control-label">Video ID</label>
                    <input class="form-control" type="text" name="video_link" value="{{$getgalleryInfos->video_link}}">
                         @if($errors->has('video_link'))
                                 <p class="help-block">{{$errors->first('video_link')}}</p>
                             @endif
                  </div> 
	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Video</button>
	            </div>
             </form>
          </div>
        </div>
        </div>

    </main>

    @endsection