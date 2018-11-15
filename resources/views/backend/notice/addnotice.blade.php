 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add Notice</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add Notice</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
		      <p class="sucmsg">Notice added successfully</p>
		   @endif
          <div class="tile">
            <h3 class="tile-title">Add New Notice</h3>
             <form action="{{route('insernotice')}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">Notice Title</label>
                  <input type="text" class="form-control"  placeholder="Enter your Notice Title" name="notice_title" value="{{old('notice_title')}}" required>
                     @if($errors->has('notice_title'))
                                 <p class="help-block">{{$errors->first('notice_title')}}</p>
                         @endif
                </div> 

                <div class="form-group">
                  <label class="control-label">Notice description</label>
                  <textarea id="summernote" class="form-control" placeholder="Enter your Notice description" name="notice_des" rows="10" value="{{old('notice_des')}}"></textarea>
                     @if($errors->has('notice_des'))
                                 <p class="help-block">{{$errors->first('notice_des')}}</p>
                         @endif
                </div>


                     <div class="form-group">
                          <label class="control-label">OR</label>
                     </div>
	                <div class="form-group">
	                  <label class="control-label">Add Notice PDF</label>
	                  <input class="form-control" type="file" name="notice_file" value="{{old('notice_file')}}">
	                  		 @if($errors->has('notice_file'))
                                 <p class="help-block">{{$errors->first('notice_file')}}</p>
                         @endif
	                </div>

                  <div class="form-group">
                    <label for="exampleSelect1">Publication Status</label>
                    <select class="form-control" id="exampleSelect1" name="notice_status">
                      <option value="1">Publish Notice</option>
                      <option value="0">Unpublish Notice</option>
                    </select>
                  </div>


	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Notice</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    





    </main>

    @endsection