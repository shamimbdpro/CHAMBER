 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit sponsor</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Edit sponsor</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
		      <p class="sucmsg">Sponsor Updated successfully</p>
		     @endif
          <div class="tile">
            <h3 class="tile-title">Edit Sponsor </h3>
          
             <form action="{{route('updatesponsor',$editsponsor->id)}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">
	                <div class="form-group">
	                  <label class="control-label">Update sponsor image</label>
	                  <input class="form-control" type="file" name="sponsor_img" value="{{$editsponsor->sponsor_img}}">
	                  		 @if($errors->has('sponsor_img'))
                                 <p class="help-block">{{$errors->first('sponsor_img')}}</p>
                             @endif

                  <img height="50" width="80" src="{{asset('assets/uploads/sponsor/')}}/{{$editsponsor->sponsor_img}}">
	                  </div>
                  
                  <div class="form-group">
                          <label for="sponsor_status">Publication Status</label>
                          <select class="form-control" id="sponsor_status" name="sponsor_status">
                            <option value="1">active</option>
                            <option 
                          @if($editsponsor->sponsor_status==0)
                               selected="selected"
                         @endif value="0">Deactove</option>
                          </select>
                   </div>
	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Sponsor</button>
	            </div>
             </form>
          
          </div>
        </div>
        </div>
    
     
    </main>

    @endsection