 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add News</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add News</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
		      <p class="sucmsg">Ournews added successfully</p>
		   @endif
          <div class="tile">
            <h3 class="tile-title">Add Our News Item </h3>
             <form action="{{route('insertournews')}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">News link</label>
                  <input class="form-control" placeholder="Enter News link" type="url" name="ournews_link">
                </div>


	                <div class="form-group">
	                  <label class="control-label">Add News Logo</label>
	                  <input class="form-control" type="file" name="ournews_photo">
	                  		 @if($errors->has('ournews_photo'))
                                 <p class="help-block">{{$errors->first('ournews_photo')}}</p>
                         @endif
	                </div>

                  <div class="form-group">
                    <label for="exampleSelect1">Example select</label>
                    <select class="form-control" id="exampleSelect1" name="ournews_status">
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                    </select>
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