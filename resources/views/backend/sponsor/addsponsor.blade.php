 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add Sponsor</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add Sponsor</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
		      <p class="sucmsg">Sponsor added successfully</p>
		   @endif
          <div class="tile">
            <h3 class="tile-title">Add New Sponsor </h3>
             <form action="{{route('insertsponsor')}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">
	                <div class="form-group">
	                  <label class="control-label">add Sponsor image</label>
	                  <input class="form-control" type="file" name="sponsor_img">
	                  		 @if($errors->has('sponsor_img'))
                                 <p class="help-block">{{$errors->first('sponsor_img')}}</p>
                             @endif
	                </div>
                   <div class="form-group">
                    <label for="sponsor_status">Publication Status</label>
                    <select class="form-control" id="sponsor_status" name="sponsor_status">
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                    </select>
                 </div>

	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Sponsor</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    
     
    </main>

    @endsection