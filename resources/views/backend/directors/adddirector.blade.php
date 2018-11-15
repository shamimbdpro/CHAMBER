 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add Director</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">add Director</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
        	@if (Session('status'))
            <div class="alert alert-success text-center">
                <strong>Director added successfully</strong>
            </div>
		     @endif
          <div class="tile">
            <h3 class="tile-title">Add New Director</h3>
             <form action="{{route('inser_director')}}" method="post" enctype="multipart/form-data">
             	@csrf
	            <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">Director Name <span class="required_filed">*</span></label>
                  <input type="text" class="form-control"  placeholder="Enter Director Name" name="director_name" value="{{old('director_name')}}">
                     @if($errors->has('director_name'))
                                 <p class="help-block">{{$errors->first('director_name')}}</p>
                         @endif
                </div> 

                <div class="form-group">
                  <label class="control-label">Director Title <span class="required_filed">*</span></label>
                  <input type="text" class="form-control"  placeholder="Enter Director Title" name="director_title" value="{{old('director_title')}}">
                     @if($errors->has('director_title'))
                                 <p class="help-block">{{$errors->first('director_title')}}</p>
                         @endif
                </div> 

                <div class="form-group">
                  <label class="control-label">Director Email</label>
                  <input type="email" class="form-control"  placeholder="Enter Director Email" name="director_email" value="{{old('director_email')}}">
                </div> 

                <div class="form-group">
                  <label class="control-label">Director Phone</label>
                  <input type="text" class="form-control"  placeholder="Enter Director Phone Number" name="director_phone" value="{{old('director_phone')}}">
                </div> 
                <div class="form-group">
                  <label class="control-label">Director Message</label>
                  <textarea id="summernote" class="form-control" placeholder="Director Message" name="director_message" rows="10" value=""></textarea>
               </div>

	                <div class="form-group">
	                  <label class="control-label">Add Director Image <span class="required_filed">*</span></label>
	                  <input class="form-control" type="file" name="director_img" value="{{old('director_img')}}">
	                  		 @if($errors->has('director_img'))
                                 <p class="help-block">{{$errors->first('director_img')}}</p>
                         @endif
	                </div>

	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Director</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    

    </main>

    @endsection