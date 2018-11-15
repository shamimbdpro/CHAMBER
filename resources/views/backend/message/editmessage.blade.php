 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Update Message</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Update Message</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
          
        	@if (Session('status'))
		     <div class="alert alert-success text-center">
                <strong>Message Updated successfully</strong>
           </div>
		      @endif

          <div class="tile">
            <h3 class="tile-title">Update Message</h3>
             <form action="{{route('updatemessage',$editmessage->id)}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input type="text" class="form-control"  placeholder="Enter your Name" name="message_name" value="{{$editmessage->message_name}}
                  " required>
                     @if($errors->has('message_name '))
                                 <p class="help-block">{{$errors->first('message_name ')}}</p>
                         @endif
                </div>   

                   <div class="form-group">
                  <label class="control-label">Message Title</label>
                  <input type="text" class="form-control"  placeholder="Enter your Message Title" name="message_title" value="{{$editmessage->message_title}}" required>
                     @if($errors->has('message_title '))
                                 <p class="help-block">{{$errors->first('message_title ')}}</p>
                         @endif
                </div> 

                <div class="form-group">
                  <label class="control-label">Message description</label>
                  <textarea id="summernote2" class="form-control" placeholder="Enter your Message description" name="message_des" rows="10">{{$editmessage->message_des}}</textarea>
                     @if($errors->has('message_des'))
                                 <p class="help-block">{{$errors->first('message_des')}}</p>
                         @endif
                </div>

	                <div class="form-group">
	                  <label class="control-label">Add Image</label>
	                  <input class="form-control" type="file" name="message_photo" value="{{$editmessage->message_photo}}">
	                  		 @if($errors->has('message_photo'))
                                 <p class="help-block">{{$errors->first('message_photo')}}</p>
                         @endif
                          <img height="50" width="100" src="{{asset('assets/uploads/message')}}/{{$editmessage->message_photo }}" alt="Message Photo">
	                </div>
                <div class="form-group">
                  <label class="control-label">Enter Designation</label>
                  <input type="text" class="form-control"  placeholder="Enter your Designation" name="message_Designation" value="{{$editmessage->message_Designation}}" required>
                     @if($errors->has('message_Designation '))
                                 <p class="help-block">{{$errors->first('message_Designation ')}}</p>
                         @endif
                </div> 



                  <div class="form-group">
                    <label for="exampleSelect1">Publication Status</label>
                    <select class="form-control" id="exampleSelect1" name="message_status">
                      <option value="1">Publish</option>
                      <option value="0">Unpublish</option>
                    </select>
                  </div>


	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Message</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    





    </main>

    @endsection