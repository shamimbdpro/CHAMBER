 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add latest news</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add latest news</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
          
        	@if (Session('status'))
		     <div class="alert alert-success text-center">
                <strong>News added successfully</strong>
           </div>
		      @endif

          <div class="tile">
            <h3 class="tile-title">Add latest News</h3>
             <form action="{{route('insertnews')}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">News Title</label>
                  <input type="text" class="form-control"  placeholder="Enter your News Title" name="latestnews_title" value="{{old('latestnews_title')}}" required>
                     @if($errors->has('News_title'))
                                 <p class="help-block">{{$errors->first('News_title')}}</p>
                         @endif
                </div> 

                <div class="form-group">
                  <label class="control-label">News description</label>
                  <textarea id="summernote2" class="form-control" placeholder="Enter your News description" name="latestnews_des" rows="10" value="{{old('latestnews_des')}}"></textarea>
                     @if($errors->has('latestnews_des'))
                                 <p class="help-block">{{$errors->first('latestnews_des')}}</p>
                         @endif
                </div>

                     <div class="form-group">
                          <label class="control-label">OR</label>
                     </div>
	                <div class="form-group">
	                  <label class="control-label">Add News PDF</label>
	                  <input class="form-control" type="file" name="latestnews_file" value="{{old('latestnews_file')}}">
	                  		 @if($errors->has('latestnews_file'))
                                 <p class="help-block">{{$errors->first('latestnews_file')}}</p>
                         @endif
	                </div>

                  <div class="form-group">
                    <label for="exampleSelect1">Publication Status</label>
                    <select class="form-control" id="exampleSelect1" name="latestnews_status">
                      <option value="1">Publish Notice</option>
                      <option value="0">Unpublish Notice</option>
                    </select>
                  </div>


	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add News</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    





    </main>

    @endsection