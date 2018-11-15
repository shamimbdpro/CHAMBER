 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit Notice</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Edit Notice</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
		      <p class="sucmsg">Notice Updated successfully</p>
		     @endif
          <div class="tile">
            <h3 class="tile-title">Edit Notice</h3>
             <form action="{{route('updatenotice',$editnotice->notice_id)}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">Notice Title</label>
                  <input type="text" class="form-control"  placeholder="Enter your Notice Title" name="notice_title" value="{{$editnotice->notice_title}}" required>
                     @if($errors->has('notice_title'))
                                 <p class="help-block">{{$errors->first('notice_title')}}</p>
                         @endif
                </div> 

                <div class="form-group">
                  <label class="control-label">Notice description</label>
                  <textarea id="summernote" class="form-control" placeholder="Enter your Notice description" name="notice_des" rows="10">{{$editnotice->notice_des}}</textarea>
                     @if($errors->has('notice_des'))
                                 <p class="help-block">{{$errors->first('notice_des')}}</p>
                         @endif
                </div>


                     <div class="form-group">
                          <label class="control-label">OR</label>
                     </div>
	                <div class="form-group">
	                  <label class="control-label">Add Notice PDF</label>
	                  <input class="form-control" type="file" name="notice_file" value="{{$editnotice->notice_file}}">
	                  		 @if($errors->has('notice_file'))
                                 <p class="help-block">{{$errors->first('notice_file')}}</p>
                         @endif

                        <embed src="{{asset('assets/uploads/notice')}}/{{$editnotice->notice_file}}" type="application/pdf"   height="300px" width="100%">
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
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Notice</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    





    </main>

    @endsection