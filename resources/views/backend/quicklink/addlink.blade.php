 @extends('layouts.backend')
@section('contents')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Add New Link</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Add Link</li>
        </ul>
      </div>

      <div class="row justify-content-md-center">
      	 
        <div class="col-md-10">
          
        	@if (Session('status'))
		     <div class="alert alert-success text-center">
                <strong>Link added successfully</strong>
           </div>
		      @endif

          <div class="tile">
             <form action="{{route('insertlink')}}" method="post">
             	@csrf
	            <div class="tile-body">

                <div class="form-group">
                  <label class="control-label">Link Title <span class="required_filed">*</span></label>
                  <input type="text" class="form-control" name="link_title" placeholder="Enter link title" value="{{old('link_title')}}" required>
                     @if($errors->has('link_title'))
                                 <p class="help-block">{{$errors->first('link_title')}}</p>
                    @endif
                </div>


                 <div class="form-group">
                  <label class="control-label">Link Url <span class="required_filed">*</span></label>
                  <input type="url" class="form-control" placeholder="http://bdjobs.com/" name="link_url" value="{{old('social_link')}}" required>
                    @if($errors->has('link_url'))
                                 <p class="help-block">{{$errors->first('link_url')}}</p>
                    @endif
                </div>  

             

	            </div>
	            <div class="tile-footer">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Link</button>
	            </div>
             </form>
          </div>
        </div>
        </div>
    





    </main>

    @endsection